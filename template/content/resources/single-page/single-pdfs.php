<div id="primary" <?php astra_primary_class(); ?>>

    <div class="min-h-screen bg-background">
        <section class="relative pt-12 pb-12 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-secondary/5 via-background to-primary/5"></div>
            <div class="absolute bottom-20 left-10 w-72 h-72 bg-secondary/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="container mx-auto px-4 relative z-10">
                <a href="/resources/pdfs" class="inline-flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>
                    <span>Back to PDFs</span>
                </a>
                <div class="grid lg:grid-cols-2 gap-12 items-center fade-in-up animate">
                    <div class="relative">
                        <div class="aspect-video rounded-2xl overflow-hidden shadow-[var(--shadow-elegant)]">
                            <?php the_post_thumbnail('single-pdf', ['class' => 'w-full h-full object-cove']) ?>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-primary/90 text-primary-foreground px-4 py-2 rounded-full text-sm font-medium">Workout Plans</span>
                        </div>
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-2 rounded-full mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10 9H8"></path>
                                <path d="M16 13H8"></path>
                                <path d="M16 17H8"></path>
                            </svg>
                            <span class="font-medium">Downloadable PDF</span>
                        </div>
                        <h1 class="text-4xl lg:text-5xl font-bold text-foreground mb-6"><?php the_title(); ?></h1>
                        <div class="text-xl text-muted-foreground leading-relaxed mb-8">
                            <?php the_excerpt(); ?>
                        </div>
                        <?php if ($file_url = get_field('download_file')) : ?>
                            <a href="<?php echo esc_url($file_url); ?>"
                                class="btn-hero inline-flex items-center gap-2"
                                download
                                target="_blank" rel="noopener">

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-download">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" x2="12" y1="15" y2="3"></line>
                                </svg>

                                Download PDF
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-gradient-to-br from-muted/30 to-background">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto fade-in-up animate">
                    <div class="prose prose-lg max-w-none">
                        <div class="text-muted-foreground leading-relaxed">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="mt-12 card-elegant">
                        <h3 class="text-2xl font-bold text-foreground mb-6">What's Included</h3>

                        <ul class="space-y-4">
                            <?php
                            for ($i = 1; $i <= 6; $i++) :
                                $included = get_field("included_$i");

                                if ($included) :
                            ?>
                                    <li class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right text-primary flex-shrink-0 mt-1">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                        <span class="text-muted-foreground">
                                            <?php echo esc_html($included); ?>
                                        </span>
                                    </li>
                            <?php
                                endif;
                            endfor;
                            ?>
                        </ul>

                    </div>
                    <div class="mt-12 card-elegant border-l-4 border-primary">
                        <h3 class="text-xl font-bold text-foreground mb-4">Source &amp; Credits</h3>
                        <?php ?>
                        <?php if (get_field('source_&_credits')) : ?>
                            <p class="text-muted-foreground leading-relaxed">
                                <?php echo get_field('source_&_credits'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="mt-12 text-center">
                        <?php if ($file_url = get_field('download_file')) : ?>
                            <a href="<?php echo esc_url($file_url); ?>"
                                class="btn-hero inline-flex items-center gap-2"
                                download
                                target="_blank" rel="noopener">

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-download">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" x2="12" y1="15" y2="3"></line>
                                </svg>
                                <span>Download PDF Now</span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 bg-background">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12 fade-in-up animate">
                    <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-4">Related <span class="text-gradient">PDFs</span></h2>
                    <p class="text-muted-foreground mb-0">Explore more resources to support your fitness journey</p>
                </div>

                <?php
                $args = [
                    'post_type'      => 'resource',
                    'posts_per_page' => -1,
                    'post__not_in'   => [get_the_ID()],
                    'tax_query'      => [
                        [
                            'taxonomy' => 'resource-category',
                            'field'    => 'slug',
                            'terms'    => 'pdfs',
                        ],
                    ],
                ];

                $resources = new WP_Query($args);

                if ($resources->have_posts()) : ?>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <?php
                        $delay = 0;
                        while ($resources->have_posts()) :
                            $resources->the_post();

                            // اسم الكاتيجوري للبادج
                            $terms = get_the_terms(get_the_ID(), 'resource-category');
                            $term_name = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : '';

                            // لو عندك custom field للملف
                            $file_url = get_field('download_file'); // عدل الاسم حسب حقلك
                        ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="card-elegant group transform transition-all duration-500 hover:scale-105 fade-in-up animate"
                                    style="animation-delay: <?php echo esc_attr($delay); ?>ms;">

                                    <div class="relative h-32 mb-4 rounded-xl overflow-hidden bg-gradient-to-br from-primary/20 to-accent/20 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-file-text text-primary">
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

                                    <h3 class="text-lg font-bold text-foreground mb-2 group-hover:text-primary transition-colors duration-300 line-clamp-2">
                                        <?php the_title(); ?>
                                    </h3>

                                    <p class="text-muted-foreground text-sm leading-relaxed mb-6 line-clamp-2">
                                        <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                                    </p>

                                    <button
                                        class="w-full inline-flex items-center justify-center gap-2 bg-primary text-primary-foreground hover:text-primary-foreground px-4 py-3 rounded-lg text-sm font-medium hover:bg-primary/90 transition-colors">
                                        View Details
                                    </button>


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
            </div>
        </section>
        <section class="py-24 bg-gradient-to-r from-primary/10 to-accent/10">
            <div class="container mx-auto px-4 text-center">
                <div class="max-w-3xl mx-auto fade-in-up animate">
                    <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">Explore All <span class="text-gradient">PDFs</span></h2>
                    <p class="text-lg text-muted-foreground mb-8">Browse our complete collection of workout plans, nutrition guides, and comprehensive fitness programs.</p><a href="/resources/pdfs" class="btn-hero inline-flex items-center">View All PDFs<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg></a>
                </div>
            </div>
        </section>
    </div>

</div><!-- #primary -->