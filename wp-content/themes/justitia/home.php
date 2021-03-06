<?php
/**
 * The generic template file
 *
 * @package rtPanel
 *
 * @since rtPanel 2.0
 */
get_header();

$rtp_content_grid_class = apply_filters( 'rtp_set_full_width_grid_class', 'large-8 columns rtp-full-width-grid' );
$rtp_content_class = ' rtp-content-section ' . $rtp_content_grid_class . ' rtp-blog-post ';
?>

	<section id="content" role="main" class="<?php echo esc_attr( $rtp_content_class ); ?>">
		<?php rtp_hook_begin_content(); ?>

		<article <?php post_class( 'clearfix rtp-post-box' ); ?>>

			<?php echo do_shortcode('[bbp-search-form]'); ?>

			<h3>Story Tags</h3>
			<?php echo do_shortcode( '[bbp-topic-tags]' ); ?>

			<br /><br />
			<h3>Recent Stories</h3>
			<div class="j-hide-search-form">
				<?php echo do_shortcode( '[bbp-topic-index]' ); ?>
			</div>

		</article>

		<?php rtp_hook_end_content(); ?>
	</section><!-- #content -->

<?php (rtp_get_sidebar_id() === 0) ? '' : rtp_hook_sidebar(); ?>

<?php
get_footer();
