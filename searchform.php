<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<input type="text" class="search_input" value="<?php _e('Search Posts', 'stocky'); ?>" name="s" onfocus="if (this.value == '<?php _e('Search Posts', 'stocky'); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('Search Posts', 'stocky'); ?>';}" />
		<input type="hidden" class="searchsubmit" value="Search" />
		<input type="hidden" name="post_type" value="post" />
	</div>
</form>