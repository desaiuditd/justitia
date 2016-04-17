<?php
/**
 * Created by PhpStorm.
 * User: udit
 * Date: 17/04/16
 * Time: 08:46
 */
get_header();

?>

<?php //get_template_part('page-parts/general-title-section'); ?>

<?php get_template_part('page-parts/general-before-wrap'); ?>

<?php $extra_classes = get_cfield('centered_text') == 1 ? ' text-center' : ''; ?>

	<!-- Begin Article -->
<article <?php post_class($extra_classes); ?>>
<!--	<div class="j-custom-search">-->
<!--		--><?php //echo do_shortcode('[bbp-search-form]'); ?>
<!--	</div>-->

	<h3>Story Tags</h3>
	<?php echo do_shortcode( '[bbp-topic-tags]' ); ?>

	<br /><br />
	<h3>Recent Stories</h3>
	<div class="j-hide-search-form">
		<?php echo do_shortcode( '[bbp-topic-index]' ); ?>
	</div>
</article>

<?php get_template_part('page-parts/general-after-wrap'); ?>

<?php get_footer(); ?>

