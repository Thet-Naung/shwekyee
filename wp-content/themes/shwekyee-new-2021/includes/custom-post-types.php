<?php
add_action( 'init', 'cp_change_post_object' );
add_action( 'init', 'create_post_type' );
add_action( 'init', 'create_tax' );
/*
|-----------------------------------------------------------------------------------
| Add new post type
|-----------------------------------------------------------------------------------
|
*/
function create_post_type(){
	register_post_type('product',
		array(
			'labels' => array(
				'name' => __('Products'),
				'singular_name' => __('Product')
			),
			'taxonomies'  => array( 'product-type' ),
			'public' => true,
			'has_archive' => true,
			'show_in_rest'=> true,
			'menu_icon' =>'dashicons-products',
			'rewrite' => array('slug' => 'product'),
			'supports' => array('title', 'editor', 'custom-fields', 'excerpt', 'thumbnail')
		)
	);

	register_post_type('testimonials',
		array(
			'labels' => array(
				'name' => __('Testimonials'),
				'singular_name' => __('Testimonial')
			),
			'public' => true,
			'has_archive' => true,
			'show_in_rest'=> true,
			// 'menu_icon' =>'',
			'rewrite' => array('slug' => 'testimonial'),
			'supports' => array('title', 'editor', 'custom-fields', 'excerpt', 'thumbnail')
		)
	);

	register_post_type('activity',
		array(
			'labels' => array(
				'name' => __('Activities'),
				'singular_name' => __('Acitvity')
			),
			'taxonomies'  => array( 'activity-type' ),
			'public' => true,
			'has_archive' => true,
			'show_in_rest'=> true,
			// 'menu_icon' =>'',
			'rewrite' => array('slug' => 'activity'),
			'supports' => array('title', 'editor', 'custom-fields', 'excerpt', 'thumbnail')
		)
	);
}
function create_tax(){

    register_taxonomy('product-type', 'product', array(
		'label' =>__('Product Types'),
        'rewrite'      => array('slug' => 'product-type'),
		'hierarchical' => true,
		'show_in_rest'=> true,
	));

	register_taxonomy('activity-type', 'activity', array(
		'label' =>__('Activity Types'),
        'rewrite'      => array('slug' => 'activity-type'),
		'hierarchical' => true,
		'show_in_rest'=> true,
	));
}

/*
|-----------------------------------------------------------------------------------
| Change dashboard Posts to News
|-----------------------------------------------------------------------------------
|
*/
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Blog';
        $labels->singular_name = 'Blog';
        $labels->add_new = 'Add Blog';
        $labels->add_new_item = 'Add Blog';
        $labels->edit_item = 'Edit Blog';
        $labels->new_item = 'Blog';
        $labels->view_item = 'View Blog';
        $labels->search_items = 'Search Blog';
        $labels->not_found = 'No Blog found';
        $labels->not_found_in_trash = 'No Blog found in Trash';
        $labels->all_items = 'All Blog';
        $labels->menu_name = 'Blog';
        $labels->name_admin_bar = 'Blog';
}
