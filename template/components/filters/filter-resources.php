<?php

get_query_var('parent_slug', '');

if (empty(get_query_var('parent_slug', ''))) {
    $parent_slug = get_query_var('parent_slug', '');
}

?>

<section class="py-8 bg-muted/30">
    <div class="container mx-auto px-4">
        <?php

        $parent_term = get_term_by('slug', $parent_slug, 'resource-category');

        if ($parent_term) :
            $child_terms = get_terms([
                'taxonomy'   => 'resource-category',
                'hide_empty' => true,
                'parent'     => $parent_term->term_id,
                'order'      => 'DESC',
                'number'     => 5
            ]);
        ?>

            <div class="flex flex-wrap justify-center gap-4 fade-in-up animate" id="filter-Buttons">
                <button
                    class="filter-btn px-4 py-2 rounded-full transition-all duration-300 font-medium bg-card text-muted-foreground hover:bg-primary/10 hover:text-primary border border-solid border-border hover:border-border active"
                    data-category="all">
                    All
                </button>

                <?php if (!empty($child_terms) && !is_wp_error($child_terms)) : ?>
                    <?php foreach ($child_terms as $term) : ?>
                        <button
                            class="filter-btn px-4 py-2 rounded-full transition-all duration-300 font-medium bg-card text-muted-foreground hover:bg-primary/10 hover:text-primary border border-solid border-border hover:border-border"
                            data-category="<?php echo esc_attr($term->slug); ?>">
                            <?php echo esc_html($term->name); ?>
                        </button>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>

        <?php endif; ?>
    </div>
</section>