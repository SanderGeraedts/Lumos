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

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav id="site-navigation" class="main-navigation" role="navigation">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
        <ul class="social-media-icons">
            <a href="https://www.youtube.com/channel/UCuneSt2ocQCjdEWOEd3lx3A" target="_blank" class="social-icon"><i
                        class="fa fa-youtube"></i></a>
            <a href="https://www.linkedin.com/company/kien-innovatiemeesters" target="_blank" class="social-icon"><i
                        class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/kien_innovatie" target="_blank" class="social-icon"> <i
                        class="fa fa-instagram"></i></a>
        </ul>
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
