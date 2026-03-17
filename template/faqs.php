<?php /* Template Name: FAQs */ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<div>
    <main>
        <section class="bg-gradient-to-br from-primary/10 via-background to-accent/5 py-16 md:py-24">
            <div class="ast-container">
                <div class="max-w-4xl mx-auto text-center">
                    <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mb-6">Frequently Asked <span class="text-primary">Questions</span></h1>
                    <p class="text-muted-foreground text-lg md:text-xl">Find answers to common questions about our business setup and second citizenship services. Can't find what you're looking for? Contact us for personalized assistance.</p>
                </div>
            </div>
        </section>
        <section class="section-padding bg-card">
            <div class="ast-container">
                <h2 class="font-display text-2xl md:text-3xl font-bold text-foreground mb-8 text-center">Business Setup in <span class="text-primary">UAE</span></h2>
                <div class="max-w-3xl mx-auto">
                    <?php
                    set_query_var('faqs_category', 'Business Setup');

                    get_template_part('/template/faqs/custom-loop', 'faqs');
                    ?>
                </div>
            </div>
        </section>
        <section class="section-padding bg-background">
            <div class="ast-container">
                <h2 class="font-display text-2xl md:text-3xl font-bold text-foreground mb-8 text-center">Second Citizenship <span class="text-primary">By Investment</span></h2>
                <div class="max-w-3xl mx-auto">
                    <?php
                    set_query_var('faqs_category', 'Second Citizenship');
                    set_query_var('bg', 'bg-white');
                    get_template_part('/template/faqs/custom-loop', 'faqs');
                    ?>
                </div>
            </div>
        </section>
        <section class="section-padding bg-card">
            <div class="ast-container">
                <h2 class="font-display text-2xl md:text-3xl font-bold text-foreground mb-8 text-center">General <span class="text-primary">Questions</span></h2>
                <div class="max-w-3xl mx-auto">
                    <?php
                    set_query_var('faqs_category', 'General');
                    set_query_var('bg', 'bg-background');
                    get_template_part('/template/faqs/custom-loop', 'faqs');
                    ?>
                </div>
            </div>
        </section>
        <section class="section-padding bg-gradient-to-br from-primary/10 via-background to-accent/5">
            <div class="ast-container">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-foreground mb-4">Still Have <span class="text-primary">Questions?</span></h2>
                    <p class="text-muted-foreground text-lg mb-8">Our expert team is here to help. Book a free consultation for personalized guidance.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="<?php echo page_link_by_slug('book-your-free-consultation'); ?>"><button class="ast-outline-button text-lg font-semibold h-14">Book Free Consultation</button></a>
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-solid border-input bg-background hover:bg-accent hover:text-accent-foreground h-14 rounded-xl px-10 text-lg font-semibold" href="<?php echo page_link_by_slug('contact-us'); ?>">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
    </main>


</div><!-- #primary -->



<?php get_footer(); ?>