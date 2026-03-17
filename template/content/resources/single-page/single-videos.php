<div id="primary" <?php astra_primary_class(); ?>>

    <div class="min-h-screen bg-background">
        <section class="pt-12 pb-12">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto fade-in-up animate">
                    <div class="relative rounded-2xl overflow-hidden shadow-[var(--shadow-elegant)] mb-8">
                        <?php
                        $video = get_field('hero_video_embed');
                        if ($video) {
                        ?>

                        <?php
                            $video = str_replace(
                                '<iframe',
                                '<iframe class="w-full h-full" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"',
                                $video
                            );

                            if (strpos($video, 'allowfullscreen') === false) {
                                $video = str_replace('</iframe>', ' allowfullscreen></iframe>', $video);
                            }

                            echo '<div class="aspect-video overflow-hidden rounded-xl">' . $video . '</div>';
                        }
                        ?>

                    </div>

                    <div class="mb-8">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'resource-category');
                        $term_name = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : '';

                        $duration = get_field('video_duration');

                        $views = get_post_meta(get_the_ID(), 'views', true);
                        ?>
                        <div class="flex flex-wrap items-center gap-3 mb-4">

                            <?php if ($term_name) : ?>
                                <span class="bg-primary text-primary-foreground px-3 py-1 rounded-full text-sm font-medium">
                                    <?php echo esc_html($term_name); ?>
                                </span>
                            <?php endif; ?>

                            <div class="flex items-center gap-4 text-muted-foreground text-sm">

                                <?php if ($views) : ?>
                                    <span class="flex items-center gap-1">
                                        <!-- eye icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-eye">
                                            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                        <span><?php echo esc_html($views); ?> views</span>
                                    </span>
                                <?php endif; ?>

                                <?php if ($duration) : ?>
                                    <span class="flex items-center gap-1">
                                        <!-- clock icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clock">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                        <span><?php echo esc_html($duration); ?></span>
                                    </span>
                                <?php endif; ?>

                                <span class="flex items-center gap-1">
                                    <!-- calendar icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-calendar">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>
                                    <span><?php echo get_the_date('F Y'); ?></span>
                                </span>

                            </div>
                        </div>

                        <h1 class="text-3xl lg:text-4xl font-bold text-foreground mb-4">
                            <?php the_title(); ?>
                        </h1>
                        <div class="flex items-center gap-4 mb-6">
                            <button class="inline-flex items-center gap-2 bg-primary/10 text-primary hover:text-primary px-4 py-2 rounded-full hover:bg-primary/20 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart">
                                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                                </svg>
                                <span>Like</span>
                            </button>
                            <button class="inline-flex items-center gap-2 bg-muted text-primary-foreground hover:text-primary-foreground px-4 py-2 rounded-full hover:bg-muted/80 transition-colors share-btn"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-share2">
                                    <circle cx="18" cy="5" r="3"></circle>
                                    <circle cx="6" cy="12" r="3"></circle>
                                    <circle cx="18" cy="19" r="3"></circle>
                                    <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                                    <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                                </svg>
                                <span>Share</span>
                            </button>

                            <script>
                                document.addEventListener('click', function(e) {
                                    const btn = e.target.closest('.share-btn');
                                    if (!btn) return;

                                    if (navigator.share) {
                                        navigator.share({
                                            title: document.title,
                                            url: window.location.href
                                        });
                                    } else {
                                        navigator.clipboard.writeText(window.location.href);
                                        alert('Link copied!');
                                    }
                                });
                            </script>
                        </div>

                        <div class="card-elegant">
                            <div class="text-muted-foreground leading-relaxed entry-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/30">
            <div class="container mx-auto px-4">
                <div class="fade-in-up animate" style="animation-delay: 200ms;">
                    <h2 class="text-3xl font-bold text-foreground mb-8">Suggested <span class="text-gradient">Videos</span></h2>
                    <?php
                    $args = [
                        'post_type'      => 'resource',
                        'post__not_in'   => [get_the_ID()],
                        'posts_per_page' => 6,
                        'tax_query'      => [
                            [
                                'taxonomy' => 'resource-category',
                                'field'    => 'slug',
                                'terms'    => 'videos',
                            ],
                        ],
                    ];

                    $videos = new WP_Query($args);

                    if ($videos->have_posts()) : ?>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <?php
                            $delay = 0;
                            while ($videos->have_posts()) : $videos->the_post();

                                // صورة مميزة
                                $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');

                                // مدة الفيديو من ACF
                                $duration = get_field('video_duration');

                                // المشاهدات (meta أو ACF)
                                $views = get_post_meta(get_the_ID(), 'views', true);

                                // اسم الكاتيجوري
                                $terms = get_the_terms(get_the_ID(), 'resource-category');
                                $term_name = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : '';
                            ?>
                                <a href="<?php the_permalink(); ?>"
                                    class="card-elegant group cursor-pointer transform transition-all duration-500 hover:scale-105 fade-in-up animate"
                                    style="animation-delay: <?php echo esc_attr($delay); ?>ms;">

                                    <div class="relative h-48 mb-4 rounded-xl overflow-hidden">
                                        <?php if ($thumb) : ?>
                                            <img src="<?php echo esc_url($thumb); ?>"
                                                alt="<?php the_title_attribute(); ?>"
                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                        <?php endif; ?>

                                        <div class="absolute inset-0 bg-primary/20 group-hover:bg-primary/10 transition-colors duration-300"></div>

                                        <!-- Play icon -->
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                                    fill="currentColor" class="text-primary-foreground ml-0.5">
                                                    <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                                </svg>
                                            </div>
                                        </div>

                                        <?php if ($duration) : ?>
                                            <div class="absolute bottom-2 right-2 bg-secondary/80 text-secondary-foreground px-2 py-1 rounded text-sm">
                                                <?php echo esc_html($duration); ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($term_name) : ?>
                                            <div class="absolute top-2 left-2">
                                                <span class="bg-primary/90 text-primary-foreground px-2 py-1 rounded-full text-xs">
                                                    <?php echo esc_html($term_name); ?>
                                                </span>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <h3 class="font-bold text-foreground mb-2 group-hover:text-primary transition-colors duration-300 line-clamp-2">
                                        <?php the_title(); ?>
                                    </h3>

                                    <div class="flex items-center justify-between text-sm text-muted-foreground">
                                        <?php if ($views) : ?>
                                            <span><?php echo esc_html($views); ?> views</span>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            <?php
                                $delay += 100;
                            endwhile;
                            ?>
                        </div>
                    <?php
                    endif;
                    wp_reset_postdata();
                    ?>
                    <div class="flex justify-center mt-12">
                        <a href="/videos" class="btn-outline group flex items-center">
                            <span>View All Videos</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>