

<footer>

	<section class="upper-footer">
		<div class="footer-form">
			<span class="the-headline">Make An Appointment</span>
			<div class="split-line"></div>
			<p>Call 
				<?php if(have_rows('locations', 'option')): ?>
					<?php while(have_rows('locations', 'option')): the_row(); ?>
						<a href="<?php the_sub_field('phone_link', 'option'); ?>" class="track-outbound" data-label="Phone - Footer">
							<?php the_sub_field('phone', 'option'); ?></a>
						<?php endwhile; ?>
					<?php endif; ?>
				or send us a message</p>
				<?php echo do_shortcode('[seaforms name="contact-us"]'); ?>
			</div>
		</section> 


		<section class="footer-logos">
			<?php if(have_rows('footer_logos', 'option')): ?>
				<ul>
					<?php while(have_rows('footer_logos', 'option')): the_row(); ?>
						<li>
							<img data-src="<?php the_sub_field('logo'); ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" alt="logos">
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</section>


		<section class="footer-location">
			<div class="footer-address-box">
				<a href="<?php bloginfo('url'); ?>" class="footer-logo">
					<?php //inline_svg('logo'); ?>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/images/svg/logo.svg" alt="Logo" class="b-lazy">
				</a>
				<?php if(have_rows('locations', 'option')): ?>
					<?php while(have_rows('locations', 'option')): the_row(); ?>
						<div class="the-loc">
							<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound" data-label="Address - Footer" target="_blank"  rel="noopener">
								<!-- <?php the_sub_field('name', 'option'); ?><br> -->
								<?php the_sub_field('address', 'option'); ?><br /> <?php the_sub_field('city', 'option'); ?> 
							</a>
							<div class="loc-phone">
								Phone <a href="<?php the_sub_field('phone_link', 'option'); ?>" class="track-outbound" data-label="Phone - Footer">
									<?php the_sub_field('phone', 'option'); ?></a>
								</div>
								<div class="loc-phone">
								Text <a href="<?php the_sub_field('phone_link', 'option'); ?>" class="track-outbound" data-label="Phone - Footer">
										<?php the_sub_field('phone', 'option'); ?></a>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						<div class="footer-social">
							<a href="<?php the_field('facebook','options'); ?>" target="_blank" rel="noopener" title="facebook" aria-label="facebook"><i class="fab fa-facebook"></i></a>
							<a href="<?php the_field('twitter','options'); ?>" target="_blank" rel="noopener" title="twitter" aria-label="twitter"><i class="fab fa-twitter"></i></a>
							<a href="<?php the_field('instagram','options'); ?>" target="_blank" rel="noopener" title="instagram" aria-label="instagram"><i class="fab fa-instagram"></i></a>
							<a href="<?php the_field('youtube','options'); ?>" target="_blank" rel="noopener" title="youtube" aria-label="youtube"><i class="fab fa-youtube"></i></a>
							<a href="<?php the_field('yelp','options'); ?>" target="_blank" rel="noopener" title="yelp" aria-label="yelp"><i class="fab fa-yelp"></i></a>
							<a href="<?php the_field('health','options'); ?>" target="_blank" rel="noopener" title="healthtrades" aria-label="healthtrades"><i class="fas fa-user-md"></i></a>
						</div>
						<?php if(have_rows('locations', 'option')): ?>
							<?php while(have_rows('locations', 'option')): the_row(); ?>
								<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound button" data-label="Address - Footer" target="_blank"  rel="noopener">
									Map & Directions
								</a>

							<?php endwhile; ?>
						<?php endif; ?>
					</div> 
				</section>

				<section class="lower-footer">
					<section class="footer-nav">
						<?php wp_nav_menu(array('menu' => 'Main'));?>
					</section>
					<div class="footer-disclaimer">
						Disclaimer: The information throughout this dentistry website is not intended to be taken as medical advice. The information provided by Dr. Jarrod Cornehl, Dr. Peter Fredrickson, and the Dental Studio is intended to provide general information regarding cosmetic dentistry, porcelain veneers, routine dental cleanings and exams, pediatric dentistry, TMJ treatment, dental crowns and bridges, restorative dentistry, BOTOX and other facial fillers, and more for residents of San Francisco, Daly City, South San Francisco, San Rafael, Oakland, Berkeley, Richmond, and nearby locations in the Bay Area, California. This website is not intended for viewing or usage by European Union citizens. If you are interested in finding out more, please contact our dental office today for a personal consultation. Read our ADA compliance disclosure.
					</div>
					<div class="reviews_markup"><?php do_action('reviews_markup'); ?></div>
					<div class="copyright">Copyright &copy; <?=date("Y")?> <?bloginfo('title');?>. All rights reserved | <a href="#" class="show-disc">Disclaimer</a> |<a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a> | <a href="<?php bloginfo('url'); ?>/sitemap/" title="Sitemap">Sitemap</a> </div>  
					<div class="rm-sig"><a href="<?php the_field('rm_footer_link', 'options'); ?>" target="_blank" rel="noopener" title="<?php the_field('rm_footer_text', 'options'); ?>"><?php the_field('rm_footer_text', 'options'); ?></a> by <a href="https://www.rosemontmedia.com/" title="Rosemont Media" target="_blank" rel="noopener"><?php inline_svg('rm-logo'); ?></a></div>

				</section>  

			</footer>

			<?php wp_footer();?>


<script id="__bs_script__">//<![CDATA[
document.write("<script async src='http://HOST:35730/browser-sync/browser-sync-client.js?v=2.18.8'><\/script>".replace("HOST", location.hostname));
//]]></script>


</body>
</html>