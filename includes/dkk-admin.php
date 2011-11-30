<?php

// admin CSS
add_action('admin_init', 'dkk_admin_init');

function dkk_admin_init() {
	$home_url = home_url();
	$theme_name = next(explode('/themes/', get_template_directory()));
	
	wp_register_style('dkk_admin_css', "$home_url/wp-content/themes/$theme_name/includes/css/admin.css");
	wp_enqueue_style('dkk_admin_css');
}

function dkk_new_contact_methods( $contactmethods ) {
    $contactmethods['twitter'] = 'Twitter'; // Add Twitter
    $contactmethods['facebook'] = 'Facebook'; // Add Facebook
    $contactmethods['google'] ='Google+';
    unset($contactmethods['yim']); // Remove YIM
    unset($contactmethods['aim']); // Remove AIM
    unset($contactmethods['jabber']); // Remove Jabber

    return $contactmethods;
}
    add_filter('user_contactmethods','dkk_new_contact_methods',10,1);

?>