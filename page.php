<?php get_header(); ?>

	<div class="posts-wraps" id="page">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part('loop','page'); ?>

		<?php endwhile; endif; ?>

	</div><!-- end .posts-wrap -->


<?php get_footer(); ?>