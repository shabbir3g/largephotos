		<?php if (!is_page_template( 'page-home.php' )) { // show these if we're not on the home page ?>

			</div><?php // end .container, begins in header.php ?>
		</section><?php // end #content, begins in header.php ?>

		<?php } if (!is_page_template( 'page-login.php' )) { // don't show this if we're on a login screen ?>

		<footer id="footer" class="wrapper">
			<div class="container clearfix">

				<?php if ( is_active_sidebar( 'stocky_footer' ) ) { ?>
				<?php $sb_count = wp_get_sidebars_widgets(); ?>
				<div id="footer_widgets" class="<?php if (count( $sb_count['stocky_footer']) <= '4') { ?>footer_widget_count<?php dcs_count_sidebar_widgets( 'stocky_footer' );?><?php } else { ?>footer_widget_overflow<?php } ?> clearfix">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('stocky_footer') ) : endif; ?>
				</div>
				<?php } ?>

				<div id="post_footer">

					<?php if ((of_get_option('twitter') != '') || (of_get_option('facebook') != '') || (of_get_option('google') != '') || (of_get_option('flickr') != '') || (of_get_option('vimeo') != '') || (of_get_option('youtube') != '') || (of_get_option('tumblr') != '') || (of_get_option('pinterest') != '') || (of_get_option('linkedin') != '') || (of_get_option('instagram') != '') )  { ?>
					<div id="socnets_wrap">
						<div id="socnets">
							<?php if (of_get_option('twitter') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('twitter')); ?>" title="Twitter"><i class="fa fa-twitter"></i></a>
							<?php } if (of_get_option('facebook') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('facebook')); ?>" title="Facebook"><i class="fa fa-facebook"></i></a>
							<?php } if (of_get_option('google') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('google')); ?>" title="Google+"><i class="fa fa-google"></i></a>
							<?php } if (of_get_option('flickr') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('flickr')); ?>" title="Flickr"><i class="fa fa-flickr"></i></a>
							<?php } if (of_get_option('tumblr') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('tumblr')); ?>" title="Tumblr"><i class="fa fa-tumblr"></i></a>
							<?php } if (of_get_option('vimeo') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('vimeo')); ?>" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
							<?php } if (of_get_option('youtube') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('youtube')); ?>" title="YouTube"><i class="fa fa-youtube"></i></a>
							<?php } if (of_get_option('pinterest') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('pinterest')); ?>" title="Pinterest"><i class="fa fa-pinterest"></i></a>
							<?php } if (of_get_option('linkedin') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('linkedin')); ?>" title="Linkedin"><i class="fa fa-linkedin"></i></a>
							<?php } if (of_get_option('instagram') != '') { ?>
							<a href="<?php echo stripslashes(of_get_option('instagram')); ?>" title="Instagram"><i class="fa fa-instagram"></i></a>
							<?php } ?>
						</div>
						<div class="clear"></div>
					</div>
					<?php } ?>

					<div id="footer_copy">
					
					
					
					<?php if ('' != (of_get_option('footer_logo'))) { ?>
						<div class="fooer-logo"> 
							<a href="<?php echo home_url(); ?>"><img src="<?php echo stripslashes(of_get_option('footer_logo')); ?>" alt="" /></a>
						</div>
						<?php } ?>
						
						
						<?php if ('' != (of_get_option('footer_copyrighttext'))) { ?>

						<section >
							<div class="container clearfix">
								<?php echo stripslashes(of_get_option('footer_copyrighttext')); ?>
							</div>
						</section>
						
					<?php } ?>
						
						
					


					
					<!--	&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>
						<span id="credit_space">&mdash;</span>
						<?php if (of_get_option('give_credit') == '1') { ?>

							<?php $string = sprintf( __('Built with <a href="%1$s">Stocky</a> and <a href="%2$s">Easy Digital Downloads</a>', 'stocky'), 'http://themes.designcrumbs.com', 'http://easydigitaldownloads.com' ); echo $string; ?>

						<?php } else { ?>

							<?php echo bloginfo('description'); ?>

						<?php } ?> -->
						
						
						
						
					</div>

				</div>

			</div>
		</footer>

		<?php } /* end if is page-login.php */ ?>

	</section><?php // end #site_wrap ?>
	<?php wp_footer(); //leave for plugins ?>
	</body>
</html>