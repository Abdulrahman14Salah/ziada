<?php

/**
 * Register Custom Image Sizes for Resources Link Post
 */
add_image_size('single-link', 800, 400, true);
add_image_size('single-pdf', 800, 450, true);


/**
 * Remove Flex in Container
 */
add_filter('astra_apply_flex_based_css', '__return_false');

/**
 * Add Svg To Media Library
 */

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    $filetype = wp_check_filetype($filename, $mimes);
    return [
        'ext' => $filetype['ext'],
        'type' => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4);

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'fix_svg');

/**
 * Summary of page_link_by_slug
 * @param mixed $slug
 */
function page_link_by_slug($slug)
{
    $page = get_page_by_path($slug);
    return $page ? get_permalink($page->ID) : '#';
}


/**
 * Summary of ziad_header_contact_shortcode
 * @return bool|string
 */
function ziad_header_contact_shortcode()
{
    ob_start();
?>
    <div class="ast-container flex flex-col sm:flex-row items-center justify-center sm:justify-end gap-4 text-sm">
		 <a href="tel:+97143943751"
            class="flex items-center gap-2 text-foreground hover:text-primary transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"
                class="h-4 w-4 text-primary">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2
				19.79 19.79 0 0 1-8.63-3.07
				19.5 19.5 0 0 1-6-6
				19.79 19.79 0 0 1-3.07-8.67
				A2 2 0 0 1 4.11 2h3
				a2 2 0 0 1 2 1.72
				12.84 12.84 0 0 0 .7 2.81
				2 2 0 0 1-.45 2.11
				L8.09 9.91a16 16 0 0 0 6 6
				l1.27-1.27a2 2 0 0 1 2.11-.45
				12.84 12.84 0 0 0 2.81.7
				A2 2 0 0 1 22 16.92z" />
            </svg>
            <span>Landline: (04) 394 3751</span>
        </a>
       
		<a href="tel:+971509199750"
            class="flex items-center gap-2 text-foreground hover:text-primary transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"
                class="h-4 w-4 text-primary">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2
				19.79 19.79 0 0 1-8.63-3.07
				19.5 19.5 0 0 1-6-6
				19.79 19.79 0 0 1-3.07-8.67
				A2 2 0 0 1 4.11 2h3
				a2 2 0 0 1 2 1.72
				12.84 12.84 0 0 0 .7 2.81
				2 2 0 0 1-.45 2.11
				L8.09 9.91a16 16 0 0 0 6 6
				l1.27-1.27a2 2 0 0 1 2.11-.45
				12.84 12.84 0 0 0 2.81.7
				A2 2 0 0 1 22 16.92z" />
            </svg>
            <span>Mobile: +971 509199750</span>
        </a>

        <a href="mailto:info@ziadadc.com"
            class="flex items-center gap-2 text-foreground hover:text-primary transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"
                class="h-4 w-4 text-primary">
                <rect width="20" height="16" x="2" y="4" rx="2" />
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
            </svg>
            <span>Email: info@ziadadc.com</span>
        </a>

    </div>
<?php
    return ob_get_clean();
}
add_shortcode('header_contact', 'ziad_header_contact_shortcode');
