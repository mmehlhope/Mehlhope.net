<?php

function new_excerpt_more($more) {
	global $post;
	return '<div><a href="'. get_permalink($post->ID) . '" class="btn">Read more...</a></div>';
}

function custom_more_link($link){
	return "<div>$link</div>";
}


function add_class_to_next() {
    return 'class="btn left" title="Older Posts"';
}

function add_class_to_prev() {
    return 'class="btn right" title="Newer Posts"';
} 

add_filter('the_content_more_link', 'custom_more_link');
add_filter('excerpt_more', 'new_excerpt_more');
add_filter('next_posts_link_attributes', 'add_class_to_next');
add_filter('previous_posts_link_attributes', 'add_class_to_prev');

?>