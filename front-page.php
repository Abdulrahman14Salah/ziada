<?php



/**

 * The template for displaying all pages.

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site may use a

 * different template.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package Astra

 * @since 1.0.0

 */

if (!defined('ABSPATH')) {
	exit(); // Exit if accessed directly.
} ?>
<?php get_header(); ?>
<div <?php astra_primary_class(); ?>>
	<main>
		<?php get_template_part('template/frontpage/frontpage', 'slider'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'services'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'consultation'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'how-it-works'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'partners'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'about'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'clients'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'faqs'); ?>

		<?php get_template_part('template/frontpage/frontpage', 'callToAction'); ?>
	</main>
	<div class="text-primary-foreground/40"></div>
</div><!-- #primary -->

<?php get_footer(); ?>