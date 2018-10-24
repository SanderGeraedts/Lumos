<?php
/**
 * Created by PhpStorm.
 * User: sander
 * Date: 13/09/2018
 * Time: 14:39
 */

$location        = get_field( 'training_location', 'option' );
$info_text_upper = get_field( 'training_info_upper', 'option' );
$info_text_lower = get_field( 'training_info_lower', 'option' );
?>
<aside id="secondary" class="widget-area" role="complementary">
    <h2>Geïnteresseerd?</h2>
    <div class="training-info">
		<?php echo $info_text_upper; ?>
    </div>
	<?php if ( ! empty( $location ) ): ?>
        <div class="acf-map">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>"
                 data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
	<?php endif; ?>
    <div class="training-info">
		<?php echo $info_text_lower; ?>
    </div>
	<?php if ( $post->post_name !== 'doe-mee' ): ?>
        <div class="cta-button">
            <a href="<?php echo site_url() . '/doe-mee' ?>">Doe mee</a>
        </div>
	<?php endif; ?>
</aside>