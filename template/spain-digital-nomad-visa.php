<?php /* Template Name: Spain Digital Nomad Visa */ ?>

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

get_header('spain'); ?>

<div>
    <main>
        <section id="home" class="relative flex items-center overflow-hidden" style="height: 500px;">
            <div class="hero-slide absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000 opacity-100" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/spain-dnv-hero-1.jpeg');"></div>
            <div class="hero-slide absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000 opacity-0" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/spain-dnv-hero.jpg');"></div>

            <div class="relative z-10 ast-container px-4 md:px-6 mx-auto">


                <div class="max-w-3xl animate-fade-up text-left">
                    <h1 class="font-display font-bold leading-tight text-primary-foreground mb-4" style="font-size: 48px;">Spain Digital Nomad Visa</h1>
                    <p class="text-2xl md:text-3xl font-semibold text-primary-foreground/95 mb-4">Get Spain Residency Without Any Investment</p>
                    <p class="text-lg text-primary-foreground/85 max-w-2xl mb-8">Live in Spain legally while working for a foreign company or clients — with a fast process, family inclusion, and Schengen travel.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#lead-form" class="ast-outline-button font-semibold text-lg">Get Free Eligibility Check</a>
                        <a href="https://wa.me/971509199750" target="_blank" rel="noopener noreferrer" class="relative inline-flex items-center justify-center h-14 rounded-xl px-10 text-lg font-semibold text-accent bg-transparent overflow-hidden transition-all duration-300 hover:scale-105 group animate-heartbeat">
                            <span class="absolute inset-0 rounded-xl bg-[linear-gradient(90deg,#196b41,#c21e29,#196b41,#c21e29,#196b41)] bg-300 animate-border-sweep"></span>
                            <span class="absolute inset-[2px] rounded-[10px] bg-primary-foreground"></span><span class="relative z-10">Talk to a Licensed Consultant on WhatsApp</span></a>
                    </div>
                </div>

            </div>

            <div class="absolute inset-0 bg-gradient-to-r from-foreground/80 via-foreground/60 to-foreground/40"></div>

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
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check h-5 w-5 text-primary">
                                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg></div>
                        <div>
                            <p class="font-semibold text-foreground text-sm leading-tight mb-0">UAE Government-Licensed Immigration Consultancy</p>
                            <p class="text-muted-foreground text-xs mb-0">Trade License No. 1202993</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award h-5 w-5 text-primary">
                                <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                                <circle cx="12" cy="8" r="6"></circle>
                            </svg></div>
                        <div>
                            <p class="font-semibold text-foreground text-sm leading-tight mb-0">95%+ Approval Rate</p>
                            <p class="text-muted-foreground text-xs mb-0">Proven track record</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scale h-5 w-5 text-primary">
                                <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                <path d="M7 21h10"></path>
                                <path d="M12 3v18"></path>
                                <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path>
                            </svg></div>
                        <div>
                            <p class="font-semibold text-foreground text-sm leading-tight mb-0">Spanish Immigration Lawyers</p>
                            <p class="text-muted-foreground text-xs mb-0">Review every case</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-5 w-5 text-primary">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg></div>
                        <div>
                            <p class="font-semibold text-foreground text-sm leading-tight mb-0">Fast Processing</p>
                            <p class="text-muted-foreground text-xs mb-0">15–45 business days</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-background">
            <div class="ast-container">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-foreground mb-6">Get European Residency — <span class="text-primary">No Property, No Investment</span></h2>
                        <p class="text-muted-foreground text-lg mb-6">Unlike Golden Visa programs that require €500,000+ in real estate or business investments, Spain's Digital Nomad Visa is entirely income-based. If you earn at least €2,760/month from remote work, you qualify.</p>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>No property purchase required</li>
                            <li class="flex items-center gap-3 text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>No business investment needed</li>
                            <li class="flex items-center gap-3 text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Income-based qualification only</li>
                            <li class="flex items-center gap-3 text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Faster than Golden Visa programs</li>
                            <li class="flex items-center gap-3 text-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Same Schengen benefits</li>
                        </ul>
                    </div>
                    <div class="bg-card border border-solid border-border rounded-2xl p-8 shadow-card">
                        <h3 class="font-display text-xl font-bold text-foreground mb-4">Golden Visa vs. Digital Nomad Visa</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between py-3 border-b border-border" style="border-bottom-style: solid;"><span class="text-muted-foreground">Investment Required</span><span class="font-semibold text-foreground">€0</span></div>
                            <div class="flex justify-between py-3 border-b border-border" style="border-bottom-style: solid;"><span class="text-muted-foreground">Income Requirement</span><span class="font-semibold text-foreground">€2,760/mo</span></div>
                            <div class="flex justify-between py-3 border-b border-border" style="border-bottom-style: solid;"><span class="text-muted-foreground">Processing Time</span><span class="font-semibold text-foreground">15–45 days</span></div>
                            <div class="flex justify-between py-3 border-b border-border" style="border-bottom-style: solid;"><span class="text-muted-foreground">Schengen Travel</span><span class="font-semibold text-primary">✓ Included</span></div>
                            <div class="flex justify-between py-3"><span class="text-muted-foreground">Family Inclusion</span><span class="font-semibold text-primary">✓ Included</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="benefits" class="section-padding bg-card">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">What You Get With Spain's <span class="text-primary">Digital Nomad Residency</span></h2>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-background border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all duration-300 hover:-translate-y-1">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-7 w-7 text-primary">
                                <path d="M8 2v4"></path>
                                <path d="M16 2v4"></path>
                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                <path d="M3 10h18"></path>
                            </svg></div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Residency Timeline</h3>
                        <p class="text-muted-foreground mb-0">Get your Spanish residency permit valid for up to 3 years, renewable — live and work legally in Spain.</p>
                    </div>
                    <div class="bg-background border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all duration-300 hover:-translate-y-1">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-7 w-7 text-primary">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg></div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Family Inclusion</h3>
                        <p class="text-muted-foreground mb-0">Include your spouse, children, and dependents in your application. Your whole family can relocate together.</p>
                    </div>
                    <div class="bg-background border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all duration-300 hover:-translate-y-1">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plane h-7 w-7 text-primary">
                                <path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"></path>
                            </svg></div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Schengen Freedom</h3>
                        <p class="text-muted-foreground mb-0">Travel freely across 27 Schengen countries without additional visas. Europe becomes your backyard.</p>
                    </div>
                    <div class="bg-background border border-solid border-border rounded-2xl p-8 hover:shadow-card transition-all duration-300 hover:-translate-y-1">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-laptop h-7 w-7 text-primary">
                                <path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"></path>
                            </svg></div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-3">Remote Work Flexibility</h3>
                        <p class="text-muted-foreground mb-0">Continue working for your foreign employer or freelance clients while enjoying Spain's lifestyle.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-gradient-to-br from-primary/10 to-background">
            <div class="ast-container">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="inline-flex items-center gap-2 bg-primary/10 text-primary rounded-full px-4 py-2 mb-6 text-sm font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign h-4 w-4">
                            <line x1="12" x2="12" y1="2" y2="22"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>Tax Advantage</div>
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-6">Beckham Law — <span class="text-primary">24% Flat Tax Rate</span></h2>
                    <p class="text-muted-foreground text-lg mb-6 max-w-3xl mx-auto">Under Spain's Beckham Law (Régimen de Impatriados), new tax residents may qualify for a flat 24% income tax rate on Spanish-sourced income — instead of the progressive rate up to 47%. This benefit can last up to 6 years.</p>
                    <p class="text-sm text-muted-foreground italic mb-8">* Conditions apply. Our team includes tax coordination support to help you understand and maximize this benefit.</p><a href="#lead-form" class="ast-outline-button">Check If You Qualify</a>
                </div>
            </div>
        </section>
        <section class="section-padding bg-background">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Why Clients Choose <span class="text-primary">Ziada Company</span></h2>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto mb-12">
                    <div class="flex items-center gap-4 bg-card border border-solid border-border rounded-xl p-5 hover:shadow-card transition-all">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check h-5 w-5 text-primary">
                                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg></div>
                        <p class="font-semibold text-foreground mb-0">Government licensed in UAE</p>
                    </div>
                    <div class="flex items-center gap-4 bg-card border border-solid border-border rounded-xl p-5 hover:shadow-card transition-all">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award h-5 w-5 text-primary">
                                <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                                <circle cx="12" cy="8" r="6"></circle>
                            </svg></div>
                        <p class="font-semibold text-foreground mb-0">95–99% success rate</p>
                    </div>
                    <div class="flex items-center gap-4 bg-card border border-solid border-border rounded-xl p-5 hover:shadow-card transition-all">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scale h-5 w-5 text-primary">
                                <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                <path d="M7 21h10"></path>
                                <path d="M12 3v18"></path>
                                <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path>
                            </svg></div>
                        <p class="font-semibold text-foreground mb-0">Spanish immigration lawyers (Madrid / Barcelona)</p>
                    </div>
                    <div class="flex items-center gap-4 bg-card border border-solid border-border rounded-xl p-5 hover:shadow-card transition-all">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-5 w-5 text-primary">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10 9H8"></path>
                                <path d="M16 13H8"></path>
                                <path d="M16 17H8"></path>
                            </svg></div>
                        <p class="font-semibold text-foreground mb-0">Attorney-reviewed cases</p>
                    </div>
                    <div class="flex items-center gap-4 bg-card border border-solid border-border rounded-xl p-5 hover:shadow-card transition-all">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign h-5 w-5 text-primary">
                                <line x1="12" x2="12" y1="2" y2="22"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg></div>
                        <p class="font-semibold text-foreground mb-0">Transparent pricing</p>
                    </div>
                    <div class="flex items-center gap-4 bg-card border border-solid border-border rounded-xl p-5 hover:shadow-card transition-all">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-handshake h-5 w-5 text-primary">
                                <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                                <path d="M12 5 9.04 7.96a2.17 2.17 0 0 0 0 3.08c.82.82 2.13.85 3 .07l2.07-1.9a2.82 2.82 0 0 1 3.79 0l2.96 2.66"></path>
                                <path d="m18 15-2-2"></path>
                                <path d="m15 18-2-2"></path>
                            </svg></div>
                        <p class="font-semibold text-foreground mb-0">Refund guarantee if rejection due to our error</p>
                    </div>
                    <div class="flex items-center gap-4 bg-card border border-solid border-border rounded-xl p-5 hover:shadow-card transition-all">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg></div>
                        <p class="font-semibold text-foreground mb-0">Post-approval support</p>
                    </div>
                </div>
                <div class="text-center"><a href="#lead-form" class="ast-outline-button">Check If You Qualify (Free)</a></div>
            </div>
        </section>
        <section id="eligibility" class="section-padding bg-card">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Eligibility <span class="text-primary">Requirements</span></h2>
                </div>
                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto mb-10">
                    <div class="bg-background border border-solid border-border rounded-2xl p-6">
                        <h3 class="font-display text-lg font-bold text-foreground mb-4 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign h-5 w-5 text-primary">
                                <line x1="12" x2="12" y1="2" y2="22"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg> Minimum Income</h3>
                        <ul class="space-y-2 mb-0">
                            <li class="text-muted-foreground flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg> €2,760/month — single applicant</li>
                            <li class="text-muted-foreground flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg> €690/month — per dependent</li>
                        </ul>
                    </div>
                    <div class="bg-background border border-solid border-border rounded-2xl p-6">
                        <h3 class="font-display text-lg font-bold text-foreground mb-4 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap h-5 w-5 text-primary">
                                <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path>
                                <path d="M22 10v6"></path>
                                <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                            </svg> Qualifications</h3>
                        <ul class="space-y-2 mb-0">
                            <li class="text-muted-foreground flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg> University degree OR 3+ years experience</li>
                            <li class="text-muted-foreground flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg> Clean criminal record</li>
                            <li class="text-muted-foreground flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg> Health insurance coverage</li>
                        </ul>
                    </div>
                    <div class="bg-background border border-solid border-border rounded-2xl p-6">
                        <h3 class="font-display text-lg font-bold text-foreground mb-4 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-briefcase h-5 w-5 text-primary">
                                <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                            </svg> Work Status</h3>
                        <ul class="space-y-2 mb-0">
                            <li class="text-muted-foreground flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg> Employee (foreign employer)</li>
                            <li class="text-muted-foreground flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg> Freelancer / Business owner</li>
                        </ul>
                    </div>
                </div>
                <div class="max-w-5xl mx-auto">
                    <div class="bg-primary/5 border border-solid border-primary/20 rounded-xl p-6 text-center">
                        <p class="text-foreground font-semibold mb-1">Not sure if you qualify?</p>
                        <p class="text-muted-foreground text-sm mb-4">Submit your details and we'll confirm your eligibility within 24 hours — completely free.</p><a href="#lead-form" class="ast-outline-button">Check My Eligibility</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="packages" class="section-padding bg-background">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Our <span class="text-primary">Packages</span></h2>
                </div>
                <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto mb-12">
                    <div class="relative bg-card border rounded-2xl p-8 transition-all duration-300 hover:-translate-y-2 border-solid hover:shadow-elevated border-border">
                        <h3 class="font-display text-xl font-bold text-foreground mb-2">Essential</h3>
                        <p class="text-3xl font-bold text-primary mb-6">€7,500</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-2 text-muted-foreground text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Eligibility assessment</li>
                            <li class="flex items-center gap-2 text-muted-foreground text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Document checklist</li>
                            <li class="flex items-center gap-2 text-muted-foreground text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Application preparation</li>
                            <li class="flex items-center gap-2 text-muted-foreground text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Basic submission support</li>
                            <li class="flex items-center gap-2 text-muted-foreground text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Email updates</li>
                        </ul><a href="#lead-form" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:shadow-lg h-10 px-4 py-2 w-full bg-secondary text-secondary-foreground hover:text-secondary-foreground hover:bg-secondary/80">Get Started</a>
                    </div>
                    <div class="relative bg-card border rounded-2xl p-8 transition-all duration-300 hover:-translate-y-2 border-solid hover:shadow-elevated border-border">
                        <div class="absolute -top-3 left-1/2 -translate-x-1/2"><span class="bg-primary text-primary-foreground text-xs font-bold px-4 py-1 rounded-full">All-Inclusive</span></div>
                        <h3 class="font-display text-xl font-bold text-foreground mb-2">VIP</h3>
                        <p class="text-3xl font-bold text-primary mb-6">€14,900</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-2 text-muted-foreground text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Everything in Professional</li>
                            <li class="flex items-center gap-2 text-muted-foreground text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Dedicated case manager</li>
                            <li class="flex items-center gap-2 text-muted-foreground text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Expedited processing</li>
                            <li class="flex items-center gap-2 text-muted-foreground text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Settlement concierge</li>
                            <li class="flex items-center gap-2 text-muted-foreground text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>Tax coordination (Beckham Law)</li>
                            <li class="flex items-center gap-2 text-muted-foreground text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>12-month post-arrival support</li>
                        </ul><a href="#lead-form" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:shadow-lg h-10 px-4 py-2 w-full bg-secondary text-secondary-foreground hover:text-secondary-foreground hover:bg-secondary/80">Get Started</a>
                    </div>
                </div>
                <div class="text-center"><a href="#lead-form" class="ast-custom-button">Get Pricing &amp; Eligibility Confirmed</a></div>
            </div>
        </section>
        <section id="process" class="section-padding bg-card">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">How the <span class="text-primary">Process Works</span></h2>
                </div>
                <div class="grid md:grid-cols-5 gap-6 max-w-6xl mx-auto">
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-7 w-7 text-primary">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10 9H8"></path>
                                <path d="M16 13H8"></path>
                                <path d="M16 17H8"></path>
                            </svg></div>
                        <div class="text-sm font-bold text-accent mb-1">Step 1</div>
                        <h3 class="font-display text-base font-bold text-foreground mb-2">Eligibility Assessment</h3>
                        <p class="text-muted-foreground text-sm">We review your profile, income, and documents to confirm eligibility.</p>
                        <div class="hidden md:block absolute top-8 left-[60%] w-[80%] border-t-2 border-dashed border-primary/20"></div>
                    </div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-briefcase h-7 w-7 text-primary">
                                <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                            </svg></div>
                        <div class="text-sm font-bold text-accent mb-1">Step 2</div>
                        <h3 class="font-display text-base font-bold text-foreground mb-2">Document Preparation</h3>
                        <p class="text-muted-foreground text-sm">Our team prepares and authenticates all required documents.</p>
                        <div class="hidden md:block absolute top-8 left-[60%] w-[80%] border-t-2 border-dashed border-primary/20"></div>
                    </div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe h-7 w-7 text-primary">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                <path d="M2 12h20"></path>
                            </svg></div>
                        <div class="text-sm font-bold text-accent mb-1">Step 3</div>
                        <h3 class="font-display text-base font-bold text-foreground mb-2">Submission to Spain</h3>
                        <p class="text-muted-foreground text-sm">Application submitted to Spanish authorities through licensed lawyers.</p>
                        <div class="hidden md:block absolute top-8 left-[60%] w-[80%] border-t-2 border-dashed border-primary/20"></div>
                    </div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye h-7 w-7 text-primary">
                                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg></div>
                        <div class="text-sm font-bold text-accent mb-1">Step 4</div>
                        <h3 class="font-display text-base font-bold text-foreground mb-2">Monitoring &amp; Updates</h3>
                        <p class="text-muted-foreground text-sm">Real-time tracking and updates throughout the process.</p>
                        <div class="hidden md:block absolute top-8 left-[60%] w-[80%] border-t-2 border-dashed border-primary/20"></div>
                    </div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin h-7 w-7 text-primary">
                                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg></div>
                        <div class="text-sm font-bold text-accent mb-1">Step 5</div>
                        <h3 class="font-display text-base font-bold text-foreground mb-2">Approval &amp; Settlement Support</h3>
                        <p class="text-muted-foreground text-sm">NIE, registration, and full settlement assistance in Spain.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-gradient-to-br from-primary/5 via-background to-accent/5">
            <div class="ast-container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Client <span class="text-primary">Reviews</span></h2>
                </div>
                <div class="grid md:grid-cols-3 gap-8 mb-12"><a href="https://www.youtube.com/shorts/ZMCmAyFrpLc" target="_blank" rel="noopener noreferrer" class="group relative rounded-2xl overflow-hidden shadow-card hover:shadow-elevated transition-all duration-300 hover:-translate-y-2" style="aspect-ratio: 9 / 16; min-height: 500px;"><img src="https://img.youtube.com/vi/ZMCmAyFrpLc/maxresdefault.jpg" alt="Client Review 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-foreground/40 group-hover:bg-foreground/30 transition-colors"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 rounded-full bg-accent flex items-center justify-center shadow-glow-red group-hover:scale-110 transition-transform"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play h-7 w-7 text-accent-foreground fill-current ml-1">
                                    <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                </svg></div>
                        </div>
                    </a><a href="https://www.youtube.com/shorts/GbpxcyV3OqM" target="_blank" rel="noopener noreferrer" class="group relative rounded-2xl overflow-hidden shadow-card hover:shadow-elevated transition-all duration-300 hover:-translate-y-2" style="aspect-ratio: 9 / 16; min-height: 500px;"><img src="https://img.youtube.com/vi/GbpxcyV3OqM/maxresdefault.jpg" alt="Client Review 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-foreground/40 group-hover:bg-foreground/30 transition-colors"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 rounded-full bg-accent flex items-center justify-center shadow-glow-red group-hover:scale-110 transition-transform"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play h-7 w-7 text-accent-foreground fill-current ml-1">
                                    <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                </svg></div>
                        </div>
                    </a><a href="https://www.youtube.com/watch?v=G3w-YJxrn8k" target="_blank" rel="noopener noreferrer" class="group relative rounded-2xl overflow-hidden shadow-card hover:shadow-elevated transition-all duration-300 hover:-translate-y-2" style="aspect-ratio: 9 / 16; min-height: 500px;"><img src="https://img.youtube.com/vi/G3w-YJxrn8k/maxresdefault.jpg" alt="Client Review 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-foreground/40 group-hover:bg-foreground/30 transition-colors"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 rounded-full bg-accent flex items-center justify-center shadow-glow-red group-hover:scale-110 transition-transform"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play h-7 w-7 text-accent-foreground fill-current ml-1">
                                    <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                </svg></div>
                        </div>
                    </a></div>
                <div class="text-center"><a href="https://www.youtube.com/@Ziadadc" target="_blank" rel="noopener noreferrer" class="ast-outline-button">Watch Client Reviews</a></div>
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
                    set_query_var('faqs_category', 'Spain Visa');
                    get_template_part('/template/faqs/custom-loop', 'faqs'); ?>
                </div>
            </div>
        </section>
        <section id="lead-form" class="section-padding bg-gradient-to-br from-primary/10 via-background to-primary/5">
            <div class="ast-container">
                <div class="max-w-2xl mx-auto">
                    <div class="text-center mb-8">
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-foreground mb-4">Get Your Free Eligibility Check <span class="text-primary">(24 Hours)</span></h2>
                        <p class="text-muted-foreground text-lg">Fill out the form below and our Spain visa expert will confirm your eligibility.</p>
                    </div>
                    <div class="bg-card border border-solid border-border rounded-2xl p-8 shadow-card">
                        <div id="contact">
                            <?php echo do_shortcode('[contact-form-7 id="173df9f" title="Spain Digital Nomad Visa"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-background">
            <div class="ast-container">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-card border border-solid border-border rounded-2xl p-8 md:p-10">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-5 w-5 text-primary">
                                    <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                    <path d="M20 3v4"></path>
                                    <path d="M22 5h-4"></path>
                                    <path d="M4 17v2"></path>
                                    <path d="M5 18H3"></path>
                                </svg></div>
                            <h2 class="font-display text-2xl font-bold text-foreground">Spain Digital Nomad Visa</h2>
                        </div>
                        <p class="text-muted-foreground leading-relaxed">Spain's Digital Nomad Visa offers legal residency in Spain without any property or financial investment — purely based on income from remote work. Applicants need a minimum income of €2,760/month, can include family members, and gain Schengen-wide travel access. Under the Beckham Law, eligible applicants may benefit from a flat 24% tax rate for up to 6 years. Ziada Company, a UAE government-licensed immigration consultancy, manages the entire process with Spanish immigration lawyers reviewing every case. With a 95%+ approval rate, transparent pricing, and a refund guarantee, Ziada Company offers Essential, Professional, and VIP packages starting from €6,000.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding bg-gradient-to-br from-primary/10 via-background to-accent/5">
            <div class="ast-container">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-foreground mb-4">Ready to Live &amp; Work in Spain?</h2>
                    <p class="text-muted-foreground text-lg mb-8">Our licensed consultants and Spanish lawyers are ready to help you every step of the way.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center"><a href="#lead-form" class="ast-outline-button font-semibold text-lg">Get Free Eligibility Check</a><a href="https://wa.me/971509199750" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-solid border-input bg-background hover:bg-accent hover:text-accent-foreground h-14 rounded-xl px-10 text-lg font-semibold">WhatsApp Us</a></div>
                </div>
            </div>
        </section>
    </main>
</div><!-- #primary -->

<?php get_footer(); ?>
