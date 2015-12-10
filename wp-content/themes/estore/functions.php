<?php
//******************************************
// basic Setup
//******************************************
define( "THEME_DIR", get_template_directory() );
define( "THEME_URI", get_template_directory_uri() );
load_theme_textdomain( 'estore', THEME_DIR .'/lang');
add_theme_support( 'post-thumbnails' ); 

//************* CPT's ****************/

function cpt_laptops(){
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
add_action( 'init', 'cpt_laptops', 0 );

function cpt_phones(){
	$labels = array(
		'name'                => __( 'Phones', 'estore' ),
		'singular_name'       => __( 'Phone', 'estore' ),
		'menu_name'           => __( 'Phones', 'estore' ),
		'parent_item_colon'   => __( 'Parent Phone', 'estore' ),
		'all_items'           => __( 'All Phones', 'estore' ),
		'view_item'           => __( 'View Phone', 'estore' ),
		'add_new_item'        => __( 'Add New Phone', 'estore' ),
		'add_new'             => __( 'Add New', 'estore' ),
		'edit_item'           => __( 'Edit Phone', 'estore' ),
		'update_item'         => __( 'Update Phone', 'estore' ),
		'search_items'        => __( 'Search Phones', 'estore' ),
		'not_found'           => __( 'Not found', 'estore' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'estore' ),
	);
	$args = array(
		'label'               => __( 'Phones', 'estore' ),
		'description'         => __( 'Phones Products we present', 'estore' ),
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
	register_post_type( 'phones', $args );
}
add_action( 'init', 'cpt_phones', 0 );

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
			'technical_metabox',
			__( 'Technical Specifications', 'estore' ),
			'add_technical_metabox',
			$screen
		);
	}
}

function price_metabox() {
	$screens = array( 'laptops', 'phones'  );
	foreach ( $screens as $screen ) {
		add_meta_box(
			'price_metabox',
			__( 'Price', 'estore' ),
			'add_price_metabox',
			$screen,
			'side',
			'high'
		);
	}
}

add_action( 'add_meta_boxes', 'technical_metabox' );
add_action( 'add_meta_boxes', 'price_metabox' );

function add_technical_metabox( $post ){
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'technical_save_metabox_data', 'technical_meta_box_nonce' );
	global $wpdb;
	$technical_table = $wpdb->prefix . 'technical';
	$technical_infos = $wpdb->get_results( "SELECT cpu_implementer, cpu_seri, ram, graphic, weight FROM {$technical_table} WHERE product_id = $post->ID " );
	?>
	<table border="0">
		<tr>
			<td><?php _e('cpu implementer', 'estore'); ?></td>
			<td><input type="text" dir="ltr" id="cpu_implementer_field" name="cpu_implementer_field" value="<?php echo $technical_infos[0]->cpu_implementer; ?>" size="25" /></td>
		</tr>
		<tr>
			<td><?php ( get_post_type( $post ) == 'laptops' )? _e('cpu seri', 'estore') : _e( 'Camera', 'estore' ); ?></td>
			<td><input type="text" dir="ltr" id="cpu_seri_field" name="cpu_seri_field" value="<?php echo $technical_infos[0]->cpu_seri; ?>" size="25" /></td>
		</tr>
		<tr>
			<td><?php _e('RAM', 'estore'); ?></td>
			<td><input type="text" dir="ltr" id="ram_field" name="ram_field" value="<?php echo $technical_infos[0]->ram; ?>" size="25" /></td>
		</tr>
		<tr>
			<td><?php ( get_post_type( $post ) == 'laptops' )? _e('graphic', 'estore') : _e( 'Display', 'estore' ); ?></td>
			<td><input type="text" dir="ltr" id="graphic_field" name="graphic_field" value="<?php echo $technical_infos[0]->graphic; ?>" size="25" /></td>
		</tr>
		<tr>
			<td><?php _e('weight', 'estore'); ?></td>
			<td><input type="text" dir="ltr" id="weight_field" name="weight_field" value="<?php echo $technical_infos[0]->weight; ?>" size="25" /></td>
		</tr>
	</table><?php
}

