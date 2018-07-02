<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Silverbee_Starter
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="page">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <?php get_sidebar(); ?>
                        </div>
                        <div class="col-6">
	                        <?php
	                        while ( have_posts() ) : the_post();

		                        get_template_part( 'template-parts/content', 'page' );

	                        endwhile; // End of the loop.
	                        ?>
                        </div>
                    </div>
                </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
