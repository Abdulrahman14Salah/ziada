<?php /* Template Name: Get Residency & Citizenship */ ?>

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
                    <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mb-6">Get <span class="text-primary">Residency &amp; Citizenship</span></h1>
                    <p class="text-muted-foreground text-lg md:text-xl mb-8">Unlock global opportunities with residency and second citizenship. We specialize in helping individuals and families obtain residency in Spain and citizenship through investment programs worldwide. Your journey to global freedom starts here.</p>
                </div>
            </div>
        </section>
        <section id="contact" class="section-padding bg-background">
            <div class="ast-container">
                <div class="max-w-2xl mx-auto">
                    <div class="text-center mb-8">
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-foreground mb-4">Start Your <span class="text-primary">Application</span></h2>
                        <p class="text-muted-foreground text-lg">Fill out the form below and our citizenship experts will contact you within 24 hours.</p>
                    </div>
                    <div class="bg-card border border-border rounded-2xl p-8 pb-0">
                        <?php echo do_shortcode('[contact-form-7 id="f4015fd" title="Get Residency & Citizenship"]'); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-card">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-foreground mb-4">How It <span class="text-primary">Works</span></h2>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-background border border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="text-4xl font-bold mb-4" style="color: rgb(194, 30, 41);">01</div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Submit Your Details</h3>
                        <p class="text-muted-foreground">Fill out the form with your requirements and preferences.</p>
                    </div>
                    <div class="bg-background border border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="text-4xl font-bold mb-4" style="color: rgb(194, 30, 41);">02</div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Expert Consultation</h3>
                        <p class="text-muted-foreground">Free consultation to assess eligibility and recommend programs.</p>
                    </div>
                    <div class="bg-background border border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="text-4xl font-bold mb-4" style="color: rgb(194, 30, 41);">03</div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Program Selection</h3>
                        <p class="text-muted-foreground">Choose the best program based on your goals and budget.</p>
                    </div>
                    <div class="bg-background border border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="text-4xl font-bold mb-4" style="color: rgb(194, 30, 41);">04</div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Document Preparation</h3>
                        <p class="text-muted-foreground">We handle all documentation and authentication.</p>
                    </div>
                    <div class="bg-background border border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="text-4xl font-bold mb-4" style="color: rgb(194, 30, 41);">05</div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Application Submission</h3>
                        <p class="text-muted-foreground">Submit to relevant authorities with our guidance.</p>
                    </div>
                    <div class="bg-background border border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="text-4xl font-bold mb-4" style="color: rgb(194, 30, 41);">06</div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Approval &amp; Passport</h3>
                        <p class="text-muted-foreground">Receive your residency/citizenship and new passport.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-gradient-to-br from-primary/10 via-background to-accent/5">
            <div class="ast-container">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-foreground mb-4">Ready to Start Your Journey?</h2>
                    <p class="text-muted-foreground text-lg mb-8">Our experts are here to guide you every step of the way.</p>
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