<?php

$category = get_query_var('category', 'pdfs');

$args = [
    'post_type'      => 'resource',
    'posts_per_page' => 8,
    'tax_query'      => [
        [
            'taxonomy' => 'resource-category',
            'field'    => 'slug',
            'terms'    => $category,
        ]
    ]
];

$res_query = new WP_Query($args);

if ($res_query->have_posts()) : ?>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <?php
        $i = 0;
        while ($res_query->have_posts()) : $res_query->the_post();
            $i++;

            $format     = strtolower(get_field('choose_format'));
            $pages     = get_field('pages');
            $downloads = get_field('downloads');
            $file      = get_field('resource_file');
            $terms     = get_the_terms(get_the_ID(), 'resources');
            $term_name = $terms && !is_wp_error($terms) ? $terms[0]->name : '';

            set_query_var('pages', $pages);
            set_query_var('downloads', $downloads);
            get_template_part('/template/content/resources/styles/resources', $format);
        endwhile; ?>
    </div>
<?php
endif;
wp_reset_postdata();
?>