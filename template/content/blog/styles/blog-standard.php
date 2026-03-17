<?php
$cat = get_the_category();
$category_title = esc_html($cat ? $cat[0]->slug : 'blog');

?>
<article class="card-elegant group cursor-pointer transform transition-all duration-500 hover:scale-105 hover:shadow-[var(--shadow-elegant)] fade-in-up animate"
    style="animation-delay: <?php echo esc_attr($delay); ?>ms;" data-box="<?php echo $category_title ?>">

    <!-- Image -->
    <div class="aspect-video rounded-xl mb-6 overflow-hidden relative">
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large', [
                    'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300'
                ]); ?>
            <?php else : ?>
                <img src="/assets/placeholder.jpg" class="w-full h-full object-cover" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </a>
    </div>

    <!-- Category + Date -->
    <div class="flex items-center justify-between mb-4">
        <span class="inline-block text-sm font-medium text-primary bg-primary/10 px-3 py-1 rounded-full">
            <?php echo $category_title; ?>
        </span>

        <div class="flex items-center text-muted-foreground text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-calendar">
                <path d="M8 2v4"></path>
                <path d="M16 2v4"></path>
                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                <path d="M3 10h18"></path>
            </svg>
            <span class="ml-1"><?php echo get_the_date('M j, Y'); ?></span>
        </div>
    </div>

    <!-- Title -->
    <h3 class="text-xl font-bold mb-3 transition-colors duration-300 line-clamp-2">
        <a href="<?php the_permalink(); ?>" class="text-primary-foreground group-hover:text-primary"><?php the_title(); ?></a>
    </h3>

    <!-- Excerpt -->
    <p class="text-muted-foreground leading-relaxed mb-4 line-clamp-3">
        <?php echo get_the_excerpt(); ?>
    </p>

    <?php if (get_the_tags()): ?>
        <!-- Tags -->
        <div class="flex flex-wrap gap-2 mb-4">
            <?php
            $tags = get_the_tags();
            if ($tags) :
                foreach (array_slice($tags, 0, 2) as $tag) :
            ?>
                    <span class="text-xs text-muted-foreground bg-muted px-2 py-1 rounded-md">
                        #<?php echo esc_html($tag->name); ?>
                    </span>
            <?php endforeach;
            endif; ?>
        </div>
    <?php endif; ?>

    <!-- Author + Read time -->
    <div class="flex items-center justify-between pt-4 border-t border-border">
        <div class="flex items-center space-x-3">
            <div class="w-8 h-8 bg-gradient-to-br from-primary/20 to-primary-glow/20 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-user text-primary">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </div>
            <div>
                <p class="text-sm font-medium text-primary-foreground mb-0">
                    <?php the_author(); ?>
                </p>
            </div>
        </div>

        <div class="flex items-center text-muted-foreground text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-clock">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
            <span class="ml-1">
                <?php echo ceil(str_word_count(get_the_content()) / 200); ?> min read
            </span>
        </div>
    </div>

</article>