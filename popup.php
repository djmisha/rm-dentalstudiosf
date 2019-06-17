<?php require( '../../../wp-load.php' );?>
<?php 
	// Popup
	
	$url = urldecode($_GET['url']);
	
?>
	
	<style>
		
		#notice-body {
			width: 100%;
			height: 100%;
			display:inline-block;
		}
		
		#notice-body-everything {
			/*max-width: 500px;*/
			height: auto;
			padding:20px;
			display:inline-block;
		}
		
		#notice-body-everything h2 {
			text-transform: uppercase;
			font-size: 40px;
			margin:20px 0 30px 0;
			color: #1c90c2;
		}
		
		#notice-body p {
			margin:0 0 30px 0;
			color: #0b1d53;
			/*font-weight: bold;*/
			/*font-size: 17px;*/
		}
		
		#notice-body-everything #buttons {
			display: block;
			text-align: center;
			box-shadow: none;
		}

		#notice-body-everything #buttons a{
			/*box-shadow:1px 1px 1px 0px #333;*/
			/*font-weight: bold;*/
			font-size: 20px;
		}
	</style>


<div id="notice-body">
	<div id="notice-body-everything">
		<div class="popup-up-spliiter">
			<div class="popup-up-image">
				<img src="<?php bloginfo('template_directory'); ?>/images/popup.jpg" alt="popup">
			</div>
			<div class="popup-up-content">
				<?php the_field('special', 'option'); ?>
			</div>
		</div>
		<!-- <h2>Notice</h2> -->
		<!-- <p>The photo gallery page you have requested may contain nudity. If you are at least 18 years of age and wish to continue, please click the 'OK' button now.</p> -->
		<!-- <div id="buttons"><a href="javascript:parent.jQuery.fancybox.close();" class="popupbtn button">OK</a></div> -->
	</div>
</div>