<section id="consultation" class="section-padding bg-gradient-to-br from-primary/5 via-background to-accent/5">
    <div class="ast-container">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Get <span class="text-primary">Free Consultation</span></h2>
            <p class="text-muted-foreground text-lg">Have questions? We offer a <strong class="text-primary">Free Consultation</strong> to answer all your questions and guide you to make the right decisions for your business and citizenship goals.</p>
        </div>
        <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
            <div class="card-gradient p-8 pb-0 lg:p-10 lg:pb-0 border border-solid border-border/50 animate-slide-in-left">
                <div>
                    <?php echo do_shortcode('[contact-form-7 id="12c6b61" title="Consultation"]'); ?>
                </div>
            </div>
            <div class="relative slider h-[400px] lg:h-[500px] rounded-2xl overflow-hidden shadow-elevated animate-slide-in-right">
                <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-100">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/business-setup-CmhTpjSO.jpg" alt="Business Setup in UAE" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-foreground/60 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <p class="text-primary-foreground font-semibold text-lg mb-0">Business Setup in UAE</p>
                    </div>
                </div>
                <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-0">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/passports.avif" alt="Second Citizenship" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-foreground/60 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <p class="text-primary-foreground font-semibold text-lg mb-0">Second Citizenship</p>
                    </div>
                </div>
                <div class="absolute bottom-6 right-6 flex gap-2">
                    <button class="dot w-2.5 h-2.5 rounded-full transition-all bg-primary-foreground w-8 p-0"></button>
                    <button class="dot w-2.5 h-2.5 rounded-full transition-all bg-primary-foreground/50 p-0"></button>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        document.querySelectorAll(".slider").forEach(slider => {

                            const slides = slider.querySelectorAll(".slide");
                            const dots = slider.querySelectorAll(".dot");

                            let current = 0;

                            function showSlide(index) {
                                slides.forEach((slide, i) => {
                                    slide.classList.toggle("opacity-100", i === index);
                                    slide.classList.toggle("opacity-0", i !== index);
                                });

                                dots.forEach((dot, i) => {
                                    dot.classList.toggle("w-8", i === index);
                                    dot.classList.toggle("bg-primary-foreground", i === index);
                                    dot.classList.toggle("bg-primary-foreground/50", i !== index);
                                });

                                current = index;
                            }

                            dots.forEach((dot, index) => {
                                dot.addEventListener("click", () => showSlide(index));
                            });

                            // autoplay
                            setInterval(() => {
                                showSlide((current + 1) % slides.length);
                            }, 5000);

                        });
                    });
                </script>
            </div>
        </div>
    </div>
</section>