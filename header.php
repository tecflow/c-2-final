<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package final
 */

?>

<?php
$hello = get_field('hello_text');
$big_hello_text = $hello["big_hello_text"];
$small_hello_text = $hello["small_hello_text"];
$button_text = $hello["button_text"];

// echo '<pre>';
// var_dump($hello);
// echo '</pre>';
?>

<?php
$big_hello_text  = isset($hello["big_hello_text"]) ? $hello["big_hello_text"] : 'Default Heading';
$small_hello_text = isset($hello["small_hello_text"]) ? $hello["small_hello_text"] : 'Default subheading';
$button_text = isset($hello["button_text"]) ? $hello["button_text"] : 'Subscribe Now';
?>

<?php
$hidden_templates = array('footer-buttons-page.php', 'discover-page.php', 'destinations-page.php', 'subcribe-page.php', );

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<?php 
	if (!is_page_template($hidden_templates)) :
	?>
		<header id="masthead" class="site-header">
			<div style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.81) 0%, rgba(72, 72, 72, 0) 31.25%, rgba(158, 158, 158, 0) 77.6%, #FFFFFF 85.42%),
					url('<?php echo get_template_directory_uri(); ?>/assets/images/stefan-stefancik-6whwCHgsMiA-unsplash 1.png');
					background-repeat: no-repeat;
					background-size: cover; 
    				background-position: center">

				<div>
					<?php the_custom_logo(); ?>
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'final' ); ?></button>
						
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
					<div class="header-images">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/clarity_favorite-line.png'); ?>" alt="Favorite">
					
						<a href="#">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/healthicons_ui-user-profile-outline.png'); ?>" alt="Favorite">
						</a>
					</div>

					
				</div>

				<div class="hamburger-menu">
						<input type="checkbox" id="menu">
						<label for="menu">
							<span class="hamburger-menu-icon">&#9776</span>
						</label>
						<div class="sidebar-nav">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu-mobile',
									)
								);
							?>
						</div>
				</div>

				<div class="hello-parts">
					<h1><?php echo $big_hello_text;?></h1>
					<p><?php echo $small_hello_text;?></p>
					<a href="<?php echo site_url('/subscribe-page/'); ?>"><?php echo $button_text;?></a>
				</div>
			</div>	
		</header><!-- #masthead -->
	<?php endif;?>