function add_price_metabox( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'price_save_metabox_data', 'price_meta_box_nonce' );
	$price = get_post_meta( $post->ID, 'price', 1 );
	$reduced = get_post_meta( $post->ID, 'reduced', 1 ); ?>
	<table border="0">
		<tr width="80%">
			<td><?php _e('Price', 'estore'); ?></td>
			<td><input type="text" dir="ltr" id="price_field" name="price_field" value="<?php echo $price; ?>" size="18" /></td>
		</tr>
		<tr width="20%">
			<td><?php _e( 'Reduced price', 'estore' ); ?></td>
			<td><input type="text" dir="ltr" id="rprice_field" name="rprice_field" value="<?php echo $reduced; ?>" size="18" /></td>
		</tr>
	</table><?php
}


//********************************
// technical specification metabox
//********************************
function technical_metabox_save( $post_id ){
	global $wpdb;
	if ( ! isset( $_POST['technical_meta_box_nonce'] ) ) {
		return;
	}
	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['technical_meta_box_nonce'], 'technical_save_metabox_data' ) ) {
		return;
	}
	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}
	/* OK, it's safe for us to save the data now. */
	// Make sure that it is set.
	if ( ! isset( $_POST['cpu_implementer_field'] ) ) {
		return;
	}if ( ! isset( $_POST['cpu_seri_field'] ) ) {
		return;
	}if ( ! isset( $_POST['ram_field'] ) ) {
		return;
	}if ( ! isset( $_POST['graphic_field'] ) ) {
		return;
	}if ( ! isset( $_POST['weight_field'] ) ) {
		return;
	}
	// Sanitize user input.
	$cpu_imp = sanitize_text_field( $_POST['cpu_implementer_field'] );
	$cpu_seri = sanitize_text_field( $_POST['cpu_seri_field'] );
	$ram = sanitize_text_field( $_POST['ram_field'] );
	$graphic = sanitize_text_field( $_POST['graphic_field'] );
	$weight = sanitize_text_field( $_POST['weight_field'] );
	// Update the meta field in the database.
	$technical_table = $wpdb->prefix . 'technical';
	if ( $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM {$technical_table} WHERE product_id = %d", $post_id ) ) ){
		//UPDATE
		$wpdb->update(
				$technical_table ,
				array( 'cpu_implementer' => $cpu_imp , 'cpu_seri' => $cpu_seri, 'ram' => $ram, 'graphic' => $graphic, 'weight' => $weight ),
				array( 'product_id' => $post_id )
		  );
	}else{
		//INSERT
		$wpdb->insert( $technical_table, array( 'product_id' => $post_id, 'cpu_implementer' => $cpu_imp, 'cpu_seri' => $cpu_seri, 'ram' => $ram, 'graphic' => $graphic, 'weight' => $weight ), array( '%d', '%s', '%s', '%d', '%s', '%d' ) );
	}
		
}
add_action( 'save_post', 'technical_metabox_save' );

function price_metabox_save( $post_id ){
	global $wpdb;
	if ( ! isset( $_POST['price_meta_box_nonce'] ) ) {
		return;
	}
	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['price_meta_box_nonce'], 'price_save_metabox_data' ) ) {
		return;
	}
	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}
	/* OK, it's safe for us to save the data now. */
	// Make sure that it is set.
	if ( ! isset( $_POST['cpu_implementer_field'] ) ) {
		return;
	}if ( ! isset( $_POST['cpu_seri_field'] ) ) {
		return;
	}
	// Sanitize user input.
	$price = sanitize_text_field( $_POST['price_field'] );
	$reduced = sanitize_text_field( $_POST['rprice_field'] );
	// Update the meta field in the database.
	if( $price )
		update_post_meta( $post_id, 'price', $price );
	if ( $reduced )
		update_post_meta( $post_id, 'reduced', $reduced );
		
}
add_action( 'save_post', 'price_metabox_save' );