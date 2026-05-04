<?php

if (!defined('ABSPATH')) {
    exit;
}

class MyTheme_GitHub_Updater
{

    private const RELEASE_TRANSIENT_KEY = 'mytheme_github_release_';
    private $theme_slug;
    private $theme_data;
    private $github_api_url;
    private $github_repo;

    public function __construct()
    {

        $this->theme_slug = get_stylesheet();
        $this->theme_data = wp_get_theme($this->theme_slug);
        $this->github_api_url = MYTHEME_UPDATE_API;
        $this->github_repo = MYTHEME_GITHUB_REPO;

        add_filter(
            'pre_set_site_transient_update_themes',
            [$this, 'check_update']
        );

        add_filter(
            'themes_api',
            [$this, 'theme_info'],
            10,
            3
        );

        add_filter(
            'http_request_args',
            [$this, 'add_github_auth_headers'],
            10,
            2
        );

        add_action(
            'upgrader_process_complete',
            [$this, 'clear_release_cache_after_theme_upgrade'],
            10,
            2
        );

        add_action(
            'admin_menu',
            [$this, 'register_update_page']
        );

        add_action(
            'admin_post_ziada_check_theme_update',
            [$this, 'force_check_update']
        );
    }

    public function check_update($transient)
    {

        if (empty($transient->checked) || !is_object($transient)) {
            return $transient;
        }

        $release = $this->get_latest_release();

        if (!$release) {
            return $transient;
        }

        $latest_version  = ltrim((string) $release->tag_name, 'v');
        $current_version = $this->theme_data->get('Version');

        if ($latest_version === '' || !version_compare($current_version, $latest_version, '<')) {
            return $transient;
        }

        $package = $this->resolve_package_url($release);

        if (!$package) {
            return $transient;
        }

        $update = [
            'theme'       => $this->theme_slug,
            'new_version' => $latest_version,
            'url'         => esc_url_raw((string) ($release->html_url ?? '')),
            'package'     => esc_url_raw($package),
        ];

        $transient->response[$this->theme_slug] = $update;

        return $transient;
    }

    public function theme_info($result, $action, $args)
    {

        if ($action !== 'theme_information') {
            return $result;
        }

        if (!isset($args->slug) || $args->slug !== $this->theme_slug) {
            return $result;
        }

        $release = $this->get_latest_release();

        if (!$release) {
            return $result;
        }

        $latest_version = ltrim((string) $release->tag_name, 'v');

        $info = new stdClass();

        $info->name     = $this->theme_data->get('Name');
        $info->slug     = $this->theme_slug;
        $info->version  = $latest_version;
        $info->author   = $this->theme_data->get('Author');
        $info->homepage = esc_url_raw((string) ($release->html_url ?? ''));

        $release_notes = isset($release->body)
            ? wp_kses_post(nl2br((string) $release->body))
            : '';

        $info->sections = [
            'description' => wp_kses_post($this->theme_data->get('Description')),
            'changelog'   => $release_notes,
        ];

        return $info;
    }

    public function add_github_auth_headers($args, $url)
    {

        if (!$this->is_github_update_url($url)) {
            return $args;
        }

        if (!isset($args['headers']) || !is_array($args['headers'])) {
            $args['headers'] = [];
        }

        $args['headers']['User-Agent'] = 'WordPress/' . get_bloginfo('version') . '; ' . home_url('/');
        $args['headers']['Accept'] = 'application/vnd.github+json';

        if (!empty(MYTHEME_GITHUB_TOKEN)) {
            $args['headers']['Authorization'] = 'Bearer ' . MYTHEME_GITHUB_TOKEN;
        }

        if (strpos($url, '/releases/assets/') !== false) {
            $args['headers']['Accept'] = 'application/octet-stream';
        }

        return $args;
    }

    public function clear_release_cache_after_theme_upgrade($upgrader, $hook_extra)
    {

        if (!is_array($hook_extra) || ($hook_extra['type'] ?? '') !== 'theme') {
            return;
        }

        if (($hook_extra['action'] ?? '') !== 'update') {
            return;
        }

        delete_transient(self::RELEASE_TRANSIENT_KEY . $this->theme_slug);
    }

    public function register_update_page()
    {
        add_theme_page(
            __('Ziada Updates', 'arqamweb'),
            __('Ziada Updates', 'arqamweb'),
            'update_themes',
            'ziada-updates',
            [$this, 'render_update_page']
        );
    }

