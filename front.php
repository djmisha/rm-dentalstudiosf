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
	<div class="welcome-special">
		<?php the_field('specials_text'); ?>
	</div>
</div>

<section class="about-the-practice">
	<h2><?php the_field('about_headline'); ?></h2>
	<div class="split-line"></div>
	<?php the_field('about_content'); ?>
</section>

<section class="home-featured-procedures">
	<h2>Our Services</h2>
	<div class="split-line"></div>
	<?php if(have_rows('featured_procedures')): ?>
		<ul>
			<?php while(have_rows('featured_procedures')): the_row(); ?>
				<li>
					<a href="<?php the_sub_field('procedure_link'); ?>">
						<div class="featured-icon" style="background-image: url('<?php the_sub_field('image'); ?>');" >
						</div>
						<span><?php the_sub_field('name'); ?></span>
						<p><?php the_sub_field('content'); ?></p>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</section>

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

<?php get_footer()?>