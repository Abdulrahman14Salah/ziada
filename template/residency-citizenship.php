<?php /* Template Name: Residency and Citizenship */ ?>

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
                    <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mb-6">Residency and <span class="text-primary">Citizenship</span></h1>
                    <p class="text-muted-foreground text-lg md:text-xl mb-8">Unlock global opportunities with residency and second passport. We help individuals and families obtain residency and citizenship through investment programs in Europe (including Spain), the Caribbean, and beyond. We also specialize in helping you obtain residency in Spain through our dedicated support services. Your gateway to freedom, security, and new possibilities starts here.</p>
                    <div class="flex flex-wrap gap-4 justify-center">
                        <a href="<?php echo page_link_by_slug('book-your-free-consultation'); ?>"><button class="ast-outline-button text-lg font-semibold h-14">Book Free Consultation</button></a>
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-solid border-input bg-background hover:bg-accent hover:text-accent-foreground h-14 rounded-xl px-10 text-lg font-semibold" href="<?php echo page_link_by_slug('contact-us'); ?>">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-card">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Benefits of Getting a <span class="text-primary">Second Citizenship</span></h2>
                    <p class="text-muted-foreground text-lg">Discover the life-changing advantages of holding a second passport.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="group p-8 bg-background border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all duration-300" style="animation-delay: 0s;">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:scale-110 transition-all"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plane h-7 w-7 text-primary group-hover:text-primary-foreground transition-colors">
                                <path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"></path>
                            </svg></div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Global Mobility</h3>
                        <p class="text-muted-foreground mb-0">Visa-free or visa-on-arrival access to 100+ countries including Schengen zone.</p>
                    </div>
                    <div class="group p-8 bg-background border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all duration-300" style="animation-delay: 0.1s;">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:scale-110 transition-all"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield h-7 w-7 text-primary group-hover:text-primary-foreground transition-colors">
                                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                            </svg></div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Political Stability</h3>
                        <p class="text-muted-foreground mb-0">Secure your family's future with citizenship in a stable, peaceful country.</p>
                    </div>
                    <div class="group p-8 bg-background border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all duration-300" style="animation-delay: 0.2s;">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:scale-110 transition-all"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign h-7 w-7 text-primary group-hover:text-primary-foreground transition-colors">
                                <line x1="12" x2="12" y1="2" y2="22"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg></div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Tax Optimization</h3>
                        <p class="text-muted-foreground mb-0">Access to favorable tax regimes and international banking opportunities.</p>
                    </div>
                    <div class="group p-8 bg-background border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all duration-300" style="animation-delay: 0.3s;">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:scale-110 transition-all"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-7 w-7 text-primary group-hover:text-primary-foreground transition-colors">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg></div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Family Inclusion</h3>
                        <p class="text-muted-foreground mb-0">Include your spouse, children, and often parents in a single application.</p>
                    </div>
                    <div class="group p-8 bg-background border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all duration-300" style="animation-delay: 0.4s;">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:scale-110 transition-all"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe h-7 w-7 text-primary group-hover:text-primary-foreground transition-colors">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                <path d="M2 12h20"></path>
                            </svg></div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Business Expansion</h3>
                        <p class="text-muted-foreground mb-0">Open doors to new markets and business opportunities worldwide.</p>
                    </div>
                    <div class="group p-8 bg-background border border-solid border-border/50 rounded-2xl hover:shadow-card transition-all duration-300" style="animation-delay: 0.5s;">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:scale-110 transition-all"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-7 w-7 text-primary group-hover:text-primary-foreground transition-colors">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10 9H8"></path>
                                <path d="M16 13H8"></path>
                                <path d="M16 17H8"></path>
                            </svg></div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Dual Citizenship</h3>
                        <p class="text-muted-foreground mb-0">Maintain your current citizenship while gaining a second passport.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-background">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Why Choose Us for Your <span class="text-primary">Second Citizenship</span></h2>
                    <p class="text-muted-foreground text-lg">Applying for citizenship alone can be risky and overwhelming. Here's how we ensure your success.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-card border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-accent">
                                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                    <path d="M12 9v4"></path>
                                    <path d="M12 17h.01"></path>
                                </svg></div>
                            <div>
                                <p class="font-semibold text-foreground mb-0">The Risk:</p>
                                <p class="text-muted-foreground mb-0">Complex Application Process</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg></div>
                            <div>
                                <p class="font-semibold text-foreground mb-0">Our Solution:</p>
                                <p class="text-muted-foreground mb-0">Our experts handle every detail, from documentation to government submissions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-card border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-accent">
                                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                    <path d="M12 9v4"></path>
                                    <path d="M12 17h.01"></path>
                                </svg></div>
                            <div>
                                <p class="font-semibold text-foreground mb-0">The Risk:</p>
                                <p class="text-muted-foreground mb-0">High Rejection Rates</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg></div>
                            <div>
                                <p class="font-semibold text-foreground mb-0">Our Solution:</p>
                                <p class="text-muted-foreground mb-0">98% success rate through meticulous preparation and pre-screening.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-card border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-accent">
                                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                    <path d="M12 9v4"></path>
                                    <path d="M12 17h.01"></path>
                                </svg></div>
                            <div>
                                <p class="font-semibold text-foreground mb-0">The Risk:</p>
                                <p class="text-muted-foreground mb-0">Choosing Wrong Program</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg></div>
                            <div>
                                <p class="font-semibold text-foreground mb-0">Our Solution:</p>
                                <p class="text-muted-foreground mb-0">Personalized guidance to select the ideal program for your needs and budget.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-card border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-accent">
                                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                    <path d="M12 9v4"></path>
                                    <path d="M12 17h.01"></path>
                                </svg></div>
                            <div>
                                <p class="font-semibold text-foreground mb-0">The Risk:</p>
                                <p class="text-muted-foreground mb-0">Lengthy Processing Times</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg></div>
                            <div>
                                <p class="font-semibold text-foreground mb-0">Our Solution:</p>
                                <p class="text-muted-foreground mb-0">Expedited processing through our established government relationships.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-card border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-accent">
                                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                    <path d="M12 9v4"></path>
                                    <path d="M12 17h.01"></path>
                                </svg></div>
                            <div>
                                <p class="font-semibold text-foreground mb-0">The Risk:</p>
                                <p class="text-muted-foreground mb-0">Document Authentication</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg></div>
                            <div>
                                <p class="font-semibold text-foreground mb-0">Our Solution:</p>
                                <p class="text-muted-foreground mb-0">Complete document preparation, translation, and legalization services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-card border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-5 w-5 text-accent">
                                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                    <path d="M12 9v4"></path>
                                    <path d="M12 17h.01"></path>
                                </svg></div>
                            <div>
                                <p class="font-semibold text-foreground mb-0">The Risk:</p>
                                <p class="text-muted-foreground mb-0">Post-Approval Support</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg></div>
                            <div>
                                <p class="font-semibold text-foreground mb-0">Our Solution:</p>
                                <p class="text-muted-foreground mb-0">Assistance with passport collection, renewals, and ongoing compliance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-card">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">How It <span class="text-primary">Works</span></h2>
                    <p class="text-muted-foreground text-lg">Our proven process ensures a smooth journey to your second citizenship.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="relative bg-background border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="text-5xl font-bold mb-4" style="color: rgb(194, 30, 41);">01</div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Initial Consultation</h3>
                        <p class="text-muted-foreground mb-0">Discuss your goals and explore suitable citizenship programs.</p>
                        <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-6 w-6 text-primary/50">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></div>
                    </div>
                    <div class="relative bg-background border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="text-5xl font-bold mb-4" style="color: rgb(194, 30, 41);">02</div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Program Selection</h3>
                        <p class="text-muted-foreground mb-0">Choose the best citizenship program based on your preferences.</p>
                        <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-6 w-6 text-primary/50">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></div>
                    </div>
                    <div class="relative bg-background border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="text-5xl font-bold mb-4" style="color: rgb(194, 30, 41);">03</div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Document Preparation</h3>
                        <p class="text-muted-foreground mb-0">We prepare and verify all required documentation.</p>
                        <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-6 w-6 text-primary/50">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></div>
                    </div>
                    <div class="relative bg-background border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="text-5xl font-bold mb-4" style="color: rgb(194, 30, 41);">04</div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Application Submission</h3>
                        <p class="text-muted-foreground mb-0">Submit your complete application to the relevant authorities.</p>
                        <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-6 w-6 text-primary/50">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></div>
                    </div>
                    <div class="relative bg-background border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="text-5xl font-bold mb-4" style="color: rgb(194, 30, 41);">05</div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Due Diligence</h3>
                        <p class="text-muted-foreground mb-0">Background checks and verification by the issuing country.</p>
                        <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-6 w-6 text-primary/50">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></div>
                    </div>
                    <div class="relative bg-background border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all">
                        <div class="text-5xl font-bold mb-4" style="color: rgb(194, 30, 41);">06</div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Citizenship Granted</h3>
                        <p class="text-muted-foreground mb-0">Receive your certificate and apply for your new passport!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-gradient-to-br from-primary/10 via-background to-accent/5">
            <div class="ast-container">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-foreground mb-4">Get Your Second Citizenship <span class="text-primary">With Us Now</span></h2>
                    <p class="text-muted-foreground text-lg mb-8">Ready to unlock global freedom? Our citizenship experts are here to make your dream a reality.</p>
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