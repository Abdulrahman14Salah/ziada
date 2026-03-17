<?php /* Template Name: Contact Us */ ?>

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
        <div class="min-h-screen bg-background">
            <section class="pt-32 pb-16 bg-gradient-to-br from-primary/10 via-background to-accent/5">
                <div class="container mx-auto px-4">
                    <div class="max-w-3xl mx-auto text-center">
                        <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-6">Contact Us</h1>
                        <p class="text-lg text-muted-foreground">Get in touch with our expert team. We're here to answer your questions and help you achieve your business and citizenship goals.</p>
                    </div>
                </div>
            </section>
            <section class="py-16 bg-white">
                <div class="container mx-auto px-4">
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                        <a href="mailto:info@ziadadc.com" class="bg-card border border-solid border-border rounded-2xl p-6 text-center hover:shadow-lg hover:border-primary/30 transition-all duration-300 group">
                            <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-8 h-8 text-primary">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg></div>
                            <h3 class="text-lg font-semibold text-foreground mb-2">For Inquiries</h3>
                            <p class="text-primary font-medium mb-0">info@ziadadc.com</p>
                        </a>

                        <span class="bg-card border border-solid border-border rounded-2xl p-6 text-center hover:shadow-lg hover:border-primary/30 transition-all duration-300 group">
                            <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-8 h-8 text-primary">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg></div>
                            <h3 class="text-lg font-semibold text-foreground mb-2">Call Us</h3>
                            <p class="text-primary font-medium mb-0"><a href="tel:+971509199750">+971 50 919 9750</a></p>
                            <p class="text-primary font-medium mb-0"><a href="tel:+97143943751">+971 43 943 751</a></p>
                        </span>

                        <span class="bg-card border border-solid border-border rounded-2xl p-6 text-center hover:shadow-lg hover:border-primary/30 transition-all duration-300 group">
                            <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle w-8 h-8 text-primary">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                </svg></div>
                            <h3 class="text-lg font-semibold text-foreground mb-2">WhatsApp Us</h3>
                            <p class="text-primary font-medium mb-0"><a href="http://wa.me/971509199750" target="_blank" rel="noopener noreferrer">+971 50 919 9750</a></p>
                        </span>
                        <a href="https://maps.google.com/?q=Shangri-La+Hotel+Dubai" target="_blank" rel="noopener noreferrer" class="bg-card border border-solid border-border rounded-2xl p-6 text-center hover:shadow-lg hover:border-primary/30 transition-all duration-300 group">
                            <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-8 h-8 text-primary">
                                    <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg></div>
                            <h3 class="text-lg font-semibold text-foreground mb-2">Our Address</h3>
                            <p class="text-primary font-medium mb-0">Amer Sheikh Zayed Road, Sheikh Rashid Building, Ground Floor - Near Shangri-La Hotel - Trade Center First - Dubai</p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="py-16 bg-muted/30">
                <div class="container mx-auto px-4">
                    <div class="max-w-2xl mx-auto text-center">
                        <h2 class="text-3xl font-bold text-foreground mb-8">Follow Us</h2>
                        <div class="flex flex-wrap justify-center gap-4">
                            <a href="https://www.facebook.com/Ziadadcs" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 bg-card border border-solid border-border rounded-xl px-5 py-3 hover:border-primary/50 hover:bg-primary/5 hover:text-black transition-all duration-300 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook w-5 h-5 text-muted-foreground group-hover:text-primary transition-colors">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                                <span class="text-foreground font-medium hover:text-black">Facebook</span></a>
                            <a href="https://www.youtube.com/@Ziadadc" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 bg-card border border-solid border-border rounded-xl px-5 py-3 hover:border-primary/50 hover:bg-primary/5 hover:text-black transition-all duration-300 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube w-5 h-5 text-muted-foreground group-hover:text-primary transition-colors">
                                    <path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path>
                                    <path d="m10 15 5-3-5-3z"></path>
                                </svg><span class="text-foreground font-medium hover:text-black">YouTube</span></a><a href="https://www.instagram.com/ziadadc/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 bg-card border border-solid border-border rounded-xl px-5 py-3 hover:border-primary/50 hover:bg-primary/5 hover:text-black transition-all duration-300 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram w-5 h-5 text-muted-foreground group-hover:text-primary transition-colors">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                </svg><span class="text-foreground font-medium hover:text-black">Instagram</span></a><a href="https://www.linkedin.com/company/ziadadc/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 bg-card border border-solid border-border rounded-xl px-5 py-3 hover:border-primary/50 hover:bg-primary/5 hover:text-black transition-all duration-300 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin w-5 h-5 text-muted-foreground group-hover:text-primary transition-colors">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect width="4" height="12" x="2" y="9"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg><span class="text-foreground font-medium hover:text-black">LinkedIn</span></a><a href="https://x.com/ziadadc" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 bg-card border border-solid border-border rounded-xl px-5 py-3 hover:border-primary/50 hover:bg-primary/5 hover:text-black transition-all duration-300 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter w-5 h-5 text-muted-foreground group-hover:text-primary transition-colors">
                                    <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                                </svg><span class="text-foreground font-medium hover:text-black">X</span></a><a href="https://www.tiktok.com/@ziadadc" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 bg-card border border-solid border-border rounded-xl px-5 py-3 hover:border-primary/50 hover:bg-primary/5 hover:text-black transition-all duration-300 group"><svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"></path>
                                </svg><span class="text-foreground font-medium hover:text-black">TikTok</span></a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="py-20 bg-white">
                <div class="container mx-auto px-4">
                    <div class="max-w-2xl mx-auto">
                        <div class="text-center mb-12">
                            <h2 class="text-3xl font-bold text-foreground mb-4">Send Us a Message</h2>
                            <p class="text-muted-foreground mb-0">Fill out the form below and our team will get back to you within 24 hours.</p>
                        </div>
                        <div class="bg-card border border-solid border-border rounded-2xl p-8 shadow-sm">
                            <?php echo do_shortcode('[contact-form-7 id="875dc28" title="Contact Us"]'); ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-gradient-to-r from-primary/10 via-background to-accent/10">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-6">Prefer to Talk Directly?</h2>
                    <p class="text-lg text-muted-foreground mb-8 max-w-2xl mx-auto">Book a free consultation with our experts or reach out via WhatsApp for immediate assistance.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:text-primary-foreground hover:bg-primary/90 hover:shadow-lg h-12 rounded-lg px-8 text-base" href="<?php echo page_link_by_slug('book-your-free-consultation'); ?>" style="background-color: rgb(27, 108, 66);">Book Free Consultation</a>
                        <a href="http://wa.me/971509199750" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-solid border-input bg-background hover:bg-accent hover:text-accent-foreground h-12 rounded-lg px-8 text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle w-5 h-5 mr-2">
                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                            </svg>
                            <span>WhatsApp Us</span>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>

</div><!-- #primary -->

<?php get_footer(); ?>