    public function render_update_page()
    {
        if (!current_user_can('update_themes')) {
            wp_die(
                esc_html__('You are not allowed to check theme updates.', 'arqamweb'),
                esc_html__('Permission denied', 'arqamweb'),
                ['response' => 403]
            );
        }

        $release = $this->get_latest_release();
        $latest_version = $release && !empty($release->tag_name)
            ? ltrim((string) $release->tag_name, 'v')
            : '';
        $current_version = $this->theme_data->get('Version');
        $package = $release ? $this->resolve_package_url($release) : '';
        $has_update = $latest_version !== '' && version_compare($current_version, $latest_version, '<');
        $checked = isset($_GET['ziada_update_checked'])
            ? sanitize_text_field(wp_unslash($_GET['ziada_update_checked']))
            : '';

        echo '<div class="wrap">';
        echo '<h1>' . esc_html__('Ziada GitHub Updates', 'arqamweb') . '</h1>';

        if ($checked === '1') {
            echo '<div class="notice notice-success is-dismissible"><p>';
            echo esc_html__('Update cache was cleared and WordPress checked GitHub releases again.', 'arqamweb');
            echo '</p></div>';
        }

        echo '<p>' . esc_html__('Use this page after publishing a new GitHub Release. It clears WordPress update cache and asks GitHub for the latest Ziada release.', 'arqamweb') . '</p>';

        echo '<table class="widefat striped" style="max-width: 760px;">';
        echo '<tbody>';
        echo '<tr><th scope="row">' . esc_html__('Current theme version', 'arqamweb') . '</th><td>' . esc_html($current_version) . '</td></tr>';
        echo '<tr><th scope="row">' . esc_html__('Latest GitHub release', 'arqamweb') . '</th><td>' . esc_html($latest_version ?: __('Not found', 'arqamweb')) . '</td></tr>';
        echo '<tr><th scope="row">' . esc_html__('Package URL', 'arqamweb') . '</th><td>' . esc_html($package ?: __('Not found', 'arqamweb')) . '</td></tr>';
        echo '<tr><th scope="row">' . esc_html__('Update status', 'arqamweb') . '</th><td>';

        if (!$release) {
            echo esc_html__('Could not read the latest GitHub release.', 'arqamweb');
        } elseif (!$package) {
            echo esc_html__('Release found, but no zip package was found.', 'arqamweb');
        } elseif ($has_update) {
            echo esc_html__('An update should appear in WordPress updates.', 'arqamweb');
        } else {
            echo esc_html__('No newer release than the installed theme version.', 'arqamweb');
        }

        echo '</td></tr>';
        echo '</tbody>';
        echo '</table>';

        echo '<p>';
        echo '<a class="button button-primary" href="' . esc_url($this->get_force_check_url()) . '">';
        echo esc_html__('Check GitHub Release Now', 'arqamweb');
        echo '</a> ';
        echo '<a class="button" href="' . esc_url(admin_url('update-core.php')) . '">';
        echo esc_html__('Open WordPress Updates', 'arqamweb');
        echo '</a>';
        echo '</p>';
        echo '</div>';
    }

    public function force_check_update()
    {
        if (!current_user_can('update_themes')) {
            wp_die(
                esc_html__('You are not allowed to check theme updates.', 'arqamweb'),
                esc_html__('Permission denied', 'arqamweb'),
                ['response' => 403]
            );
        }

        check_admin_referer('ziada_check_theme_update');

        $this->clear_update_caches();

        if (function_exists('wp_update_themes')) {
            wp_update_themes();
        }

        wp_safe_redirect(
            add_query_arg(
                'ziada_update_checked',
                '1',
                admin_url('themes.php?page=ziada-updates')
            )
        );
        exit;
    }

    private function get_latest_release()
    {

        $release = get_transient(self::RELEASE_TRANSIENT_KEY . $this->theme_slug);

        if ($release) {
            return $release;
        }

        $response = wp_safe_remote_get(
            esc_url_raw($this->github_api_url),
            [
                'timeout' => 15,
                'headers' => [
                    'Accept' => 'application/vnd.github+json',
                    'User-Agent' => 'WordPress/' . get_bloginfo('version') . '; ' . home_url('/'),
                ],
            ]
        );

        if (is_wp_error($response)) {
            return false;
        }

        $status_code = (int) wp_remote_retrieve_response_code($response);

        if ($status_code < 200 || $status_code >= 300) {
            return false;
        }

        $release = json_decode(wp_remote_retrieve_body($response));

        if (!$release || !isset($release->tag_name)) {
            return false;
        }

        set_transient(
            self::RELEASE_TRANSIENT_KEY . $this->theme_slug,
            $release,
            $this->get_cache_ttl()
        );

        return $release;
    }

    private function resolve_package_url($release)
    {

        $expected_assets = array_filter([
            $this->theme_slug . '.zip',
            $this->github_repo . '.zip',
        ]);

        if (!empty($release->assets) && is_array($release->assets)) {
            foreach ($release->assets as $asset) {
                $asset_name = (string) ($asset->name ?? '');

                if (!in_array($asset_name, $expected_assets, true)) {
                    continue;
                }

                if (!empty($asset->url)) {
                    return (string) $asset->url;
                }

                if (!empty($asset->browser_download_url)) {
                    return (string) $asset->browser_download_url;
                }
            }
        }

        if (!empty($release->zipball_url)) {
            return (string) $release->zipball_url;
        }

        return '';
    }

    private function get_cache_ttl()
    {
        if (current_user_can('manage_options')) {
            return 5 * MINUTE_IN_SECONDS;
        }

        return 12 * HOUR_IN_SECONDS;
    }

    private function clear_update_caches()
    {
        delete_transient(self::RELEASE_TRANSIENT_KEY . $this->theme_slug);
        delete_site_transient('update_themes');
        wp_clean_themes_cache(true);
    }

    private function get_force_check_url()
    {
        return wp_nonce_url(
            admin_url('admin-post.php?action=ziada_check_theme_update'),
            'ziada_check_theme_update'
        );
    }

    private function is_github_update_url($url)
    {
        if (!is_string($url)) {
            return false;
        }

        $host = wp_parse_url($url, PHP_URL_HOST);
        $path = wp_parse_url($url, PHP_URL_PATH);

        if ($host !== 'api.github.com' || !is_string($path)) {
            return false;
        }

        $repo_releases_path = '/repos/' . MYTHEME_GITHUB_USER . '/' . $this->github_repo . '/releases';

        return strpos($path, $repo_releases_path) === 0;
    }
}
