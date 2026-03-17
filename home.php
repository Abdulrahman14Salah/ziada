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
		<div class="min-h-screen bg-background">
			<section class="relative pt-32 pb-16 overflow-hidden">
				<div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-background to-accent/5"></div>
				<div class="absolute top-20 left-20 w-72 h-72 bg-primary/10 rounded-full blur-3xl animate-pulse"></div>
				<div class="absolute bottom-10 right-20 w-96 h-96 bg-accent/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
				<div class="container mx-auto px-4 relative z-10">
					<div class="text-center max-w-4xl mx-auto fade-in-up animate">
						<h1 class="text-5xl lg:text-7xl font-bold text-primary-foreground mb-6">Latest <span class="text-gradient">Blog Posts</span></h1>
						<p class="text-xl text-muted-foreground leading-relaxed mb-8">We share blogs here with you to give you daily tips to help you have a healthier day and healthier lifestyle. Discover expert advice, workout tips, nutrition guides, and inspiring stories.</p>
					</div>
				</div>
			</section>
			<?php get_template_part('/template/components/filters/filter', 'taxonomies'); ?>

			<section class="py-24 bg-gradient-to-br from-muted/30 to-background">
				<div class="container mx-auto px-4">

					<?php
					set_query_var('count', -1);
					get_template_part('/template/blog/custom-loop', 'blog');
					?>

				</div>
			</section>
			<section class="py-24 bg-gradient-to-r from-primary/10 to-accent/10">
				<div class="container mx-auto px-4 text-center">
					<div class="max-w-3xl mx-auto fade-in-up animate">
						<h2 class="text-4xl lg:text-5xl font-bold text-primary-foreground mb-6">Stay <span class="text-gradient">Updated</span></h2>
						<p class="text-lg text-muted-foreground mb-8">Subscribe to our newsletter and get the latest health tips, workout routines, and inspiring stories delivered straight to your inbox.</p>
						<div id="newsletter">

							<?php echo do_shortcode('[newsletter_form ajax="1"]'); ?>

							<!-- <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-4 bg-card border border-solid border-border rounded-xl text-primary-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
							<button class="btn-hero whitespace-nowrap">Subscribe</button> -->
						</div>
					</div>
				</div>
			</section>
		</div>
	</main>
</div><!-- #primary -->

<?php get_footer(); ?>