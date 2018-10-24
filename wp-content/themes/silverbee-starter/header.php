<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Silverbee_Starter
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHv4VvUMyehNIvq5HAFMfTHim3Pswp_p4"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav id="site-navigation" class="main-navigation" role="navigation">
    <div id="mySidenav" class="sidenav">
        <div class="inner">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
            <ul class="social-media-icons">
                <a href="https://www.facebook.com/Lumos-Eindhoven-Quidditch-754006641437774/" class="social-icon"><i
                            class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/lumoseindhoven/" class="social-icon"> <i
                            class="fab fa-instagram"></i></a>
            </ul>
        </div>
    </div>

</nav>
<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#content"><?php esc_html_e( 'Skip to content', 'silverbee-starter' ); ?></a>

    <header id="masthead" class="site-header container" role="banner">
        <div class="row">
            <div class="site-branding col-md-4">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/dist/img/lumos-logo.jpg'; ?>"
                         alt="Lumos logo"
                         class="logo">
                    <span class="logo-text">Lumos</span>
                </a>
            </div><!-- .site-branding -->

            <nav id="full-navigation"
                 class="full-navigation col-md-8"
                 role="navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
            </nav><!-- #site-navigation -->
            <button class="hamburger" onclick="openNav()">
                <span class="fa fa-bars"></span>
            </button>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
