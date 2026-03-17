<?php

/**
 * ArqamWeb Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ArqamWeb
 * @since 1.0.1
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ARQAMWEB_VERSION', '1.1.4');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{
    wp_enqueue_style(
        'arqamweb-theme-css',
        get_stylesheet_directory_uri() . '/style.css',
        ['astra-theme-css'],
        CHILD_THEME_ARQAMWEB_VERSION,
        'all'
    );

    wp_enqueue_style(
        'aos-css',
        get_stylesheet_directory_uri() . '/frontend/public/css/aos-css.min.css',
        ['astra-theme-css'],
        CHILD_THEME_ARQAMWEB_VERSION,
        'all'
    );

    wp_enqueue_style(
        'blaze-slider-css',
        get_stylesheet_directory_uri() . '/frontend/public/css/blaze.css',
        ['astra-theme-css'],
        CHILD_THEME_ARQAMWEB_VERSION,
        'all'
    );

    wp_enqueue_style(
        'style-css',
        get_stylesheet_directory_uri() . '/frontend/public/style.min.css',
        array('arqamweb-theme-css'),
        CHILD_THEME_ARQAMWEB_VERSION,
        'all'
    );
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);



/**

 * Enqueue script

 */

function my_custom_scripts()
{

    wp_enqueue_script(

        'blaze-slider-js',

        get_stylesheet_directory_uri() . '/frontend/public/js/blaze-slider.min.js',

        array(),

        CHILD_THEME_ARQAMWEB_VERSION,

        array(
            'strategy' => 'defer',
            'in_footer' => 'false',
        )
    );


    wp_enqueue_script(

        'aos-js',

        get_stylesheet_directory_uri() . '/frontend/public/js/aos.js',

        array(),

        CHILD_THEME_ARQAMWEB_VERSION,

        array(
            'strategy' => 'defer',
            'in_footer' => 'false',
        )
    );


    wp_enqueue_script(

        'flowbite-js',

        get_stylesheet_directory_uri() . '/frontend/public/js/flowbite.min.js',

        array(),

        CHILD_THEME_ARQAMWEB_VERSION,

        array(
            'strategy' => 'defer',
            'in_footer' => 'false',
        )
    );

    wp_enqueue_script(

        'main-js',

        get_stylesheet_directory_uri() . '/frontend/public/js/main.js',

        array(),

        CHILD_THEME_ARQAMWEB_VERSION,

        array(
            'strategy' => 'defer',
            'in_footer' => 'true',
        )
    );
}

add_action('wp_enqueue_scripts', 'my_custom_scripts');


require_once(get_stylesheet_directory() . '/inc/features.php');



add_action('wp_ajax_submit_eligibility_form', 'handle_eligibility_form');
add_action('wp_ajax_nopriv_submit_eligibility_form', 'handle_eligibility_form');

function handle_eligibility_form()
{

    if (!wp_verify_nonce($_POST['nonce'], 'eligibility_nonce')) {
        wp_send_json_error(['message' => 'Security check failed']);
    }

    $name = sanitize_text_field($_POST['full_name']);
    $email = sanitize_email($_POST['email']);
    $whatsapp = sanitize_text_field($_POST['whatsapp']);
    $country = sanitize_text_field($_POST['country']);
    $employment = sanitize_text_field($_POST['employment']);
    $income = sanitize_text_field($_POST['income']);
    $family = sanitize_text_field($_POST['family']);

    $message = "
Name: $name
Email: $email
WhatsApp: $whatsapp
Country: $country
Employment: $employment
Income: $income
Family: $family
";

    wp_mail(
        get_option('admin_email'),
        'New Spain Digital Nomad Lead',
        $message
    );

    wp_send_json_success(['message' => '✅ Thank you! We will contact you shortly.']);
}


// إخفاء الـ Secondary Menu في كل الصفحات
add_filter('astra_secondary_menu_disable', function ($disable) {

    // لو صفحة Spain Digital Nomad Visa → أظهرها
    if (is_page_template('spain-digital-nomad-visa.php')) {
        return false;
    }

    // باقي الموقع → إخفاء
    return true;
});

// إخفاء الـ Primary Menu في صفحة Spain Digital Nomad Visa فقط
add_filter('astra_primary_menu_disable', function ($disable) {

    if (is_page_template('spain-digital-nomad-visa.php')) {
        return true;
    }

    return $disable;
});


/*
** Add a hidden field to Contact Form 7 forms
 */
add_filter('wpcf7_validate', function ($result) {

    if (!empty($_POST['website-url'] ?? '')) {
        $result->invalidate('', '');
    }

    return $result;
}, 10, 2);


require_once get_stylesheet_directory() . '/inc/core/config.php';
require_once get_stylesheet_directory() . '/inc/updates/updater.php';

new MyTheme_GitHub_Updater();
