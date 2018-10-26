<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Silverbee_Starter
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', get_post_format() );

								the_post_navigation(array(
								        "next_text" => "<i class=\"fas fa-chevron-left\"></i> %title",
								        "prev_text" => "%title <i class=\"fas fa-chevron-right\"></i>"
                                ));

							endwhile; // End of the loop.
							?>
                        </div>
                        <div class="col-md-4">
							<?php get_template_part( 'template-parts/sidebars/sidebar', 'page' ); ?>
                        </div>
                    </div>
                </div>
            </div>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
