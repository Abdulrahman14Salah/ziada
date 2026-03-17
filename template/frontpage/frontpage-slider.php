<section id="home" class="relative flex items-center overflow-hidden min-h-[500px] section-padding">
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000 opacity-100" style="background-image: url(&quot;https://www.arqamweb.com/wp-content/uploads/2025/12/Slide-1.jpg&quot;);"></div>
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000 opacity-0" style="background-image: url(&quot;https://www.arqamweb.com/wp-content/uploads/2025/12/Slide-2.jpg&quot;);"></div>
    <div class="relative z-10 ast-container px-4 md:px-6 mx-auto">
        <div class="max-w-3xl animate-fade-up text-left">
            <h1 class="font-display font-bold leading-tight text-white mb-6 text-4xl md:text-5xl">Business Setup in UAE &amp;<br>Second Citizenship Services</h1>
            <p class="text-lg md:text-xl text-white/90 max-w-2xl mb-10">From establishing your UAE business to unlocking second citizenship, we support your global expansion with confidence.</p>
            <div class="flex flex-wrap gap-4">
                <a href="<?php echo page_link_by_slug('setup-business-form'); ?>" class="ast-button text-lg font-semibold">Setup Business</a>
                <a href="<?php echo page_link_by_slug('get-residency-citizenship'); ?>" class="ast-button text-lg font-semibold">Get Residency and Citizenship</a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const slides = document.querySelectorAll("#home > .absolute.inset-0");
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