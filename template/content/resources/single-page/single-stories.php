<?php if (astra_page_layout() === 'left-sidebar') { ?>

    <?php get_sidebar(); ?>

<?php } ?>

<div id="primary" <?php astra_primary_class(); ?>>
    <div class="py-24 ast-container">
        <?php astra_primary_content_top(); ?>

        <?php astra_content_loop(); ?>

        <?php astra_primary_content_bottom(); ?>
    </div>

</div><!-- #primary -->

<?php if (astra_page_layout() === 'right-sidebar') { ?>

    <?php get_sidebar(); ?>

<?php } ?>