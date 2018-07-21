<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
	
		<input type="hidden" name="search" value="student">
		<input type="text" class="search_input" value="<?php _e('Find Stock Photos, Vectors and more....', 'stocky'); ?>" name="s" onfocus="if (this.value == '<?php _e('Find Stock Photos, Vectors and more....', 'stocky'); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('Find Stock Photos, Vectors and more....', 'stocky'); ?>';}" />
		<input type="hidden" id="searchsubmit" value="Search" />
		<input type="hidden" name="post_type" value="download" />
	</div>
	<a class="search-ttoggle" href="#"><div class="search-bbbar"></div></a>

	<div class="search-options"> 
		
		
		
	<div class="search-inner"> 
		<div class="search-type"> 
			<input name="searchtype" value="Photos" id="photos" type="radio" /> 
			<label for="photos">Photos</label> 
			<input name="searchtype" value="Vector graphics" id="vector" type="radio" /> 
			<label for="vector">vector graphics</label> 
		</div>
		<div class="search-dddd"> 
			<input name="searchdddd" value="horizontacl" id="horizontacl" type="radio" /> 
			<label for="horizontacl">horizontacl</label>  
			<input name="searchdddd" value="vertical" id="vertical" type="radio" /> 
			<label for="vertical">vertical</label>
		</div>
		<select name="searchcat" id="">
			<option selected value="">select Category</option>
			<?php $ddd =  get_terms('download_category');
			foreach($ddd as $ddddd): ?>
			<option value="<?php echo $ddddd->name; ?>"><?php echo  $ddddd->name; ?></option>
			<?php endforeach; ?>
			
		</select>
		<div class="dimenstion"> 
			<input name="height" type="text" placeholder="height" />
			<input name="width" type="text" placeholder="width" />
		</div>
		
		
		<div class="search-color"> 
		
		
			<input value="red" type="radio" name="color" id="red" />
			<label for="red"><span class="red"></span></label>

			<input value="green" type="radio" name="color" id="green" />
			<label for="green"><span class="green"></span></label>

			<input value="yellow" type="radio" name="color" id="yellow" />
			<label for="yellow"><span class="yellow"></span></label>

			<input value="olive" type="radio" name="color" id="olive" />
			<label for="olive"><span class="olive"></span></label>

			<input value="orange" type="radio" name="color" id="orange" />
			<label for="orange"><span class="orange"></span></label>

			<input value="teal" type="radio" name="color" id="teal" />
			<label for="teal"><span class="teal"></span></label>

			<input value="blue" type="radio" name="color" id="blue" />
			<label for="blue"><span class="blue"></span></label>

			<input value="violet" type="radio" name="color" id="violet" />
			<label for="violet"><span class="violet"></span></label>

			<input value="purple" type="radio" name="color" id="purple" />
			<label for="purple"><span class="purple"></span></label>

			<input value="pink" type="radio" name="color" id="pink" />
			<label for="pink"><span class="pink"></span></label>
			
			
			
			
			<input value="pink" type="radio" name="color" id="pink" />
			<label for="pink"><span class="pink1"></span></label>
			
			<input value="pink" type="radio" name="color" id="pink" />
			<label for="pink"><span class="pink2"></span></label>
			
			<input value="pink" type="radio" name="color" id="pink" />
			<label for="pink"><span class="pink3"></span></label>
			
			<input value="pink" type="radio" name="color" id="pink" />
			<label for="pink"><span class="pink4"></span></label>
			
			<input value="pink" type="radio" name="color" id="pink" />
			<label for="pink"><span class="pink5"></span></label>
			
			<input value="pink" type="radio" name="color" id="pink" />
			<label for="pink"><span class="pink6"></span></label>
			
			
		</div>

		</div>



	</div>
	
	
	<input class="submitform" type="submit" value="Search" />
	
	
	
	
</form>

