<section id="clients" class="section-padding background-gradient via-background">
    <div class="ast-container">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Our Clients <span class="text-primary">Feedback</span></h2>
            <p class="text-muted-foreground text-lg">Our clients talking about their experience with ZIADA, the speed of completing procedures.</p>
        </div>

        <?php
        set_query_var('per_paged', 3);
        get_template_part('/template/clients/custom-loop', 'clients');
        ?>

        <div class="text-center"><a href="<?php echo page_link_by_slug('our-clients'); ?>" class="ast-outline-button">View More Feedback</a></div>
    </div>
</section>