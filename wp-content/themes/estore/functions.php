<?php
//******************************************
// basic Setup
//******************************************
define( "THEME_DIR", get_template_directory() );
define( "THEME_URI", get_template_directory_uri() );
add_theme_support( 'post-thumbnails' ); 

//************* CPT's ****************/

function cpt_products(){
	$labels = array(
		'name'                => __( 'Laptops', 'estore' ),
		'singular_name'       => __( 'Laptop', 'estore' ),
		'menu_name'           => __( 'Laptops', 'estore' ),
		'parent_item_colon'   => __( 'Parent Laptop', 'estore' ),
		'all_items'           => __( 'All Laptops', 'estore' ),
		'view_item'           => __( 'View Laptop', 'estore' ),
		'add_new_item'        => __( 'Add New Laptop', 'estore' ),
		'add_new'             => __( 'Add New', 'estore' ),
		'edit_item'           => __( 'Edit Laptop', 'estore' ),
		'update_item'         => __( 'Update Laptop', 'estore' ),
		'search_items'        => __( 'Search Laptops', 'estore' ),
		'not_found'           => __( 'Not found', 'estore' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'estore' ),
	);
	$args = array(
		'label'               => __( 'Laptops', 'estore' ),
		'description'         => __( 'Laptops Products we present', 'estore' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'page-attributes','thumbnail','comments'),
		'taxonomies'          => array( 'post_tag', 'category' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'						=> 'dashicons-admin-generic',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'laptops', $args );
}
add_action( 'init', 'cpt_products', 0 );

function add_technical_table(){
	global $wpdb;
	$technical_table = $wpdb->prefix. 'technical';
	if( $wpdb->get_var( "SHOW TABLES LIKE '{$technical_table}'" ) != $technical_table ){
		$query =
			"CREATE TABLE {$technical_table} (
			product_id BIGINT(20) UNSIGNED ZEROFILL PRIMARY KEY, 
			cpu_implementer VARCHAR(64),
			cpu_seri VARCHAR(64),
			ram VARCHAR(4) ,
			graphic VARCHAR(64),
			weight VARCHAR(4)
			);";
		require_once( ABSPATH. 'wp-admin/includes/upgrade.php' );
		dbDelta( $query );
	}
}
add_action( 'admin_init', 'add_technical_table' );