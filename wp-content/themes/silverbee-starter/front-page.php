<?php
/**
 * The template for displaying the front-page
 *
 * @package Silverbee_Starter
 */

$posts = get_posts( array(
	'posts_per_page' => 3
) );

$colors = array( "red", "white", "black" );

get_header(); ?>
    <style>
        .banner {
            background-image: url("<?php echo get_template_directory_uri() . '/dist/img/banner-pic.jpg'; ?>");
        }
    </style>
    <div class="banner">
    </div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="front-page">
                <div class="container-fluid">
                    <div class="row">
						<?php foreach ( $posts as $key => $post ): ?>
                            <div class="col-md-4 post-homepage">
                                <div class="outer"
                                     style="background-image: url('<?php echo get_the_post_thumbnail_url(
									     $post,
									     'large'
								     ); ?>')">
                                    <div class="inner <?php echo $colors[ $key ]; ?>">
                                        <h2>
											<?php echo $post->post_title ?>
                                        </h2>
                                        <div class="cta">
                                            <a href="<?php echo get_permalink( $post ); ?>">Lees meer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<?php endforeach; ?>
                    </div>
                </div>
            </section><!-- .front-page -->
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
