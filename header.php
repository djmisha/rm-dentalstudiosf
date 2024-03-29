<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="maximum-scale=5.0, user-scalable=yes, width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title><?php wp_title(""); ?></title>

	<?php if(!is_404()): ?>
		<?php miniCSS::url( 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700&display=swap' ); ?>
	<?php endif; ?>
	
	<?php wp_head()?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-104708160-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-104708160-1');
	</script>


	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '308197076785806');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=308197076785806&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	
	

</head>

<?php bodyClass(); ?>

<a href="#skiptomaincontent" style="display:none;">Skip to main content</a>

<header class="site-header <?php echo is_front_page() ? 'front-header' : 'int-header'; ?>" <?php get__header__image(); ?> >

	<div class="nav-bar">
		<div class="menu-trigger">
			<div class="hamburger"></div>
			<div class="hamburger"></div>
			<div class="hamburger"></div>
			<div class="trigger-text">MENU</div>
		</div>
		<section>
			<div class="nav-logo">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/images/svg/logo.svg" alt="Logo">
				</a>
			</div>
			<div class="two-up-nav">
				<div class="nav-bar-phones">
					<?php if(have_rows('locations', 'option')): ?>
						<?php while(have_rows('locations', 'option')): the_row(); ?>
							<a href="<?php the_sub_field('phone_link'); ?>" class="head-phone track-outbound" data-label="Phone - Header"><i class="fas fa-phone-volume"></i> Call <span><?php the_sub_field('phone'); ?></span></a>
							<a href="<?php the_sub_field('text_link'); ?>" class="head-text track-outbound" data-label="Phone - Header"><i class="fas fa-comment-alt-lines"></i> Text <span><?php the_sub_field('text'); ?></span></a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div> 
				<nav>
					<?php wp_nav_menu( array(
						'menu' 		=> 'Main',
						'container_class' => 'menu-wrap menu-is-closed',
						'menu_id'	=> 'menu-main',
						'menu_class' => 'main-menu',
					)); ?>
				</nav> 
			</div>
		</section>
	</div>

</header> 

<?php if(!is_front_page() ): // Inside Page and H1 ?>
	<section class="page-title">
		<?php if(is_front_page()): ?>
		<h1><?php // do nothing if homepage  ?></h1>
		<?php elseif(this_is('gallery-case')): ?>
		<?php $category_title =  get_the_title($post->in_cat_ID); ?>
		<h1><?//php echo $category_title ?> Smile Gallery</h1>
		<?php elseif(this_is('gallery-child')): ?>
		<?php $category_title =  get_the_title($post->in_cat_ID); ?>
		<h1 id="smilegallery"><?php //echo $category_title ?> Smile Gallery</h1>
		<?php elseif(this_is('gallery')): ?>
		<h1>Smile Gallery</h1>
		<?php elseif (is_search()): ?>
		<div class="heading-text">Search Results</div>
		<?php elseif (is_home() or is_archive()): ?>
		<div class="heading-text">Blog</div>
		<?php elseif (is_single()): ?>
		<div class="heading-text">Blog</div>
		<?php else: ?> 
		<h1><?the_title();?></h1>
		<?php endif; ?>
	<div class="split-line"></div>
	</section>
<?php endif; ?>

