<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	$themename = 'stocky';

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath = get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array( "name" =>  __('Basic Settings - W P L O C K E R . C O M', 'stocky'),
						"type" => "heading");

	$options[] = array( "name" => __('Logo Retina Display', 'stocky'),
						"desc" => __('Checking this box will display your logo at half size, making it look crisp on iDevices. Make your logo twice as big as you want it to display if you check this box.', 'stocky'),
						"id" => "retina_logo",
						"std" => "0",
						"type" => "checkbox");

	$options[] = array( "name" =>  __('Logo', 'stocky'),
						"desc" =>  __('Upload your logo.', 'stocky'),
						"id" => "logo",
						"type" => "upload");

	$options[] = array( "name" =>  __('Favicon', 'stocky'),
						"desc" =>  __('The Favicon is the little 16x16 icon that appears next to your URL in the browser. It is not required, but recommended.', 'stocky'),
						"id" => "favicon",
						"type" => "upload");

	$options[] = array( "name" =>  __('Site Layout', 'stocky'),
						"desc" =>  __('Select a layout for the site.', 'stocky'),
						"id" => "layout",
						"std" => "content_left",
						"type" => "images",
						"options" => array(
							'content_right' => $imagepath . '2cl.png',
							'content_left' => $imagepath . '2cr.png',)
						);

	$options[] = array( "name" =>  __('Credit Where Credit Is Due', 'stocky'),
						"desc" =>  __('Checking this box will give credit to the Stocky theme and Easy Digital Downloads in the footer.', 'stocky'),
						"id" => "give_credit",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" =>  __('Keep menu expanded', 'stocky'),
						"desc" =>  __('Checking this box will keep the menu visible by default.', 'stocky'),
						"id" => "expanded_menu",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" =>  __('Footer Settings', 'stocky'),
						"type" => "heading");
						
	$options[] = array( "name" => __('Footer Logo', 'stocky'),
						"desc" => __('Upload Footer Logo here', 'stocky'),
						"id" => "footer_logo",
						"type" => "upload");
						
						
	$options[] = array( "name" =>  __('Footer Copyright Text', 'stocky'),
						"desc" =>  __('This appears before the footer.', 'stocky'),
						"id" => "footer_copyrighttext",
						"std" => "",
						"type" => "editor");			
						
					

	$options[] = array( "name" =>  __('Home Page', 'stocky'),
						"type" => "heading");

	$options[] = array( "name" => __('Header Background', 'stocky'),
						"desc" => __('Upload the image for your header background. It will be sized to 100% width of the screen.', 'stocky'),
						"id" => "header_image",
						"type" => "upload");
						
	$options[] = array( "name" =>  __('Banner Logo', 'stocky'),
						"desc" =>  __('Upload your Banner logo.', 'stocky'),
						"id" => "logo-banner",
						"type" => "upload");

	$options[] = array( "name" =>  __('Header Text Color', 'stocky'),
						"desc" =>  __('Select the color for the text overlaying the image in your header. This is to help it stand apart.', 'stocky'),
						"id" => "header_text_color",
						"std" => "light_text",
						"type" => "radio",
						"options" => array("light_text" => __('Light', 'stocky'),"dark_text" => __('Dark', 'stocky')));

	$options[] = array( "name" =>  __('Background Image', 'stocky'),
						"desc" =>  __('Upload your Background Image', 'stocky'),
						"id" => "call-background-image",
						"type" => "upload");
						
	$options[] = array( "name" =>  __('Call To Action Text', 'stocky'),
						"desc" =>  __('This appears before the footer.', 'stocky'),
						"id" => "cta_content",
						"std" => "",
						"type" => "editor");
						
		
						
	$options[] = array( "name" =>  __('Call To Action Text Dark Background', 'stocky'),
						"desc" =>  __('This appears before the footer.', 'stocky'),
						"id" => "cta_content_dark",
						"std" => "",
						"type" => "editor");

	$options[] = array( "name" => __('Call To Action Background', 'stocky'),
						"desc" => __('Upload the image for your call to action background. It will be sized to 100% width of the screen.', 'stocky'),
						"id" => "cta_image",
						"type" => "upload");
						
	$options[] = array( "name" =>  __('Max Number of Products to be Displayed on Home Page', 'stocky'),
						"desc" =>  __('How many products would you like to display on the home page before pagination starts?', 'stocky'),
						"id" => "home_products_total",
						"std" => "25",
						"class" => "mini",
						"type" => "text");
						
	$options[] = array( "name" =>  __('Sort downloads randomly', 'stocky'),
						"desc" =>  __('Check this box to sort the items in your home page grid randomly', 'stocky'),
						"id" => "home_products_random",
						"std" => "0",
						"type" => "checkbox");

	$download_categories 	= get_terms( 'download_category', array( 'hide_empty' => false ) );
	$categories_options		= wp_list_pluck( $download_categories, 'name', 'term_id' );
	$options[] = array( "name" => __('Homepage specific download categories', 'stocky'),
						"desc" => __('Only display specific categories of downloads on the homepage. Leave empty to display all categories', 'stocky'),
						"id" => "home_download_categories",
						"type" => "multicheck",
						"options" => $categories_options );

	$options[] = array( "name" =>  __('Store Settings', 'stocky'),
						"type" => "heading");

	$options[] = array( "name" =>  __('Member Login Link', 'stocky'),
						"desc" =>  __('This link will be used in the header. You must create this page and put the login form on it using the Easy Digital Downloads shortcode <strong>[edd_login]</strong>. There is also a <strong>Login Page Template</strong> available for you to use. Put the entire URL including the http://.', 'stocky'),
						"id" => "member_login",
						"std" => "",
						"type" => "text");

	$options[] = array( "name" =>  __('Max Number of Products to be Displayed Per Page', 'stocky'),
						"desc" =>  __('How many products would you like to display per page, other than the home page, before pagination starts?', 'stocky'),
						"id" => "products_total",
						"std" => "25",
						"class" => "mini",
						"type" => "text");

	$options[] = array( "name" =>  __('Display EXIF data', 'stocky'),
						"desc" =>  __('Checking this box will display the EXIF data of the post thumbnail on the download page.', 'stocky'),
						"id" => "display_exif",
						"std" => "0",
						"type" => "checkbox");

	$options[] = array( "name" =>  __('Styles', 'stocky'),
						"type" => "heading");
						
	$options[] = array( "name" =>  __('Menu Color Scheme', 'stocky'),
						"desc" =>  __('Select the color scheme for your menu.', 'stocky'),
						"id" => "menu_scheme",
						"std" => "dark_scheme",
						"type" => "radio",
						"options" => array("dark_scheme" => __('Dark Background, Light Text', 'stocky'),"light_scheme" => __('Light Background, Dark Text', 'stocky')));

	$options[] = array( "name" =>  __('Post Author Box', 'stocky'),
						"desc" =>  __('Enable the "About This Author" box after posts? The avatar pulls from gravatar.com and the description pulls from <strong>Users > Your Profile</strong>', 'stocky'),
						"id" => "author_box",
						"std" => "no",
						"type" => "radio",
						"options" => array("no" => __('No', 'stocky'),"yes" => __('Yes', 'stocky')));

	$options[] = array( "name" =>  __('Link Color', 'stocky'),
						"desc" =>  __('Select the color for your links.', 'stocky'),
						"id" => "link_color",
						"std" => "#2860C5",
						"type" => "color");

	$options[] = array( "name" =>  __('Link Hover Color', 'stocky'),
						"desc" =>  __('Select the hover color for your links.', 'stocky'),
						"id" => "link_color_hover",
						"std" => "#3470DC",
						"type" => "color");

	$options[] = array( "name" =>  __('Button Color', 'stocky'),
						"desc" =>  __('Select the color for your buttons.', 'stocky'),
						"id" => "button_color",
						"std" => "#1E73BE",
						"type" => "color");

	$options[] = array( "name" =>  __('Button Text Color', 'stocky'),
						"desc" =>  __('Select the color for the text of your buttons. This is to help it stand apart from the button background color.', 'stocky'),
						"id" => "button_text",
						"std" => "light",
						"type" => "radio",
						"options" => array("light" => __('Light', 'stocky'),"dark" => __('Dark', 'stocky')));

	$options[] = array( "name" =>  __('Contact', 'stocky'),
						"desc" =>  __('The information input here displays using the Contact Page Template. You must set this template on your contact page.', 'stocky'),
						"type" => "heading");

	$options[] = array( "name" => __('Contact Information', 'stocky'),
						"desc" =>  __('The information input here displays using the Contact Page Template. You must set this template on your contact page.', 'stocky'),
						"type" => "info");

	$options[] = array( "name" => __('Physical Address', 'stocky'),
						"desc" => __('Enter your full address.', 'stocky'),
						"id" => "address",
						"type" => "text");

	$options[] = array( "name" => __('Phone Number', 'stocky'),
						"desc" => __('Enter your phone number.', 'stocky'),
						"id" => "phone",
						"type" => "text");

	$options[] = array( "name" => __('Social Networks', 'stocky'),
						"type" => "heading");

	$options[] = array( "name" => __('Twitter', 'stocky'),
						"desc" => __('Enter the URL to your Twitter profile.', 'stocky'),
						"id" => "twitter",
						"type" => "text");

	$options[] = array( "name" => __('Facebook', 'stocky'),
						"desc" => __('Enter the URL to your Facebook profile.', 'stocky'),
						"id" => "facebook",
						"type" => "text");

	$options[] = array( "name" => __('Google+', 'stocky'),
						"desc" => __('Enter the URL to your Google+ profile.', 'stocky'),
						"id" => "google",
						"type" => "text");

	$options[] = array( "name" => __('Flickr', 'stocky'),
						"desc" => __('Enter the URL to your Flickr Profile.', 'stocky'),
						"id" => "flickr",
						"type" => "text");

	$options[] = array( "name" => __('Tumblr', 'stocky'),
						"desc" => __('Enter the URL to your Tumblr Profile.', 'stocky'),
						"id" => "tumblr",
						"type" => "text");

	$options[] = array( "name" => __('YouTube', 'stocky'),
						"desc" => __('Enter the URL to your YouTube Profile.', 'stocky'),
						"id" => "youtube",
						"type" => "text");

	$options[] = array( "name" => __('Vimeo', 'stocky'),
						"desc" => __('Enter the URL to your Vimeo Profile.', 'stocky'),
						"id" => "vimeo",
						"type" => "text");

	$options[] = array( "name" => __('Pinterest', 'stocky'),
						"desc" => __('Enter the URL to your Pinterest Profile.', 'stocky'),
						"id" => "pinterest",
						"type" => "text");
						
	$options[] = array( "name" => __('LinkedIn', 'stocky'),
						"desc" => __('Enter the URL to your LinkedIn Profile.', 'stocky'),
						"id" => "linkedin",
						"type" => "text");
						
	$options[] = array( "name" => __('Instagram', 'stocky'),
						"desc" => __('Enter the URL to your Instagram Profile.', 'stocky'),
						"id" => "instagram",
						"type" => "text");

	// Support

	$options[] = array( "name" => __('Support', 'stocky'),
						"type" => "heading");

	$options[] = array( "name" => __('Theme Documentation & Support', 'stocky'),
						"desc" => "<p class='dc-text'>Theme support and documentation is available for all ThemeForest customers. Visit the <a target='blank' href='http://support.designcrumbs.com'>Design Crumbs Support Forum</a> to get started. Simply follow the instructions on the home page to verify your purchase and get a support account.</p>

						<p class='dc-text'>For support for the Easy Digital Downloads plugin, please visit the <a target='blank' href='https://easydigitaldownloads.com/support/'>Easy Digital Downloads Support Forum</a>.</p>

						<div class='dc-buttons'><a target='blank' class='dc-button help-button' href='". get_template_directory_uri() ."/changelog.txt'><span class='dc-icon icon-changelog'>Changelog</span></a><a target='blank' class='dc-button help-button' href='http://support.designcrumbs.com/help_files/stockywp/'><span class='dc-icon icon-help'>Help File</span></a><a target='blank' class='dc-button support-button' href='http://support.designcrumbs.com'><span class='dc-icon icon-support'>Support Forum</span></a><a target='blank' class='dc-button custom-button' href='http://support.designcrumbs.com/customizations/'><span class='dc-icon icon-custom'>Customization Request</span></a></div>

						<h4 class='heading'>More Themes by Design Crumbs</h4>

						<div class='embed-themes'></div>

						",
						"type" => "info");

	return $options;
}