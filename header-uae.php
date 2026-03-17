<?php

/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
    <?php astra_head_top(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    if (apply_filters('astra_header_profile_gmpg_link', true)) {
    ?>
        <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php
    }
    ?>
    <?php wp_head(); ?>
    <?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
    <?php astra_body_top(); ?>
    <?php wp_body_open(); ?>

    <a
        class="skip-link screen-reader-text"
        href="#content">
        <?php echo esc_html(astra_default_strings('string-header-skip-link', false)); ?>
    </a>

    <div
        <?php
        echo wp_kses_post(
            astra_attr(
                'site',
                array(
                    'id'    => 'page',
                    'class' => 'hfeed site',
                )
            )
        );
        ?>>
        <?php
        astra_header_before();

        ?>




        <header class="site-header header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-hide-custom-menu-mobile ast-builder-menu-toggle-icon ast-mobile-header-inline" id="masthead" itemtype="https://schema.org/WPHeader" itemscope="itemscope" itemid="#masthead">
            <div id="ast-desktop-header" data-toggle-type="dropdown">
                <div class="ast-above-header-wrap  ">
                    <div class="ast-above-header-bar ast-above-header  site-header-focus-item" data-section="section-above-header-builder">
                        <div class="site-above-header-wrap ast-builder-grid-row-container site-header-focus-item ast-container" data-section="section-above-header-builder">
                            <div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
                                <div class="site-header-above-section-left site-header-section ast-flex site-header-section-left">
                                </div>
                                <div class="site-header-above-section-right site-header-section ast-flex ast-grid-right-section">
                                    <aside class="header-widget-area widget-area site-header-focus-item" data-section="sidebar-widgets-header-widget-1" aria-label="Header Widget 1" role="region">
                                        <div class="header-widget-area-inner site-info-inner">
                                            <section id="block-8" class="widget widget_block">
                                                <p> </p>
                                                <div class="ast-container flex flex-col sm:flex-row items-center justify-center sm:justify-end gap-4 text-sm">

                                                    <a href="tel:+971509199750" class="flex items-center gap-2 text-foreground hover:text-primary transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-primary">
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
				A2 2 0 0 1 22 16.92z"></path>
                                                        </svg>
                                                        <span>Mobile: +971 509199750</span>
                                                    </a>

                                                    <a href="mailto:info@ziadadc.com" class="flex items-center gap-2 text-foreground hover:text-primary transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-primary">
                                                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                                        </svg>
                                                        <span>Email: info@ziadadc.com</span>
                                                    </a>

                                                </div>
                                                <p></p>
                                            </section>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ast-main-header-wrap main-header-bar-wrap ">
                    <div class="ast-primary-header-bar ast-primary-header main-header-bar site-header-focus-item" data-section="section-primary-header-builder">
                        <div class="site-primary-header-wrap ast-builder-grid-row-container site-header-focus-item ast-container" data-section="section-primary-header-builder">
                            <div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-grid-center-col-layout">
                                <div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
                                    <div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
                                        <div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
                                            <span class="site-logo-img"><a href="https://ziadadc.com/" class="custom-logo-link" rel="home" aria-current="page"><img width="159" height="56" src="https://ziadadc.com/wp-content/uploads/2026/01/ZIADA-LOGO-159x56.webp" class="custom-logo" alt="ZIADA-LOGO" decoding="async" srcset="https://ziadadc.com/wp-content/uploads/2026/01/ZIADA-LOGO-159x56.webp 159w, https://ziadadc.com/wp-content/uploads/2026/01/ZIADA-LOGO-300x106.webp 300w, https://ziadadc.com/wp-content/uploads/2026/01/ZIADA-LOGO-1024x361.webp 1024w, https://ziadadc.com/wp-content/uploads/2026/01/ZIADA-LOGO-768x271.webp 768w, https://ziadadc.com/wp-content/uploads/2026/01/ZIADA-LOGO-1536x542.webp 1536w, https://ziadadc.com/wp-content/uploads/2026/01/ZIADA-LOGO.webp 2048w" sizes="(max-width: 159px) 100vw, 159px"></a></span>
                                        </div>
                                        <!-- .site-branding -->
                                    </div>
                                    <div class="site-header-primary-section-left-center site-header-section ast-flex ast-grid-left-center-section">
                                    </div>
                                </div>
                                <div class="site-header-primary-section-center site-header-section ast-flex ast-grid-section-center">
                                    <div class="ast-builder-menu-1 ast-builder-menu ast-flex ast-builder-menu-1-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-hb-menu-1">
                                        <div class="ast-main-header-bar-alignment">
                                            <div class="main-header-bar-navigation">
                                                <nav class="site-navigation ast-flex-grow-1 navigation-accessibility site-header-focus-item" id="primary-site-navigation-desktop" aria-label="Primary Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
                                                    <div class="main-navigation ast-inline-flex">
                                                        <ul id="ast-hf-menu-1" class="main-header-menu ast-menu-shadow ast-nav-menu ast-flex  submenu-with-border stack-on-mobile font-bold">
                                                            <li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-33">
                                                                <a href="#home" aria-current="page" class="menu-link">Overview</a>
                                                            </li>
                                                            <li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52">
                                                                <a href="#whats-included" class="menu-link">What's Included</a>
                                                            </li>
                                                            <li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50">
                                                                <a href="#packages" class="menu-link">Packages</a>
                                                            </li>
                                                            <li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53">
                                                                <a href="#timeline" class="menu-link">Timeline</a>
                                                            </li>
                                                            <li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51">
                                                                <a href="#why-ziada" class="menu-link">Why Ziada</a>
                                                            </li>
                                                            <li id="menu-item-510" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-510">
                                                                <a href="#faqs" class="menu-link">FAQs</a>
                                                            </li>
                                                            <li id="menu-item-5120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5120">
                                                                <a href="#lead-form" class="menu-link">Get Started</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
                                    <div class="site-header-primary-section-right-center site-header-section ast-flex ast-grid-right-center-section">
                                    </div>
                                    <div class="ast-builder-layout-element ast-flex site-header-focus-item ast-header-button-1" data-section="section-hb-button-1">
                                        <div class="ast-builder-button-wrap ast-builder-button-size-">
                                            <a class="ast-custom-button-link" href="#lead-form" target="_self" role="button" aria-label="Book Free Consultation">
                                                <div class="ast-custom-button">Book Free Consultation</div>
                                            </a>
                                            <a class="menu-link" href="#lead-form" target="_self">Book Free Consultation</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Main Header Bar Wrap -->
            <div id="ast-mobile-header" class="ast-mobile-header-wrap " data-type="dropdown">
                <div class="ast-main-header-wrap main-header-bar-wrap">
                    <div class="ast-primary-header-bar ast-primary-header main-header-bar site-primary-header-wrap site-header-focus-item ast-builder-grid-row-layout-default ast-builder-grid-row-tablet-layout-default ast-builder-grid-row-mobile-layout-default" data-section="section-primary-header-builder">
                        <div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
                            <div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
                                <div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
                                    <div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
                                        <span class="site-logo-img"><a href="https://ziadadc.com/" class="custom-logo-link" rel="home" aria-current="page"><img width="159" height="56" src="https://ziadadc.com/wp-content/uploads/2026/01/ZIADA-LOGO-159x56.webp" class="custom-logo" alt="ZIADA-LOGO" decoding="async" srcset="https://ziadadc.com/wp-content/uploads/2026/01/ZIADA-LOGO-159x56.webp 159w, https://ziadadc.com/wp-content/uploads/2026/01/ZIADA-LOGO-300x106.webp 300w, https://ziadadc.com/wp-content/uploads/2026/01/ZIADA-LOGO-1024x361.webp 1024w, https://ziadadc.com/wp-content/uploads/2026/01/ZIADA-LOGO-768x271.webp 768w, https://ziadadc.com/wp-content/uploads/2026/01/ZIADA-LOGO-1536x542.webp 1536w, https://ziadadc.com/wp-content/uploads/2026/01/ZIADA-LOGO.webp 2048w" sizes="(max-width: 159px) 100vw, 159px"></a></span>
                                    </div>
                                    <!-- .site-branding -->
                                </div>
                            </div>
                            <div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
                                <div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="section-header-mobile-trigger">
                                    <div class="ast-button-wrap">
                                        <button type="button" class="menu-toggle main-header-menu-toggle ast-mobile-menu-trigger-minimal" aria-expanded="false" aria-label="Main menu toggle" data-index="0">
                                            <span class="mobile-menu-toggle-icon">
                                                <span aria-hidden="true" class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg class="ast-mobile-svg ast-menu-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path d="M3 13h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 7h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 19h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1z"></path>
                                                    </svg></span><span aria-hidden="true" class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg class="ast-mobile-svg ast-close-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path>
                                                    </svg></span> </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ast-mobile-header-content content-align-flex-start ">
                    <div class="ast-builder-menu-mobile ast-builder-menu ast-builder-menu-mobile-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-header-mobile-menu">
                        <div class="ast-main-header-bar-alignment">
                            <div class="main-header-bar-navigation">
                                <nav class="site-navigation ast-flex-grow-1 navigation-accessibility site-header-focus-item" id="ast-mobile-site-navigation" aria-label="Site Navigation: Main Menu" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
                                    <div class="main-navigation">
                                        <ul id="ast-hf-menu-1" class="main-header-menu ast-menu-shadow ast-nav-menu ast-flex  submenu-with-border stack-on-mobile font-bold">
                                            <li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-33">
                                                <a href="#home" aria-current="page" class="menu-link">Overview</a>
                                            </li>
                                            <li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52">
                                                <a href="#whats-included" class="menu-link">What's Included</a>
                                            </li>
                                            <li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50">
                                                <a href="#packages" class="menu-link">Packages</a>
                                            </li>
                                            <li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53">
                                                <a href="#timeline" class="menu-link">Timeline</a>
                                            </li>
                                            <li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51">
                                                <a href="#why-ziada" class="menu-link">Why Ziada</a>
                                            </li>
                                            <li id="menu-item-510" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-510">
                                                <a href="#faqs" class="menu-link">FAQs</a>
                                            </li>
                                            <li id="menu-item-5120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5120">
                                                <a href="#get-started" class="menu-link">Get Started</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>






        <?php

        astra_header_after();

        astra_content_before();
        ?>
        <div id="content" class="site-content">
            <div class="ast-container">
                <?php astra_content_top(); ?>