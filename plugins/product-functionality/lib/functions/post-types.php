<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
function create_product_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Product', 'text_domain' ),
		'name_admin_bar'        => __( 'Product', 'text_domain' ),
		'archives'              => __( 'Product Archives', 'text_domain' ),
		'attributes'            => __( 'Product Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Product', 'text_domain' ),
		'all_items'             => __( 'All Product', 'text_domain' ),
		'add_new_item'          => __( 'Add New Product', 'text_domain' ),
		'add_new'               => __( 'Add New Product', 'text_domain' ),
		'new_item'              => __( 'New Product', 'text_domain' ),
		'edit_item'             => __( 'Edit Product', 'text_domain' ),
		'update_item'           => __( 'Update Product', 'text_domain' ),
		'view_item'             => __( 'View Product', 'text_domain' ),
		'view_items'            => __( 'View Product', 'text_domain' ),
		'search_items'          => __( 'Search Product', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Product', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Product', 'text_domain' ),
		'items_list'            => __( 'Product list', 'text_domain' ),
		'items_list_navigation' => __( 'Product list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Products list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'text_domain' ),
		'description'           => __( 'a product on the inhabitent store', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'taxonomies'            => array('product_type'),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'show_in_rest'          => true,
        'template'              => array(array( 'core/paragraph', array(
                                    'placeholder' => 'Add Description...',
                                    ) ),),
        'template-lock'         => true,
	);
	register_post_type( 'product_type', $args );

}
function hero_image() {

	$labels = array(
		'name'                  => _x( 'hero_images', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'hero_image', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'hero images', 'text_domain' ),
		'name_admin_bar'        => __( 'hero images', 'text_domain' ),
		'archives'              => __( 'hero images Archives', 'text_domain' ),
		'attributes'            => __( 'hero images Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent hero_image:', 'text_domain' ),
		'all_items'             => __( 'All hero images', 'text_domain' ),
		'add_new_item'          => __( 'Add New hero images', 'text_domain' ),
		'add_new'               => __( 'Add New hero image', 'text_domain' ),
		'new_item'              => __( 'New hero image', 'text_domain' ),
		'edit_item'             => __( 'Edit hero image', 'text_domain' ),
		'update_item'           => __( 'Update hero image', 'text_domain' ),
		'view_item'             => __( 'View hero image', 'text_domain' ),
		'view_items'            => __( 'View hero image', 'text_domain' ),
		'search_items'          => __( 'Search hero images', 'text_domain' ),
		'not_found'             => __( 'hero image Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'hero image Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'hero image', 'text_domain' ),
		'set_featured_image'    => __( 'Set hero image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove hero image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as hero image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into hero image', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this hero image', 'text_domain' ),
		'items_list'            => __( 'hero image list', 'text_domain' ),
		'items_list_navigation' => __( 'hero image list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter hero image list', 'text_domain' ),
	);

}
add_action( 'init', 'create_product_type', 0 );
