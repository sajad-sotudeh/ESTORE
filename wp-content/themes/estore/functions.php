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

/**
 * Adds a box to the main column on the Post and Page edit screens.
 */
function technical_metabox() {
	$screens = array( 'laptops', 'phones'  );
	foreach ( $screens as $screen ) {
		add_meta_box(
			'myplugin_sectionid',
			__( 'Technical Specifications', 'estore' ),
			'add_technical_metabox',
			$screen
		);
	}
}
add_action( 'add_meta_boxes', 'technical_metabox' );

function add_technical_metabox( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'technical_save_metabox_data', 'technical_meta_box_nonce' );
	global $wpdb;
	$technical_table = $wpdb->prefix . 'technical';
	$technical_infos = $wpdb->get_results( "SELECT cpu_implementer, cpu_seri, ram, graphic, weight FROM {$technical_table} WHERE product_id = $post->ID " );
	?>
	<table border="0">
		<tr>
			<td><?php _e('cpu implementer', 'estore'); ?></td>
			<td><input type="text" id="cpu_implementer_field" name="cpu_implementer_field" value="<?php echo $technical_infos[0]->cpu_implementer; ?>" size="25" /></td>
		</tr>
		<tr>
			<td><?php _e('cpu seri', 'estore'); ?></td>
			<td><input type="text" id="cpu_seri_field" name="cpu_seri_field" value="<?php echo $technical_infos[0]->cpu_seri; ?>" size="25" /></td>
		</tr>
		<tr>
			<td><?php _e('RAM', 'estore'); ?></td>
			<td><input type="text" id="ram_field" name="ram_field" value="<?php echo $technical_infos[0]->ram; ?>" size="25" /></td>
		</tr>
		<tr>
			<td><?php _e('graphic', 'estore'); ?></td>
			<td><input type="text" id="graphic_field" name="graphic_field" value="<?php echo $technical_infos[0]->graphic; ?>" size="25" /></td>
		</tr>
		<tr>
			<td><?php _e('weight', 'estore'); ?></td>
			<td><input type="text" id="weight_field" name="weight_field" value="<?php echo $technical_infos[0]->weight; ?>" size="25" /></td>
		</tr>
	</table><?php
}
