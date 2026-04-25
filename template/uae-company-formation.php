<?php /* Template Name: UAE Company Formation */ ?>

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

get_header('uae'); ?>

<div>
    <main>
        <section id="home" class="relative flex items-center overflow-hidden" style="height: 500px;">
            <div class="hero-slide absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000 opacity-100" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/uae-company-formation-hero-1.jpg');"></div>
            <div class="hero-slide absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000 opacity-0" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/uae-company-formation-hero-2.jpeg');"></div>
            <div class="hero-slide absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000 opacity-0" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/uae-company-formation-hero-3.jpeg');"></div>

            <div class="absolute inset-0 bg-gradient-to-r from-foreground/80 via-foreground/60 to-foreground/40"></div>

            <div class="relative z-10 ast-container px-4 md:px-6 mx-auto">
                <div class="max-w-3xl animate-fade-up text-left">
                    <h1 class="font-display font-bold leading-tight text-primary-foreground mb-4" style="font-size: 48px;">UAE Company Formation</h1>
                    <p class="text-2xl md:text-3xl font-semibold text-primary-foreground/95 mb-4">Get Your UAE Free Zone Business License + 1 Visa — Fast, Clear, and Budget-Friendly</p>
                    <p class="text-lg text-primary-foreground/85 max-w-2xl mb-8">Start your UAE company in Ajman NuVentures Centre Free Zone with a simple pay & receive setup: license + documents + visa processing — with transparent government-fee pricing.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#lead-form" class="ast-outline-button font-semibold text-lg">Get Started Now</a>
                        <a href="https://wa.me/971509199750" target="_blank" rel="noopener noreferrer" class="relative inline-flex items-center justify-center h-14 rounded-xl px-10 text-lg font-semibold text-accent bg-transparent overflow-hidden transition-all duration-300 hover:scale-105 group animate-heartbeat">
                            <span class="absolute inset-0 rounded-xl bg-[linear-gradient(90deg,#196b41,#c21e29,#196b41,#c21e29,#196b41)] bg-300 animate-border-sweep"></span>
                            <span class="absolute inset-[2px] rounded-[10px] bg-primary-foreground"></span><span class="relative z-10">WhatsApp Us to Confirm Your Activity</span>
                        </a>
                    </div>
                </div>

            </div>

            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const slides = document.querySelectorAll("#home > .hero-slide");
                    let current = 0;

                    setInterval(() => {
                        slides[current].classList.remove("opacity-100");
                        slides[current].classList.add("opacity-0");

                        current = (current + 1) % slides.length;

                        slides[current].classList.remove("opacity-0");
                        slides[current].classList.add("opacity-100");
                    }, 4000); // كل 4 ثواني
                });
            </script>
        </section>

        <section class="bg-secondary py-6 border-b border-border" style="border-bottom-style: solid;">
            <div class="ast-container">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-check h-5 w-5 text-primary">
                                <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg></div>
                        <div>
                            <p class="font-semibold text-foreground text-sm leading-tight mb-0">Authorized Partner</p>
                            <p class="text-muted-foreground text-xs mb-0">Ajman NuVentures Centre Free Zone</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-check h-5 w-5 text-primary">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="m9 15 2 2 4-4"></path>
                            </svg></div>
                        <div>
                            <p class="font-semibold text-foreground text-sm leading-tight mb-0">Clear, Itemized Inclusions</p>
                            <p class="text-muted-foreground text-xs mb-0">No hidden charges</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-5 w-5 text-primary">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg></div>
                        <div>
                            <p class="font-semibold text-foreground text-sm leading-tight mb-0">License: 5–10 Business Days</p>
                            <p class="text-muted-foreground text-xs mb-0">Fast turnaround</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-fingerprint h-5 w-5 text-primary">
                                <path d="M12 10a2 2 0 0 0-2 2c0 1.02-.1 2.51-.26 4"></path>
                                <path d="M14 13.12c0 2.38 0 6.38-1 8.88"></path>
                                <path d="M17.29 21.02c.12-.6.43-2.3.5-3.02"></path>
                                <path d="M2 12a10 10 0 0 1 18-6"></path>
                                <path d="M2 16h.01"></path>
                                <path d="M21.8 16c.2-2 .131-5.354 0-6"></path>
                                <path d="M5 19.5C5.5 18 6 15 6 12a6 6 0 0 1 .34-2"></path>
                                <path d="M8.65 22c.21-.66.45-1.32.57-2"></path>
                                <path d="M9 6.8a6 6 0 0 1 9 5.2v2"></path>
                            </svg></div>
                        <div>
                            <p class="font-semibold text-foreground text-sm leading-tight mb-0">Visa: 7–10 Business Days</p>
                            <p class="text-muted-foreground text-xs mb-0">Inside UAE processing</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding bg-background">
            <div class="ast-container">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-foreground mb-6">Cheapest UAE Trade License — <span class="text-primary">Built for Cost-Smart Founders</span></h2>
                        <p class="text-muted-foreground text-lg mb-6">Get the most affordable UAE company formation package in the market. Our partnership with Ajman NuVentures Centre Free Zone means you pay only what's necessary — no hidden charges, no inflated agency fees.</p>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Affordable UAE company formation</li>
                            <li class="flex items-center gap-3 text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Low-cost business license from AED 4,888</li>
                            <li class="flex items-center gap-3 text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Minimal expenses — no office required</li>
                            <li class="flex items-center gap-3 text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Best-value free zone package</li>
                            <li class="flex items-center gap-3 text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>No hidden charges</li>
                            <li class="flex items-center gap-3 text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Pay only government fees</li>
                        </ul>
                    </div>
                    <div class="bg-card border border-solid border-border rounded-2xl p-8 shadow-card">
                        <h3 class="font-display text-xl font-bold text-foreground mb-4">Cost Comparison</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between py-3 border-b border-border" style="border-bottom-style: solid;"><span class="text-muted-foreground">License Only</span><span class="font-semibold text-foreground">AED 4,888</span></div>
                            <div class="flex justify-between py-3 border-b border-border" style="border-bottom-style: solid;"><span class="text-muted-foreground">License + 1 Visa</span><span class="font-semibold text-foreground">AED 10,800</span></div>
                            <div class="flex justify-between py-3 border-b border-border" style="border-bottom-style: solid;"><span class="text-muted-foreground">All-Inclusive Bundle</span><span class="font-semibold text-foreground">AED 18,250</span></div>
                            <div class="flex justify-between py-3 border-b border-border" style="border-bottom-style: solid;"><span class="text-muted-foreground">Hidden Fees</span><span class="font-semibold text-primary">AED 0</span></div>
                            <div class="flex justify-between py-3"><span class="text-muted-foreground">Office Required</span><span class="font-semibold text-primary">Not Required</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="whats-included" class="section-padding bg-card">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">What You Get <span class="text-primary">(License + Documents + Visa Pathway)</span></h2>
                    <p class="text-muted-foreground text-lg">This is end-to-end setup — not license only. Everything you need to start your UAE business.</p>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-4xl mx-auto">
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Business License (LLC)</span></div>
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Unlimited shareholders</span></div>
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Up to 10 mix &amp; match activities</span></div>
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Lease agreement</span></div>
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Commercial registry</span></div>
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Share certificate</span></div>
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Certificate of incorporation</span></div>
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Certificate of incumbency</span></div>
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Bank letter</span></div>
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Establishment card + e-channel registration</span></div>
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Entry permit</span></div>
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Status change</span></div>
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Medical (Ajman)</span></div>
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Residency visa</span></div>
                    <div class="flex items-center gap-3 bg-background border border-solid border-border rounded-xl p-4 hover:shadow-card transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-foreground font-medium">Emirates ID</span></div>
                </div>
            </div>
        </section>

        <section id="packages" class="section-padding bg-background">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Choose Your <span class="text-primary">Package</span></h2>
                </div>
                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="relative bg-card border rounded-2xl p-8 flex flex-col transition-all duration-300 hover:-translate-y-2 hover:shadow-elevated border-solid border-border shadow-soft">
                        <h3 class="font-display text-2xl font-bold text-foreground mb-2">License Only</h3>
                        <p class="text-muted-foreground text-sm mb-4">Trade license only — no visa</p>
                        <div class="mb-6"><span class="text-sm text-muted-foreground">AED </span><span class="text-4xl font-bold text-foreground">4,888</span></div>
                        <div class="mb-4 bg-secondary rounded-lg p-3">
                            <p class="text-xs font-semibold text-foreground mb-1">Best for:</p>
                            <ul class="space-y-1">
                                <li class="text-xs text-muted-foreground flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-3 w-3 text-primary">
                                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                    </svg> Already have UAE visa</li>
                                <li class="text-xs text-muted-foreground flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-3 w-3 text-primary">
                                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                    </svg> Testing business idea</li>
                                <li class="text-xs text-muted-foreground flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-3 w-3 text-primary">
                                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                    </svg> Lowest-cost setup</li>
                            </ul>
                        </div>
                        <ul class="space-y-2 mb-6 flex-1">
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Business License (LLC)</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Up to 10 activities</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Lease agreement</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Commercial registry</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Share certificate</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Certificate of incorporation</li>
                        </ul><a href="#lead-form" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-solid border-input bg-background hover:bg-accent hover:text-accent-foreground h-12 rounded-lg px-8 text-base w-full">Get License Only</a>
                    </div>
                    <div class="relative bg-card border rounded-2xl p-8 flex flex-col transition-all duration-300 hover:-translate-y-2 hover:shadow-elevated border-solid border-border shadow-soft">
                        <h3 class="font-display text-2xl font-bold text-foreground mb-2">Standard</h3>
                        <p class="text-muted-foreground text-sm mb-4">License + 1 Visa</p>
                        <div class="mb-6"><span class="text-sm text-muted-foreground">AED </span><span class="text-4xl font-bold text-foreground">10,800</span></div>
                        <ul class="space-y-2 mb-6 flex-1">
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Everything in License Only</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Entry permit</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Status change</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Medical (Ajman)</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Residency visa</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Emirates ID</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Establishment card</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Bank letter</li>
                        </ul>
                        <p class="text-xs text-muted-foreground italic mb-4">Excludes medical insurance + tourist visa</p><a href="#lead-form" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-solid border-input bg-background hover:bg-accent hover:text-accent-foreground h-12 rounded-lg px-8 text-base w-full">Start Standard Package</a>
                    </div>
                    <div class="relative bg-card border rounded-2xl p-8 flex flex-col transition-all duration-300 hover:-translate-y-2 hover:shadow-elevated border-solid border-primary shadow-card ring-2 ring-primary/20">
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary text-primary-foreground text-sm font-bold px-4 py-1 rounded-full">Most Popular</div>
                        <h3 class="font-display text-2xl font-bold text-foreground mb-2">Bundle Upgrade</h3>
                        <p class="text-muted-foreground text-sm mb-4">All-inclusive setup + extras</p>
                        <div class="mb-6"><span class="text-sm text-muted-foreground">AED </span><span class="text-4xl font-bold text-foreground">18,250</span></div>
                        <ul class="space-y-2 mb-6 flex-1">
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Everything in Standard</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Medical Insurance</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Tourist Visa</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Personal &amp; Business Bank Assistance</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Tax Registration</li>
                            <li class="flex items-start gap-2 text-sm text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Fast-track process</li>
                        </ul><a href="#lead-form" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:shadow-lg h-12 rounded-lg px-8 text-base bg-primary hover:bg-primary/90 text-primary-foreground w-full">Upgrade to Bundle</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="timeline" class="section-padding bg-card">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Setup <span class="text-primary">Timeline</span></h2>
                </div>
                <div class="max-w-3xl mx-auto">
                    <div class="grid md:grid-cols-2 gap-8 mb-12">
                        <div class="bg-background border border-solid border-border rounded-2xl p-8 text-center hover:shadow-card transition-all duration-300">
                            <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-8 w-8 text-primary">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg></div>
                            <h3 class="font-display text-xl font-bold text-foreground mb-2">License + Documents</h3>
                            <p class="text-3xl font-bold text-primary mb-2">5–10</p>
                            <p class="text-muted-foreground">Business Days</p>
                        </div>
                        <div class="bg-background border border-solid border-border rounded-2xl p-8 text-center hover:shadow-card transition-all duration-300">
                            <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-id-card h-8 w-8 text-primary">
                                    <path d="M16 10h2"></path>
                                    <path d="M16 14h2"></path>
                                    <path d="M6.17 15a3 3 0 0 1 5.66 0"></path>
                                    <circle cx="9" cy="11" r="2"></circle>
                                    <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                                </svg></div>
                            <h3 class="font-display text-xl font-bold text-foreground mb-2">Visa Process</h3>
                            <p class="text-3xl font-bold text-primary mb-2">7–10</p>
                            <p class="text-muted-foreground">Business Days (inside UAE)</p>
                        </div>
                    </div>
                    <div class="bg-secondary border border-solid border-border rounded-xl p-6">
                        <h4 class="font-semibold text-foreground mb-3">Important Notes:</h4>
                        <ul class="space-y-2 mb-0">
                            <li class="flex items-start gap-2 text-sm text-muted-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>Timeline is subject to government clearance and processing</li>
                            <li class="flex items-start gap-2 text-sm text-muted-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-fingerprint h-4 w-4 text-primary flex-shrink-0 mt-0.5">
                                    <path d="M12 10a2 2 0 0 0-2 2c0 1.02-.1 2.51-.26 4"></path>
                                    <path d="M14 13.12c0 2.38 0 6.38-1 8.88"></path>
                                    <path d="M17.29 21.02c.12-.6.43-2.3.5-3.02"></path>
                                    <path d="M2 12a10 10 0 0 1 18-6"></path>
                                    <path d="M2 16h.01"></path>
                                    <path d="M21.8 16c.2-2 .131-5.354 0-6"></path>
                                    <path d="M5 19.5C5.5 18 6 15 6 12a6 6 0 0 1 .34-2"></path>
                                    <path d="M8.65 22c.21-.66.45-1.32.57-2"></path>
                                    <path d="M9 6.8a6 6 0 0 1 9 5.2v2"></path>
                                </svg>Fingerprint required for new applicants</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding bg-background">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Documents <span class="text-primary">Required</span></h2>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-4xl mx-auto">
                    <div class="flex items-center gap-3 bg-card border border-solid border-border rounded-xl p-4">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-5 w-5 text-primary">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10 9H8"></path>
                                <path d="M16 13H8"></path>
                                <path d="M16 17H8"></path>
                            </svg></div><span class="text-foreground font-medium">Passport copy</span>
                    </div>
                    <div class="flex items-center gap-3 bg-card border border-solid border-border rounded-xl p-4">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-id-card h-5 w-5 text-primary">
                                <path d="M16 10h2"></path>
                                <path d="M16 14h2"></path>
                                <path d="M6.17 15a3 3 0 0 1 5.66 0"></path>
                                <circle cx="9" cy="11" r="2"></circle>
                                <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                            </svg></div><span class="text-foreground font-medium">UAE visa copy</span>
                    </div>
                    <div class="flex items-center gap-3 bg-card border border-solid border-border rounded-xl p-4">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-camera h-5 w-5 text-primary">
                                <path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"></path>
                                <circle cx="12" cy="13" r="3"></circle>
                            </svg></div><span class="text-foreground font-medium">Studio photo</span>
                    </div>
                    <div class="flex items-center gap-3 bg-card border border-solid border-border rounded-xl p-4">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-id-card h-5 w-5 text-primary">
                                <path d="M16 10h2"></path>
                                <path d="M16 14h2"></path>
                                <path d="M6.17 15a3 3 0 0 1 5.66 0"></path>
                                <circle cx="9" cy="11" r="2"></circle>
                                <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                            </svg></div><span class="text-foreground font-medium">Emirates ID (if resident)</span>
                    </div>
                    <div class="flex items-center gap-3 bg-card border border-solid border-border rounded-xl p-4">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-check h-5 w-5 text-primary">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="m9 15 2 2 4-4"></path>
                            </svg></div><span class="text-foreground font-medium">NOC (if resident)</span>
                    </div>
                    <div class="flex items-center gap-3 bg-card border border-solid border-border rounded-xl p-4">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-camera h-5 w-5 text-primary">
                                <path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"></path>
                                <circle cx="12" cy="13" r="3"></circle>
                            </svg></div><span class="text-foreground font-medium">UAE Pass photo holding passport</span>
                    </div>
                    <div class="flex items-center gap-3 bg-card border border-solid border-border rounded-xl p-4">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-5 w-5 text-primary">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10 9H8"></path>
                                <path d="M16 13H8"></path>
                                <path d="M16 17H8"></path>
                            </svg></div><span class="text-foreground font-medium">3–5 name suggestions</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="why-ziada" class="section-padding bg-card">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Why Buy Through <span class="text-primary">Ziada Company?</span></h2>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto mb-12">
                    <div class="flex items-start gap-4 bg-background border border-solid border-border rounded-2xl p-6 hover:shadow-card transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-check h-6 w-6 text-primary">
                                <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg></div>
                        <p class="text-foreground font-medium mb-0">Authorized partner for Ajman NuVentures Centre Free Zone</p>
                    </div>
                    <div class="flex items-start gap-4 bg-background border border-solid border-border rounded-2xl p-6 hover:shadow-card transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-6 w-6 text-primary">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10 9H8"></path>
                                <path d="M16 13H8"></path>
                                <path d="M16 17H8"></path>
                            </svg></div>
                        <p class="text-foreground font-medium mb-0">Clear proposal + itemized inclusions</p>
                    </div>
                    <div class="flex items-start gap-4 bg-background border border-solid border-border rounded-2xl p-6 hover:shadow-card transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check h-6 w-6 text-primary">
                                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg></div>
                        <p class="text-foreground font-medium mb-0">Structured visa guidance</p>
                    </div>
                    <div class="flex items-start gap-4 bg-background border border-solid border-border rounded-2xl p-6 hover:shadow-card transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building h-6 w-6 text-primary">
                                <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
                                <path d="M9 22v-4h6v4"></path>
                                <path d="M8 6h.01"></path>
                                <path d="M16 6h.01"></path>
                                <path d="M12 6h.01"></path>
                                <path d="M12 10h.01"></path>
                                <path d="M12 14h.01"></path>
                                <path d="M16 10h.01"></path>
                                <path d="M16 14h.01"></path>
                                <path d="M8 10h.01"></path>
                                <path d="M8 14h.01"></path>
                            </svg></div>
                        <p class="text-foreground font-medium mb-0">Offices in Dubai &amp; Cairo</p>
                    </div>
                    <div class="flex items-start gap-4 bg-background border border-solid border-border rounded-2xl p-6 hover:shadow-card transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-6 w-6 text-primary">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg></div>
                        <p class="text-foreground font-medium mb-0">Dedicated Middle East contact</p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="https://wa.me/971509199750?text=Hi%2C%20I%20want%20to%20speak%20to%20a%20consultant%20about%20UAE%20company%20formation" target="_blank" rel="noopener noreferrer" class="relative inline-flex items-center justify-center h-14 rounded-xl px-10 text-lg font-semibold text-accent bg-transparent overflow-hidden transition-all duration-300 hover:scale-105 animate-heartbeat">
                        <span class="absolute inset-0 rounded-xl bg-[linear-gradient(90deg,#196b41,#c21e29,#196b41,#c21e29,#196b41)] bg-300 animate-border-sweep"></span>
                        <span class="absolute inset-[2px] rounded-[10px] bg-primary-foreground"></span>
                        <span class="relative z-10">Speak to a Consultant on WhatsApp</span>
                    </a>
                </div>
            </div>
        </section>

        <section id="lead-form" class="section-padding bg-gradient-to-br from-primary/10 via-primary/5 to-background">
            <div class="ast-container">
                <div class="max-w-2xl mx-auto">
                    <div class="bg-card border border-solid border-border rounded-2xl p-8 md:p-12 shadow-card">
                        <div class="text-center mb-8">
                            <h2 class="font-display text-3xl md:text-4xl font-bold text-foreground mb-3">Start UAE Company Formation Now</h2>
                            <p class="text-muted-foreground">Fill in your details and our specialist will contact you within 24 hours.</p>
                        </div>
                        <div id="contact">
                            <?php echo do_shortcode('[contact-form-7 id="5f45df8" title="UAE Company Formation"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="faqs" class="section-padding bg-card">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Frequently Asked <span class="text-primary">Questions</span></h2>
                </div>
                <div class="max-w-3xl mx-auto">
                    <?php
                    set_query_var('per_paged', 6);
                    set_query_var('faqs_category', 'UAE Company');
                    get_template_part('/template/faqs/custom-loop', 'faqs'); ?>
                </div>
            </div>
        </section>

        <section class="section-padding bg-card border border-border" style="border-top-style: solid;">
            <div class="ast-container">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-background border border-solid border-border rounded-2xl p-8 md:p-12 shadow-soft">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-5 w-5 text-primary">
                                    <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                    <path d="M20 3v4"></path>
                                    <path d="M22 5h-4"></path>
                                    <path d="M4 17v2"></path>
                                    <path d="M5 18H3"></path>
                                </svg></div>
                            <h2 class="font-display text-2xl font-bold text-foreground">UAE Company Formation</h2>
                        </div>
                        <p class="text-muted-foreground leading-relaxed">UAE company formation through Ajman NuVentures Centre Free Zone offers one of the most affordable and streamlined paths to establishing a business in the UAE. Packages start at AED 4,888 for a trade license only, AED 10,800 for license + 1 visa (Standard), and AED 18,250 for the all-inclusive Bundle Upgrade with medical insurance, tourist visa, bank assistance, and tax registration. License processing takes 5–10 business days, while visa processing requires 7–10 business days (applicant must be inside UAE). All timelines are subject to government clearance, and fingerprinting is required for new applicants.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div><!-- #primary -->

<?php get_footer(); ?>
