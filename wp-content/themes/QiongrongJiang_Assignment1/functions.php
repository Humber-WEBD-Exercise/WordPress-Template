<?php 

	// define menu location
	register_nav_menu('main-menu','Primary site navigation');

	//define a sidebar
	register_sidebar(array(
		'id' => 'sidebar-right',
		'name' => 'Right Sidebar'
	));

	add_theme_support('post-thumbnails');
	add_image_size( 'hero', 720, 300, true);

	// change search button text
	add_filter('get_search_form', 'new_search_text');
	function new_search_text($text) {
		$text = str_replace('value="Search"', 'value="Go"', $text);
		return $text;
	}

	//add class to previous and next page links
	add_filter('next_posts_link_attributes', 'next_link_attributes');
	add_filter('previous_posts_link_attributes', 'prev_link_attributes');
	function next_link_attributes() {
	    return 'class="next-link"';
	}
	function prev_link_attributes() {
	    return 'class="prev-link"';
	}


?>