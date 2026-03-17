<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
</div> <!-- ast-container -->
</div><!-- #content -->
<footer class="relative text-white">
	<div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url(&quot;https://www.arqamweb.com/wp-content/uploads/2025/12/Footer-bg.jpg&quot;);"></div>
	<div class="absolute inset-0" style="background-color: rgba(24, 108, 65, 0.92);"></div>
	<div class="relative z-10">
		<div class="ast-container py-16">
			<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">
				<div>
					<h3 class="font-display text-2xl font-bold mb-6 text-primary-foreground">ZIADA</h3>
					<p class="text-white/80 leading-relaxed text-sm mb-0">Ziada Company specializes in establishing businesses in the UAE and setting up additional branches for companies operating in other countries. Our team brings extensive expertise in company formation across the Emirates, ensuring a smooth and efficient setup process.</p>
				</div>
				<div>
					<h3 class="font-display text-xl font-bold mb-6 text-primary-foreground">Quick Links</h3>
					<ul class="space-y-3">
						<li>
							<a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2 text-white/80 hover:text-white transition-colors group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-4 w-4 text-white group-hover:translate-x-1 transition-transform">
									<path d="m9 18 6-6-6-6"></path>
								</svg>Home
							</a>
						</li>
						<li><a href="<?php echo page_link_by_slug('business-setup-in-uae'); ?>" class="flex items-center gap-2 text-white/80 hover:text-white transition-colors group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-4 w-4 text-white group-hover:translate-x-1 transition-transform">
									<path d="m9 18 6-6-6-6"></path>
								</svg>Setup Business in UAE</a></li>
						<li><a href="<?php echo page_link_by_slug('residency-and-citizenship'); ?>" class="flex items-center gap-2 text-white/80 hover:text-white transition-colors group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-4 w-4 text-white group-hover:translate-x-1 transition-transform">
									<path d="m9 18 6-6-6-6"></path>
								</svg>Second Citizenship Service</a></li>
						<li><a href="<?php echo page_link_by_slug('our-clients'); ?>" class="flex items-center gap-2 text-white/80 hover:text-white transition-colors group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-4 w-4 text-white group-hover:translate-x-1 transition-transform">
									<path d="m9 18 6-6-6-6"></path>
								</svg>Our Clients</a></li>
						<li><a href="<?php echo page_link_by_slug('about-ziada'); ?>" class="flex items-center gap-2 text-white/80 hover:text-white transition-colors group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-4 w-4 text-white group-hover:translate-x-1 transition-transform">
									<path d="m9 18 6-6-6-6"></path>
								</svg>About Us</a></li>
						<li><a href="<?php echo page_link_by_slug('contact-us'); ?>" class="flex items-center gap-2 text-white/80 hover:text-white transition-colors group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-4 w-4 text-white group-hover:translate-x-1 transition-transform">
									<path d="m9 18 6-6-6-6"></path>
								</svg>Contact Us</a></li>
					</ul>
				</div>
				<div>
					<h3 class="font-display text-xl font-bold mb-6 text-primary-foreground">Contact Us</h3>
					<ul class="space-y-4">
						<li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-5 w-5 text-white mt-0.5 flex-shrink-0">
								<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
							</svg>
							<div>
								<p class="text-sm text-white/60 mb-0">WhatsApp / Mobile</p>
								<a href="tel:+971509199750" class="text-white hover:text-white/80 transition-colors">+971 509199750</a>
							</div>
						</li>
						<li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-5 w-5 text-white mt-0.5 flex-shrink-0">
								<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
							</svg>
							<div>
								<p class="text-sm text-white/60 mb-0">WhatsApp / Phone</p>
								<a href="tel:+97143943751" class="text-white hover:text-white/80 transition-colors">(04) 394 3751</a>
							</div>
						</li>
						<li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin h-5 w-5 text-white mt-0.5 flex-shrink-0">
								<path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
								<circle cx="12" cy="10" r="3"></circle>
							</svg>
							<div>
								<p class="text-sm text-white/60 mb-0">Address</p>
								<p class="mb-0">Amer, Sheikh Zayed Road, Sheikh Rashid Building Trade Center First</p>
							</div>
						</li>
						<li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-5 w-5 text-white mt-0.5 flex-shrink-0">
								<circle cx="12" cy="12" r="10"></circle>
								<polyline points="12 6 12 12 16 14"></polyline>
							</svg>
							<div>
								<p class="text-sm text-white/60 mb-0">Working Hours</p>
								<p class="mb-0">Monday – Friday<br>11:00 AM – 7:00 PM</p>
							</div>
						</li>
					</ul>
				</div>
				<div>
					<h3 class="font-display text-xl font-bold mb-6 text-primary-foreground">Follow Us</h3>
					<div class="flex gap-2"><a href="https://www.facebook.com/Ziadadcs" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center hover:bg-white/20 transition-all group" aria-label="Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook h-4 w-4 text-white group-hover:scale-110 transition-transform">
								<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
							</svg></a><a href="https://www.youtube.com/@Ziadadc" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center hover:bg-white/20 transition-all group" aria-label="YouTube"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube h-4 w-4 text-white group-hover:scale-110 transition-transform">
								<path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path>
								<path d="m10 15 5-3-5-3z"></path>
							</svg></a><a href="https://www.instagram.com/ziadadc/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center hover:bg-white/20 transition-all group" aria-label="Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram h-4 w-4 text-white group-hover:scale-110 transition-transform">
								<rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
								<path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
								<line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
							</svg></a><a href="https://www.linkedin.com/company/ziadadc/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center hover:bg-white/20 transition-all group" aria-label="LinkedIn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin h-4 w-4 text-white group-hover:scale-110 transition-transform">
								<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
								<rect width="4" height="12" x="2" y="9"></rect>
								<circle cx="4" cy="4" r="2"></circle>
							</svg>
						</a>
						<a href="https://x.com/ziadadc" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center hover:bg-white/20 transition-all group" aria-label="X (Twitter)">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter h-4 w-4 text-white group-hover:scale-110 transition-transform">
								<path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
							</svg>
						</a>
						<a href="https://www.tiktok.com/@ziadadc" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg fill-white/10 bg-white/10 flex items-center justify-center text-white hover:text-white hover:bg-white/20 transition-all group" aria-label="TikTok">
							<svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
								<path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z"></path>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="border-t border-white/10" style="border-top-style:solid;">
			<div class="ast-container py-6">
				<p class="text-center text-white/60 text-sm mb-0">Copyrights © 2026 Ziada DC - Designed and Developed by <a href="https://arqamweb.com" target="_blank" rel="noopener noreferrer" class="text-white hover:underline">Arqam Web</a></p>
			</div>
		</div>
	</div>
</footer>
<?php
astra_content_after();

astra_footer_before();

astra_footer();

astra_footer_after();
?>
</div><!-- #page -->
<?php
astra_body_bottom();
wp_footer();
?>
</body>

</html>