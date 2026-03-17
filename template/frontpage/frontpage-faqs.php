<section class="section-padding bg-card">
    <div class="ast-container">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">Frequently Asked <span class="text-primary">Questions</span></h2>
            <p class="text-muted-foreground text-lg">Find answers to common questions about our services and processes</p>
        </div>
        <div class="max-w-3xl mx-auto">
            <?php
            set_query_var('per_paged', 6);
            get_template_part('/template/faqs/custom-loop', 'faqs'); ?>
            <div class="text-center mt-10"><a href="<?php echo page_link_by_slug('faqs'); ?>" class="ast-outline-button">View All FAQs</a></div>
        </div>
    </div>
</section>