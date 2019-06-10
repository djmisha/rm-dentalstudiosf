<?php
	// Template Name: Home
?>

<?php get_header()?>


<div class="welcome-parallax will-parallax parallax-welcome b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-welcome.jpg">
	<div class="welcome" id="skiptomaincontent">
		<div class="welcome-cta">
			<div class="bg-header-cruve-home-mobile"></div>
			<div class="welcome-logo">
			<h1><a href="<?php bloginfo('url'); ?>"><div> <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Designer Smiles"> </div></a></h1> </div>
			<h2><?php the_field('welcome_headline'); ?></h2>
			<?php the_field('welcome_content'); ?>
			<a href="<?php bloginfo('url'); ?>/contact-us/" class="button" rel="nofollow" rel="nofollow">Make an Appointment <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/icon-cal.png" alt="icon"></a>
			<a href="<?php the_field('gallery_button'); ?>" class="button" rel="nofollow" rel="nofollow">Smile Gallery <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/icon-photo.png" alt="icon"></a>
		</div>
	</div>
</div> 

<section class="home-aboutus b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/icon-dlogo.png">
	<h2><?php the_field('about_headline'); ?></h2>
	<?php the_field('about_content'); ?>
</section>

<section class="home-doctor b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-curves-red.jpg">
	<div class="split-line"></div>
	<div class="doc-content">
		<img data-src="<?php bloginfo('template_directory'); ?>/images/img-doctors.png" alt="doctor" class="doc-image b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
		<div class="doc-quote">
			<?php the_field('doctor_cont'); ?>
		</div>
	</div>
</section>



<div class="home-featured-procedures b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-curves-yellow.jpg">
	<?php if(have_rows('featured_procedures_1')): ?>
		<?php $count = 3; ?>
		<ul>
			<?php while(have_rows('featured_procedures_1')): the_row(); ?>
				<li style="background-image: url('<?php the_sub_field('image'); ?>');" class="wow fadeIn" data-wow-offset="20" data-wow-delay=".<?echo $count; ?>0s" data-wow-duration=".5s" >
					<div class="proced-name">
						<a href="<?php the_sub_field('procedure_link'); ?>">
							<span><?php the_sub_field('headline'); ?></span>
						</a>
					</div>
				</li>
				<?php $count++; ?>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</div>



<?php get_footer()?>