<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

/*************** Testimonials ****************/
add_action('init', 'testimonials_register'); // Register name
	function testimonials_register() { // Call register name
    	$args = array(
        	'label' => __('Testimonials'), // Diaplay name
        	'singular_label' => __('testimonial'), // Name you reference it by in WP
        	'public' => true,
        	'show_ui' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array( 'slug' => '','with_front' => FALSE),
			'query_var' => false,
			'can_export' => true,
			'menu_position' => 5, /* will appear below Posts */ 
        	'supports' => array('title', 'editor', 'thumbnail') // What's enabled in the post editor (kitchen sink example: ('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky'))
        );
    	register_post_type( 'testimonial' , $args ); // Remember to use the reference name here
    }	
?>
