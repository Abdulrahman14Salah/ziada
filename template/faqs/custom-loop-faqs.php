<?php
$per_paged = get_query_var('per_paged', -1);
$faq_cat   = get_query_var('faqs_category', 'faqs');
$bg        = get_query_var('bg', 'bg-background');

$cat_key = $faq_cat ? sanitize_title($faq_cat) : 'all';

$args = [
    'post_type'      => 'faq',
    'posts_per_page' => $per_paged,
    'orderby'        => 'date',
    'order'          => 'ASC',
];

if (!empty($faq_cat)) {
    $args['tax_query'] = [
        [
            'taxonomy' => 'faqs-category',
            'field'    => 'name',
            'terms'    => $faq_cat,
        ]
    ];
}

$q = new WP_Query($args);
?>

<?php if ($q->have_posts()) : $i = 0; ?>

    <div id="accordion-collapse-<?php echo esc_attr($cat_key); ?>" data-accordion="collapse" class="rounded-base overflow-hidden shadow-xs">

        <?php while ($q->have_posts()) : $q->the_post();
            $i++; ?>

            <div class="<?php echo $bg; ?> border border-solid border-border rounded-xl overflow-hidden data-[state=open]:shadow-card transition-all mb-4">

                <h2 id="accordion-heading-<?php echo esc_attr($cat_key . '-' . $i); ?>" style="margin-bottom:0;">
                    <button
                        type="button"
                        class="accordion-button w-full flex flex-1 items-center justify-between transition-all [&[data-state=open]>svg]:rotate-180 text-left font-semibold text-foreground hover:text-primary py-5 hover:no-underline bg-transparent hover:bg-transparent focus:bg-transparent text-black"
                        data-accordion-target="#accordion-body-<?php echo esc_attr($cat_key . '-' . $i); ?>"
                        aria-expanded="false"
                        aria-controls="accordion-body-<?php echo esc_attr($cat_key . '-' . $i); ?>">

                        <span class="font-semibold text-black pr-4 text-base"><?php the_title(); ?></span>

                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                d="m5 15 7-7 7 7" />
                        </svg>
                    </button>
                </h2>

                <div id="accordion-body-<?php echo esc_attr($cat_key . '-' . $i); ?>"
                    class="hidden"

                    aria-labelledby="accordion-heading-<?php echo esc_attr($cat_key . '-' . $i); ?>">

                    <p class="text-muted-foreground text-small p-5 mb-0" style="font-size: 14px;">
                        <?php echo get_the_content(); ?>
                    </p>

                </div>

            </div>

        <?php endwhile; ?>

    </div>

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <div class="col-span-full text-center text-muted-foreground mb-4">
        No faqs are currently available.
    </div>
<?php endif; ?>