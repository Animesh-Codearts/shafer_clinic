<?php   

     /*Custom Post type start*/
    function cw_post_type_banner() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Banner', 'plural'),
    'singular_name' => _x('Banner', 'singular'),
    'menu_name' => _x('Banner', 'admin menu'),
    'name_admin_bar' => _x('Banner', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Banner'),
    'new_item' => __('New Banner'),
    'edit_item' => __('Edit Banner'),
    'view_item' => __('View Banner'),
    'all_items' => __('All Banner'),
    'search_items' => __('Search Banner'),
    'not_found' => __('No Banner found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'banner'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-format-image',
    );
    register_post_type('cpt_banner', $args);
    }
    add_action('init', 'cw_post_type_banner');



         /*Custom Post type start*/
    function cw_post_type_partners() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Partners', 'plural'),
    'singular_name' => _x('Partners', 'singular'),
    'menu_name' => _x('Partners', 'admin menu'),
    'name_admin_bar' => _x('Partners', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Partners'),
    'new_item' => __('New Partners'),
    'edit_item' => __('Edit Partners'),
    'view_item' => __('View Partners'),
    'all_items' => __('All Partners'),
    'search_items' => __('Search Partners'),
    'not_found' => __('No Partners found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'partners'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-businessman',
    );
    register_post_type('cpt_partners', $args);
    }
    add_action('init', 'cw_post_type_partners');



         /*Custom Post type start*/
    function cw_post_type_before_after() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Before After', 'plural'),
    'singular_name' => _x('Before After', 'singular'),
    'menu_name' => _x('Before After', 'admin menu'),
    'name_admin_bar' => _x('Before After', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Before After'),
    'new_item' => __('New Before After'),
    'edit_item' => __('Edit Before After'),
    'view_item' => __('View Before After'),
    'all_items' => __('All Before After'),
    'search_items' => __('Search Before After'),
    'not_found' => __('No Before After found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'beforeafter'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-share-alt',
    );
    register_post_type('cpt_beforeafter', $args);
    }
    add_action('init', 'cw_post_type_before_after');



         /*Custom Post type start*/
    function cw_post_type_services() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Services', 'plural'),
    'singular_name' => _x('Services', 'singular'),
    'menu_name' => _x('Services', 'admin menu'),
    'name_admin_bar' => _x('Services', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Services'),
    'new_item' => __('New Services'),
    'edit_item' => __('Edit Services'),
    'view_item' => __('View Services'),
    'all_items' => __('All Services'),
    'search_items' => __('Search Services'),
    'not_found' => __('No Services found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'services'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-admin-tools',
    );
    register_post_type('cpt_services', $args);
    }
    add_action('init', 'cw_post_type_services');



         /*Custom Post type start*/
    function cw_post_type_brand() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Branding', 'plural'),
    'singular_name' => _x('Branding', 'singular'),
    'menu_name' => _x('Branding', 'admin menu'),
    'name_admin_bar' => _x('Branding', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Branding'),
    'new_item' => __('New Branding'),
    'edit_item' => __('Edit Branding'),
    'view_item' => __('View Branding'),
    'all_items' => __('All Branding'),
    'search_items' => __('Search Branding'),
    'not_found' => __('No Branding found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'brand'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-pressthis',
    );
    register_post_type('cpt_brand', $args);
    }
    add_action('init', 'cw_post_type_brand');



         /*Custom Post type start*/
    function cw_post_type_testimonials() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Testimonials', 'plural'),
    'singular_name' => _x('Testimonials', 'singular'),
    'menu_name' => _x('Testimonials', 'admin menu'),
    'name_admin_bar' => _x('Testimonials', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Testimonials'),
    'new_item' => __('New Testimonials'),
    'edit_item' => __('Edit Testimonials'),
    'view_item' => __('View Testimonials'),
    'all_items' => __('All Testimonials'),
    'search_items' => __('Search Testimonials'),
    'not_found' => __('No Testimonials found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'testimonials'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-editor-quote',
    );
    register_post_type('cpt_testimonials', $args);
    }
    add_action('init', 'cw_post_type_testimonials');