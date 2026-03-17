<!-- bg-muted/30 -->
<section class="py-8 ">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center gap-4 fade-in-up animate" id="filterButtons">
            <button
                class="filter-btn px-4 py-2 rounded-full transition-all duration-300 font-medium bg-card text-muted-foreground hover:bg-primary/10 hover:text-primary border border-solid border-border hover:border-border active"
                data-category="all">
                All
            </button>

            <?php
            $categories = get_categories([
                'taxonomy'   => 'category',
                'hide_empty' => true,
            ]);

            foreach ($categories as $cat) :
                $slug = esc_attr($cat->slug);
                $name = esc_html($cat->name);
            ?>
                <button
                    class="filter-btn px-4 py-2 rounded-full transition-all duration-300 font-medium bg-card text-muted-foreground hover:bg-primary/10 hover:text-primary border border-solid border-border hover:border-border"
                    data-category="<?php echo $slug; ?>">
                    <?php echo $name; ?>
                </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>