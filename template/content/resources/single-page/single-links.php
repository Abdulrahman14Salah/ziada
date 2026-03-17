<?php
$terms = get_the_terms(get_the_ID(), 'resource-category');

$child_name = '';

if ($terms && !is_wp_error($terms)) {
    $links_term = get_term_by('slug', 'links', 'resource-category');

    if ($links_term) {
        foreach ($terms as $term) {
            if ($term->parent == $links_term->term_id) {
                $child_name = $term->name;
                break;
            }
        }
    }
}
?>

<div id="primary" <?php astra_primary_class(); ?>>
    <div class="min-h-screen bg-background">
        <section class="pt12 pb-12 px-4 bg-gradient-to-b from-primary/5 to-background">
            <div class="container mx-auto max-w-4xl">
                <a class="inline-flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors mb-8" href="/resources/links">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left w-4 h-4">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>
                    <span>Back to Links</span>
                </a>
                <div class="transition-all duration-700 opacity-100 translate-y-0">
                    <div class="flex items-center gap-3 mb-4">

                        <?php if ($child_name) : ?>
                            <span class="px-3 py-1 bg-primary/10 text-primary text-sm font-medium rounded-full">
                                <?php echo esc_html($child_name); ?>
                            </span>
                        <?php endif; ?>

                        <span class="flex items-center gap-1 text-muted-foreground text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-4 h-4">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                <path d="M2 12h20"></path>
                            </svg>
                            <span>External Resource</span>
                        </span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-6"><?php the_title(); ?></h1>
                    <div class="relative rounded-2xl overflow-hidden mb-8">
                        <?php the_post_thumbnail('single-link', ['class' => 'w-full h-64 md:h-80 object-cover']) ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 flex items-center gap-2">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link2 w-6 h-6 text-white">
                                    <path d="M9 17H7A5 5 0 0 1 7 7h2"></path>
                                    <path d="M15 7h2a5 5 0 1 1 0 10h-2"></path>
                                    <line x1="8" x2="16" y1="12" y2="12"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 px-4">
            <div class="container mx-auto max-w-4xl">
                <div class="transition-all duration-700 delay-200 opacity-100 translate-y-0">
                    <h2 class="text-2xl font-bold text-foreground mb-6 flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open w-6 h-6 text-primary">
                            <path d="M12 7v14"></path>
                            <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path>
                        </svg>
                        <span>About This Resource</span>
                    </h2>
                    <div class="prose prose-lg max-w-none">
                        <div class="text-muted-foreground leading-relaxed mb-4"><?php the_content(); ?></div>
                    </div>
                    <div class="mt-10">


                        <?php
                        $external_link = get_field('external_link');

                        if ($external_link) : ?>
                            <a href="<?php echo esc_url($external_link); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="btn-primary">
                                <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 w-full py-6 text-lg font-semibold gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link w-5 h-5">
                                        <path d="M15 3h6v6"></path>
                                        <path d="M10 14 21 3"></path>
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                    </svg>
                                    <span>Open The Link</span>
                                </button>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 px-4 bg-secondary/30">
            <div class="container mx-auto max-w-6xl">
                <div class="transition-all duration-700 delay-500 opacity-100 translate-y-0">
                    <h2 class="text-2xl font-bold text-foreground mb-8 text-center">Related Resources</h2>

                    <?php
                    $args = [
                        'post_type'      => 'resource',
                        'posts_per_page' => 3,
                        'post__not_in'   => [get_the_ID()],
                        'orderby'        => 'rand',
                        'tax_query'      => [
                            [
                                'taxonomy' => 'resource-category',
                                'field'    => 'slug',
                                'terms'    => 'links',
                            ]
                        ]
                    ];

                    $links_query = new WP_Query($args);

                    if ($links_query->have_posts()) : ?>

                        <div class="grid md:grid-cols-3 gap-6">

                            <?php while ($links_query->have_posts()) : $links_query->the_post(); ?>

                                <a href="<?php the_permalink(); ?>" class="block bg-background rounded-2xl p-6 border border-solid border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-lg">

                                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link2 w-6 h-6 text-primary">
                                            <path d="M9 17H7A5 5 0 0 1 7 7h2"></path>
                                            <path d="M15 7h2a5 5 0 1 1 0 10h-2"></path>
                                            <line x1="8" x2="16" y1="12" y2="12"></line>
                                        </svg>
                                    </div>

                                    <?php
                                    // نعرض الكاتيجوري الفرعي تحت videos لو حابب
                                    $terms = get_the_terms(get_the_ID(), 'resource-category');
                                    $label = 'Video';

                                    if ($terms && !is_wp_error($terms)) {
                                        foreach ($terms as $term) {
                                            if ($term->slug !== 'videos') {
                                                $label = $term->name;
                                                break;
                                            }
                                        }
                                    }
                                    ?>

                                    <span class="text-xs text-primary font-medium uppercase tracking-wider">
                                        <?php echo esc_html($label); ?>
                                    </span>

                                    <h3 class="text-lg font-semibold text-foreground mt-2 mb-2">
                                        <?php the_title(); ?>
                                    </h3>

                                    <p class="text-muted-foreground text-sm">
                                        <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                                    </p>

                                </a>

                            <?php endwhile; ?>

                        </div>

                    <?php
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
        <section class="py-20 px-4">
            <div class="container mx-auto max-w-4xl text-center">
                <div class="transition-all duration-700 delay-600 opacity-100 translate-y-0">
                    <h2 class="text-3xl font-bold text-foreground mb-4">Explore More Resources</h2>
                    <p class="text-muted-foreground mb-8 max-w-2xl mx-auto">Discover our curated collection of trusted health and fitness resources to support your wellness journey.</p>
                    <a href="/resources/links">
                        <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-solid border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8 gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link2 w-4 h-4">
                                <path d="M9 17H7A5 5 0 0 1 7 7h2"></path>
                                <path d="M15 7h2a5 5 0 1 1 0 10h-2"></path>
                                <line x1="8" x2="16" y1="12" y2="12"></line>
                            </svg>
                            <span>View All Links</span>
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div>

</div><!-- #primary -->