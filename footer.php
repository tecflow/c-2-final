<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package final
 */

?>

<?php
$FooterLogo = get_field('footer_logo');
$InfoPlace = get_field("info_place");
$SocialAndApps = get_field("social_and_apps");
$socialLinks = get_field('social_links');

// ----------------------------

$footer_logo = $FooterLogo['footer_logo_image']; 
$footer_text = $FooterLogo['bla_bla'];

$first = $InfoPlace['first']; 
$second = $InfoPlace['second']; 
$third = $InfoPlace['third'];

$facebook = $SocialAndApps['fb']; 
$instagram = $SocialAndApps['insta']; 
$twitter = $SocialAndApps['twitter']; 
$discover_text = $SocialAndApps['discover'];

$first_link = $socialLinks['first_link'];
$second_link = $socialLinks['second_link'];
$third_link = $socialLinks['third_link'];

// echo "<pre>";
// var_dump($FooterLogo);
// echo "</pre>";
?>

	<footer id="colophon" class="site-footer footer-section">
		
		<div class="logo-blabla">
			<img src="<?php echo $footer_logo;?>" alt="">
			<p><?php echo $footer_text;?></p>
		</div>

		<div class="footer-menu">
			<div class="footer-menu-insides">
				<p><?php echo $first;?></p>
				<div class="ft-menu1">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'company-menu',
								'menu_id'        => 'company-menu',
							)
						);
					?>
				</div>
			</div>

			<div class="footer-menu-insides">
				<p><?php echo $second;?></p>
				<div class="ft-menu2">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'contact-menu',
								'menu_id'        => 'contact-menu',
							)
						);
					?>
				</div>
			</div>

			<div class="footer-menu-insides">
				<p><?php echo $third;?></p>
				<div class="ft-menu3">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'more-menu',
								'menu_id'        => 'more-menu',
							)
						);
					?>
				</div> 
			</div>
		</div>

		<div class="app-socials">
			<div class="socials">
				<div>
					<a href="<?php echo $first_link;?>"><img src="<?php echo $facebook;?>" alt=""></a>
				</div>
				<div>
					<a href="<?php echo $second_link;?>"><img src="<?php echo $instagram;?>" alt=""></a>
				</div>
				<div>
					<a href="<?php echo $third_link;?>"><img src="<?php echo $twitter;?>" alt=""></a>
				</div>
			</div>
			<p><?php echo $discover_text;?></p>
			<div class="apps">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Play Store.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Google Play.png" alt="">
			</div>
		</div> 

		

	</footer><!-- #colophon -->
	<p class="finish">All rights reserved@travelgoo.co</p>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
