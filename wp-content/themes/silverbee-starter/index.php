<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Silverbee_Starter
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="archive">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
							<?php
							if ( have_posts() ) : ?>
                                <div class="container">
									<?php
									/* Start the Loop */
									while ( have_posts() ) : the_post(); ?>
                                        <div class="row post-in-archive">
                                            <div class="col-md-5"><?php the_post_thumbnail() ?></div>
                                            <div class="col-md-7">
                                                <div class="entry-meta">
		                                            <?php silverbee_starter_posted_on(); ?>
                                                </div><!-- .entry-meta -->
                                                <h2>
                                                    <a href="<?php the_permalink(); ?>" style="font-size: 16pt;">
														<?php the_title(); ?>
                                                    </a>
                                                </h2>
                                                <div class="entry-description" style="font-weight: 600;">
													<?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        </div>
									<?php endwhile; ?>
                                </div>
								<?php the_posts_navigation(array(
									"next_text" => "<i class=\"fas fa-chevron-left\"></i> Nieuwere berichten",
									"prev_text" => "Oudere berichten <i class=\"fas fa-chevron-right\"></i>"
								)); ?>
							<?php else :
								get_template_part( 'template-parts/content', 'none' );
							endif; ?>
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
