<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
function create_product_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Products_Taxonomies', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Product_Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Product Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Product Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Product Item', 'text_domain' ),
		'parent_item_colon'          => __( 'ParentProduct Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Product Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Product', 'text_domain' ),
		'edit_item'                  => __( 'Edit Product', 'text_domain' ),
		'update_item'                => __( 'Update Product', 'text_domain' ),
		'view_item'                  => __( 'View Product', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Products with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Product', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Product', 'text_domain' ),
		'search_items'               => __( 'Search Product', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Products', 'text_domain' ),
		'items_list'                 => __( 'Product list', 'text_domain' ),
		'items_list_navigation'      => __( 'Products list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'Product_taxonomy', array( 'product_type' ), $args );

}
add_action( 'init', 'create_product_taxonomy', 0 );