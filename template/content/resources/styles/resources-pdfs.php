<?php

$pages = get_query_var('pages', 1000);
$downloads = get_query_var('downloads', 1000)

?>


<a href="<?php the_permalink(); ?>" class="card-elegant group cursor-pointer transform transition-all duration-500 hover:scale-105 fade-in-up animate">
    <div class="relative h-32 mb-4 rounded-xl overflow-hidden bg-gradient-to-br from-primary/20 to-accent/20 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text text-primary">
            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
            <path d="M10 9H8"></path>
            <path d="M16 13H8"></path>
            <path d="M16 17H8"></path>
        </svg>
        <?php if ($term_name) : ?>
            <div class="absolute top-3 left-3">
                <span class="bg-primary/90 text-primary-foreground px-3 py-1 rounded-full text-xs font-medium">
                    <?php echo esc_html($term_name); ?>
                </span>
            </div>
        <?php endif; ?>
    </div>
    <h3 class="text-lg font-bold text-foreground mb-2 group-hover:text-primary transition-colors duration-300 line-clamp-2"><?php the_title(); ?></h3>
    <p class="text-muted-foreground text-sm leading-relaxed mb-6 line-clamp-2"><?php echo wp_trim_words(get_the_excerpt(), 16); ?></p>
    <button class="w-full inline-flex items-center justify-center gap-2 bg-primary text-primary-foreground hover:text-primary-foreground px-4 py-3 rounded-lg text-sm font-medium hover:bg-primary/90 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link">
            <path d="M15 3h6v6"></path>
            <path d="M10 14 21 3"></path>
            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
        </svg>
        <span>View File</span>
    </button>
</a>