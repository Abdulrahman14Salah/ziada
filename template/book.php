<?php /* Template Name: Book Your Free Consultation */ ?>

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
                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mb-6">Book Your <span class="text-primary">Free Consultation</span></h1>
                    <p class="text-muted-foreground text-lg md:text-xl">Take the first step towards your business success in the UAE or securing your second citizenship. Our expert team is ready to guide you through every step of the journey.</p>
                </div>
            </div>
        </section>


        <section class="section-padding bg-card">
            <div class="ast-container">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-background border border-border rounded-2xl p-4 md:p-8 shadow-card">
                        <h2 class="font-display text-2xl md:text-3xl font-bold text-foreground mb-6 text-center">Choose a Time Slot</h2>
                        <div id="my-cal-inline-premium-uae-consultation" style="width: 100%; height: 100%; min-height: 700px; overflow: scroll;" class="cal-inline-container">
                            <!-- Cal inline embed code begins -->
                            <div style="width:100%;height:100%;overflow:scroll" id="my-cal-inline-premium-uae-consultation"></div>
                            <script type="text/javascript">
                                (function(C, A, L) {
                                    let p = function(a, ar) {
                                        a.q.push(ar);
                                    };
                                    let d = C.document;
                                    C.Cal = C.Cal || function() {
                                        let cal = C.Cal;
                                        let ar = arguments;
                                        if (!cal.loaded) {
                                            cal.ns = {};
                                            cal.q = cal.q || [];
                                            d.head.appendChild(d.createElement("script")).src = A;
                                            cal.loaded = true;
                                        }
                                        if (ar[0] === L) {
                                            const api = function() {
                                                p(api, arguments);
                                            };
                                            const namespace = ar[1];
                                            api.q = api.q || [];
                                            if (typeof namespace === "string") {
                                                cal.ns[namespace] = cal.ns[namespace] || api;
                                                p(cal.ns[namespace], ar);
                                                p(cal, ["initNamespace", namespace]);
                                            } else p(cal, ar);
                                            return;
                                        }
                                        p(cal, ar);
                                    };
                                })(window, "https://app.cal.com/embed/embed.js", "init");
                                Cal("init", "premium-uae-consultation", {
                                    origin: "https://app.cal.com"
                                });

                                Cal.ns["premium-uae-consultation"]("inline", {
                                    elementOrSelector: "#my-cal-inline-premium-uae-consultation",
                                    config: {
                                        "layout": "month_view"
                                    },
                                    calLink: "minamaged/premium-uae-consultation",
                                });

                                Cal.ns["premium-uae-consultation"]("ui", {
                                    "hideEventTypeDetails": false,
                                    "layout": "month_view"
                                });
                            </script>
                            <!-- Cal inline embed code ends -->
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="section-padding bg-background">
            <div class="ast-container">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-foreground mb-4">For <span class="text-primary">Quick Contact</span></h2>
                    <p class="text-muted-foreground text-lg mb-8">Need immediate assistance? Reach out to us directly through phone or WhatsApp.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="tel:+971509199750" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:shadow-lg h-14 rounded-xl px-10 text-lg font-semibold bg-[#1d6c42] hover:bg-[#165a36] text-white hover:text-white flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-5 w-5">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <span>Call Us</span>
                        </a>
                        <a href="http://wa.me/971509199750" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:shadow-lg h-14 rounded-xl px-10 text-lg font-semibold bg-[#25D366] hover:bg-[#20bd5a] text-white hover:text-white flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle h-5 w-5">
                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                            </svg>WhatsApp Us</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

</div><!-- #primary -->


<?php get_footer(); ?>