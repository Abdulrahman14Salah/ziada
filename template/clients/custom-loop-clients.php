<?php
$per_paged = get_query_var('per_paged', -1);
$client_cat   = get_query_var('client_category', 'clients');

$args = [
    'post_type'      => 'client',
    'posts_per_page' => $per_paged,
    'orderby'        => 'date',
    'order'          => 'ASC',
];

$q = new WP_Query($args);
?>

<?php if ($q->have_posts()) : ?>

    <div class="grid md:grid-cols-3 gap-8 mb-12" data-accordion="collapse" class="rounded-base overflow-hidden shadow-xs">

        <?php while ($q->have_posts()) : $q->the_post(); ?>

            <a href="<?php echo esc_url(get_field('youtube_link')); ?>" target="_blank" rel="noopener noreferrer" class="group relative rounded-2xl overflow-hidden shadow-card hover:shadow-elevated transition-all duration-300 hover:-translate-y-2" style="aspect-ratio: 9 / 16; min-height: 500px;">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('large', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500']);
                }
                ?>

                <div class="absolute inset-0 bg-foreground/40 group-hover:bg-foreground/30 transition-colors"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-16 h-16 rounded-full bg-accent flex items-center justify-center shadow-glow-red group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play h-7 w-7 text-accent-foreground fill-current ml-1">
                            <polygon points="6 3 20 12 6 21 6 3"></polygon>
                        </svg>
                    </div>
                </div>
            </a>

        <?php endwhile; ?>

    </div>

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <div class="col-span-full text-center text-muted-foreground mb-4">
        No client are currently available.
    </div>
<?php endif; ?>