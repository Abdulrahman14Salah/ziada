<?php /* Template Name: Our Clients */ ?>

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
                    <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mb-6">Our <span class="text-primary">Clients</span></h1>
                    <p class="text-muted-foreground text-lg md:text-xl">We take pride in the success of our clients. From entrepreneurs launching their UAE businesses to families securing second citizenship, hear their stories and see why they chose Ziada.</p>
                </div>
            </div>
        </section>
        <section class="section-padding bg-card">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">What Our Clients <span class="text-primary">Are Saying</span></h2>
                    <p class="text-muted-foreground text-lg">Real testimonials from satisfied clients about their experience with Ziada Company.</p>
                </div>

                <?php
                get_template_part('/template/clients/custom-loop', 'clients');
                ?>
            </div>
        </section>
        <section class="section-padding bg-background">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Our Success <span class="text-primary">Partners</span></h2>
                    <p class="text-muted-foreground text-lg">Trusted by leading organizations and government entities across the UAE.</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="flex items-center justify-center p-6 bg-card border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all"><img src="https://ziadadc.com/wp-content/uploads/2023/09/partner-4.png" alt="Partner 1" class="w-auto h-24 md:h-32 object-contain hover:scale-110 transition-transform duration-300"></div>
                    <div class="flex items-center justify-center p-6 bg-card border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all"><img src="https://ziadadc.com/wp-content/uploads/2023/09/partner-3.png" alt="Partner 2" class="w-auto h-24 md:h-32 object-contain hover:scale-110 transition-transform duration-300"></div>
                    <div class="flex items-center justify-center p-6 bg-card border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all"><img src="https://ziadadc.com/wp-content/uploads/2023/08/Amer.png" alt="Partner 3" class="w-auto h-24 md:h-32 object-contain hover:scale-110 transition-transform duration-300"></div>
                    <div class="flex items-center justify-center p-6 bg-card border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all"><img src="https://ziadadc.com/wp-content/uploads/2023/08/Dubai-Economy-1.png" alt="Partner 4" class="w-auto h-24 md:h-32 object-contain hover:scale-110 transition-transform duration-300"></div>
                    <div class="flex items-center justify-center p-6 bg-card border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all"><img src="https://ziadadc.com/wp-content/uploads/2023/08/Dubai-Economy-1-1.png" alt="Partner 5" class="w-auto h-24 md:h-32 object-contain hover:scale-110 transition-transform duration-300"></div>
                    <div class="flex items-center justify-center p-6 bg-card border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all"><img src="https://ziadadc.com/wp-content/uploads/2023/08/IFZA.png" alt="Partner 6" class="w-auto h-24 md:h-32 object-contain hover:scale-110 transition-transform duration-300"></div>
                    <div class="flex items-center justify-center p-6 bg-card border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all"><img src="https://ziadadc.com/wp-content/uploads/2023/08/rakez.png" alt="Partner 7" class="w-auto h-24 md:h-32 object-contain hover:scale-110 transition-transform duration-300"></div>
                    <div class="flex items-center justify-center p-6 bg-card border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all"><img src="https://ziadadc.com/wp-content/uploads/2023/08/Sharjah-media-city.png" alt="Partner 8" class="w-auto h-24 md:h-32 object-contain hover:scale-110 transition-transform duration-300"></div>
                    <div class="flex items-center justify-center p-6 bg-card border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all"><img src="https://ziadadc.com/wp-content/uploads/2023/09/partner-2.png" alt="Partner 9" class="w-auto h-24 md:h-32 object-contain hover:scale-110 transition-transform duration-300"></div>
                    <div class="flex items-center justify-center p-6 bg-card border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all"><img src="https://ziadadc.com/wp-content/uploads/2023/09/partner-1.png" alt="Partner 10" class="w-auto h-24 md:h-32 object-contain hover:scale-110 transition-transform duration-300"></div>
                    <div class="flex items-center justify-center p-6 bg-card border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all"><img src="https://arabianme.ae/wp-content/uploads/2023/07/cropped-arabian-business-center-logo-dark.png" alt="Partner 11" class="w-auto h-24 md:h-32 object-contain hover:scale-110 transition-transform duration-300"></div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-gradient-to-br from-primary/10 via-background to-accent/5">
            <div class="ast-container">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-foreground mb-4">Contact Us Today And Be One Of <span class="text-primary">Our Happy Clients</span></h2>
                    <p class="text-muted-foreground text-lg mb-8">Join hundreds of satisfied clients who have achieved their business and citizenship goals with Ziada.</p>
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
