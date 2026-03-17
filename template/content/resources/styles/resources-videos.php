<?php

$terms = get_the_terms(get_the_ID(), 'resource-category');

$child_name = '';

if ($terms && !is_wp_error($terms)) {

    // نجيب term videos
    $videos_term = get_term_by('slug', 'videos', 'resource-category');

    if ($videos_term) {
        foreach ($terms as $term) {
            if ($term->parent == $videos_term->term_id) {
                $child_name = $term->name;
                $child_slug = $term->slug;
                break;
            }
        }
    }
}

?>


<a href="<?php the_permalink(); ?>" data-box="<?php echo esc_attr($child_slug); ?>">

    <div class="card-glow cursor-pointer group fade-in-up animate">
        <div class="relative rounded-xl overflow-hidden mb-4">
            <?php the_post_thumbnail('large', ['class' => 'w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300']) ?>
            <div class="absolute inset-0 bg-primary/20 group-hover:bg-primary/10 transition-colors duration-300"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-14 h-14 bg-primary rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play text-primary-foreground ml-1">
                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                    </svg></div>
            </div>
            <div class="absolute bottom-2 right-2 bg-secondary/90 text-secondary-foreground px-2 py-1 rounded text-sm font-medium">8:32</div>
        </div>
        <div class="p-2">
            <h3 class="font-bold text-primary-foreground mb-2 group-hover:text-primary transition-colors duration-300 line-clamp-2"><?php the_title(); ?></h3>
            <div class="text-muted-foreground text-sm mb-3 line-clamp-2"><?php esc_html(the_excerpt()); ?></div>
            <div class="flex items-center justify-between text-sm text-muted-foreground">

                <?php if ($child_name) : ?>
                    <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-medium">
                        <?php echo esc_html($child_name); ?>
                    </span>
                <?php endif; ?>

                <span>12K views</span>
            </div>
        </div>
    </div>
</a>