<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
				<div class="entry-content">
					

					<?php 

					$class = isset( $_GET['class'] ) ? $_GET['class'] : '';
					$section = isset( $_GET['section'] ) ? $_GET['section'] : '';
					$name = isset( $_GET['student'] ) ? $_GET['student'] : '';

					$student = new WP_Query(array(
						'post_type' => 'softtechit_students',
						'posts_per_page' => -1,
						's' => $name,
						'meta_query' => array(
							'relation' => 'AND',
							array(
								'key' => '_student_er_class',
								'value' => $class,
								'compare' => 'LIKE'
							), 
							array(
								'key' => '_student_er_section',
								'value' => $section,
								'compare' => 'LIKE'
							)
						)
					));

					if($student->have_posts()) : 

					while($student->have_posts()) : $student->the_post(); ?>

						<h3><?php the_title(); ?></h3>
						<hr>
					<?php endwhile; 

					else :

						echo "<h3>No Students Found</h3>";

					endif;


					?>




				</div><!-- .entry-content -->

			</article><!-- #post-## -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>