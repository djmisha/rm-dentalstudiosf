<?php
	// Template Name: Home
?>

<?php get_header()?>


<div class="welcome-parallax will-parallax parallax-welcome b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-welcome.jpg">
	<div class="welcome" id="skiptomaincontent">
		<div class="welcome-cta">
			<h2><?php the_field('welcome_headline'); ?></h2>
			<h3><?php the_field('welcome_subheadline'); ?></h3>
			<div class="button" rel="nofollow">Book Online</div>
		</div>
	</div>
</div> 

<section class="home-doctor">
	<h2>Meet Our Dentists</h2>
	<div class="split-line"></div>
	<div class="doc-content">
		<?php if(have_rows('doctors')): ?>
			<ul>
				<?php while(have_rows('doctors')): the_row(); ?>
					<li>
						<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('link_text'); ?>">
						<h3><?php the_sub_field('name'); ?></h3>
						<?php the_sub_field('content'); ?>
						<a href="<?php the_sub_field('link'); ?>" class="button" rel="nofollow"><?php the_sub_field('link_text'); ?></a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>

<div class="home-featured-procedures">
	<?php if(have_rows('featured_procedures')): ?>
		<?php $count = 3; ?>
		<ul>
			<?php while(have_rows('featured_procedures')): the_row(); ?>
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