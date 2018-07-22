<?php
/*
	Template Name: Vectors
*/
get_header('vector'); ?>

		<?php if ( is_active_sidebar( 'stocky_home' ) ) { ?>
		<?php $sb_count = wp_get_sidebars_widgets(); ?>
		<div id="home_widgets" class="<?php if (count( $sb_count['stocky_home']) <= '4') { ?>widget_count<?php dcs_count_sidebar_widgets( 'stocky_home' );?><?php } else { ?>widget_count_overflow<?php } ?> clearfix">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('stocky_home') ) : endif; ?>
		</div>
		<?php } ?>


		<section id="image_grid" class="image_grid_full clearfix">

			<?php dcs_edd_downloads(); ?>

		</section>

	</div><?php // end .container, begins in header.php ?>
</section><?php // end #content, begins in header.php ?>

<?php if ('' != (of_get_option('cta_content'))) { ?>

<section id="home_cta" class="home_cta wrapper" style="background-image: url(<?php echo of_get_option('call-background-image');  ?>);">
	<div class="blur-bg">
	<div class="container clearfix">
		<?php echo stripslashes(of_get_option('cta_content')); ?>
	</div>
	</div>
</section>

<?php } ?>



<?php if ('' != (of_get_option('cta_content_dark'))) { ?>

<section id="home_cta_dark" class="home_cta_dark wrapper">
	<div class="container clearfix">
		<?php echo stripslashes(of_get_option('cta_content_dark')); ?>
	</div>
</section>

<?php } ?>




<!--

<?php /* START LATEST POSTS */
$stocky_query = new WP_Query( array(
	'orderby'      => 'desc',
	'post_type'    => 'post',
	'post_status'  => 'publish',
	'posts_per_page' => '3',
	'ignore_sticky_posts' => 1
));
if ( $stocky_query->have_posts() ) : ?>

<section id="home_latest_posts" class="wrapper">
	<div class="container clearfix">

		<?php while ( $stocky_query->have_posts() ) : $stocky_query->the_post(); global $more; $more = 0; ?>

			<?php get_template_part( 'loop', 'latestpost' ); ?>

		<?php endwhile; ?>

	</div>
</section> -->

<?php endif; wp_reset_query(); /* END LATEST POSTS */ ?>

<?php get_footer(); ?>