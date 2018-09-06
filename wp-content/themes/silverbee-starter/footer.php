<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Silverbee_Starter
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <section class="footer-contact">
                        <a href="mailto:info@lumoseindhoven.nl"><span class="far fa-envelope"></span> info@lumoseindhoven.nl</a>
                        <a href="tell:+623775102"><span class="fas fa-phone"></span> 06 - 10 54 27 88</a>
                    </section>
                </div>
                <div class="col-md-8">
                    <section class="about-lumos-menu">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer-menu-1',
							'menu_id'        => 'footer-menu-1',
						) );
						?>
                    </section>
                </div>
                <div class="col-md-4">
<!--                    <ul class="social-media-icons">-->
<!--                        <a href="https://www.facebook.com/Lumos-Eindhoven-Quidditch-754006641437774/"-->
<!--                           class="social-icon"><i-->
<!--                                    class="fab fa-facebook-f"></i></a>-->
<!--                        <a href="https://www.instagram.com/lumoseindhoven/" class="social-icon"> <i-->
<!--                                    class="far fa-instagram"></i></a>-->
<!--                    </ul>-->
                </div>
            </div>
        </div>

    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
