<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'twentynineteen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'twentynineteen' ),
					'slug'  => 'primary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => __( 'Secondary', 'twentynineteen' ),
					'slug'  => 'secondary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'twentynineteen' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentynineteen' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentynineteen' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'twentynineteen_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'twentynineteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar( array(
			'name' => 'My Footer Sidebar 1',
			'id' => 'footer-sidebar-1',
			'description' => 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
) );

		register_sidebar( array(
			'name' => 'My Footer Sidebar 2',
			'id' => 'footer-sidebar-2',
			'description' => 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
) );

		register_sidebar( array(
			'name' => 'My Footer Sidebar 3',
			'id' => 'footer-sidebar-3',
			'description' => 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
) );

		register_sidebar( array(
			'name' => 'copyright',
			'id' => 'copyright',
			'description' => 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
) );

		register_sidebar( array(
			'name' => 'footer-links',
			'id' => 'footer-links',
			'description' => 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
) );


}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function twentynineteen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twentynineteen_content_width', 640 );
}
add_action( 'after_setup_theme', 'twentynineteen_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts() {
	wp_enqueue_style( 'twentynineteen-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_style_add_data( 'twentynineteen-style', 'rtl', 'replace' );

	if ( has_nav_menu( 'menu-1' ) ) {
		wp_enqueue_script( 'twentynineteen-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), array(), '1.1', true );
		wp_enqueue_script( 'twentynineteen-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '1.1', true );
	}

	wp_enqueue_style( 'twentynineteen-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twentynineteen_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twentynineteen_skip_link_focus_fix' );

/**
 * Enqueue supplemental block editor styles.
 */
function twentynineteen_editor_customizer_styles() {

	wp_enqueue_style( 'twentynineteen-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'twentynineteen-editor-customizer-styles', twentynineteen_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'twentynineteen_editor_customizer_styles' );

/**
 * Display custom color CSS in customizer and on frontend.
 */
function twentynineteen_colors_css_wrap() {

	// Only include custom colors in customizer or frontend.
	if ( ( ! is_customize_preview() && 'default' === get_theme_mod( 'primary_color', 'default' ) ) || is_admin() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );

	$primary_color = 199;
	if ( 'default' !== get_theme_mod( 'primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'primary_color_hue', 199 );
	}
	?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
		<?php echo twentynineteen_custom_colors_css(); ?>
	</style>
	<?php
}
add_action( 'wp_head', 'twentynineteen_colors_css_wrap' );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';



function statistics_custom_post_type() {
	$labels = array(
		'name'                => __( 'Statistics' ),
		'singular_name'       => __( 'Statistics'),
		'menu_name'           => __( 'Statistics'),
		'parent_item_colon'   => __( 'Parent Statistics'),
		'all_items'           => __( 'All Statistics'),
		'view_item'           => __( 'View Statistics'),
		'add_new_item'        => __( 'Add New Statistics'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Statistics'),
		'update_item'         => __( 'Update Statistics'),
		'search_items'        => __( 'Search Statistics'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Statistics'),
		'description'         => __( 'Statistics for michael'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'statistics', $args );
}
add_action( 'init', 'statistics_custom_post_type', 0 );



function team_custom_post_type() {
	$labels = array(
		'name'                => __( 'Team' ),
		'singular_name'       => __( 'Team'),
		'menu_name'           => __( 'Team'),
		'parent_item_colon'   => __( 'Parent Team'),
		'all_items'           => __( 'All Team Members'),
		'view_item'           => __( 'View Team Member'),
		'add_new_item'        => __( 'Add New Team Member'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Team Member'),
		'update_item'         => __( 'Update Team Member'),
		'search_items'        => __( 'Search Team Member'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Team'),
		'description'         => __( 'Team for michael'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'team', $args );
}
add_action( 'init', 'team_custom_post_type', 0 );




function slider_custom_post_type() {
	$labels = array(
		'name'                => __( 'Sliders' ),
		'singular_name'       => __( 'Slider'),
		'menu_name'           => __( 'Slider'),
		'parent_item_colon'   => __( 'Parent Slider'),
		'all_items'           => __( 'All Sliders'),
		'view_item'           => __( 'View Slider'),
		'add_new_item'        => __( 'Add New Slider'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Slider'),
		'update_item'         => __( 'Update Slider'),
		'search_items'        => __( 'Search Slider'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'sliders'),
		'description'         => __( 'Image Sliders for michael'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_custom_post_type', 0 );



function property_custom_post_type() {
	$labels = array(
		'name'                => __( 'Properties' ),
		'singular_name'       => __( 'Property'),
		'menu_name'           => __( 'Properties'),
		'parent_item_colon'   => __( 'Parent Property'),
		'all_items'           => __( 'All Properties'),
		'view_item'           => __( 'View Property'),
		'add_new_item'        => __( 'Add New Property'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Property'),
		'update_item'         => __( 'Update Property'),
		'search_items'        => __( 'Search Property'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'properties'),
		'description'         => __( 'Image properties for michael'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'property', $args );
}
add_action( 'init', 'property_custom_post_type', 0 );



function expertise_custom_post_type() {
	$labels = array(
		'name'                => __( 'Expertise' ),
		'singular_name'       => __( 'Expertise'),
		'menu_name'           => __( 'Expertise'),
		'parent_item_colon'   => __( 'Parent Expertise'),
		'all_items'           => __( 'All Expertise'),
		'view_item'           => __( 'View Expertise'),
		'add_new_item'        => __( 'Add New Expertise'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Expertise'),
		'update_item'         => __( 'Update Expertise'),
		'search_items'        => __( 'Search Expertise'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'expertise'),
		'description'         => __( 'expertise for michael website'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'expertise', $args );
}
add_action( 'init', 'expertise_custom_post_type', 0 );


add_action( 'init', 'property2_custom_taxonomy', 0 );
//create a custom taxonomy name it "type" for your posts
function property2_custom_taxonomy() {
  $labels = array(
    'name' => _x( 'property', 'taxonomy general name' ),
    'singular_name' => _x( 'Property', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Property Types' ),
    'parent_item' => __( 'Parent Property' ),
    'parent_item_colon' => __( 'Parent Property:' ),
    'edit_item' => __( 'Edit Property' ), 
    'update_item' => __( 'Update Property' ),
    'add_new_item' => __( 'Add New Property' ),
    'new_item_name' => __( 'New Property Name' ),
    'menu_name' => __( 'Property types' ),
  ); 	
 
  register_taxonomy('property',array('expertise'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}




// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'slider_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function slider_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  ); 	
 
  register_taxonomy('types',array('slider'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}


// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'property_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "property_type" for your posts
function property_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Property Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Property Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Property Types' ),
    'all_items' => __( 'All Property Types' ),
    'parent_item' => __( 'Parent Property Type' ),
    'parent_item_colon' => __( 'Parent Property Type:' ),
    'edit_item' => __( 'Edit Property Type' ), 
    'update_item' => __( 'Update Property Type' ),
    'add_new_item' => __( 'Add New Property Type' ),
    'new_item_name' => __( 'New Property Type Name' ),
    'menu_name' => __( 'Property Types' ),
  ); 	
 
  register_taxonomy('property_types',array('property'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'property_type' ),
  ));
}



// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'property1_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "property_type" for your posts
function property1_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Market Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Market Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Market Types' ),
    'all_items' => __( 'All Market Types' ),
    'parent_item' => __( 'Parent Market Type' ),
    'parent_item_colon' => __( 'Parent Market Type:' ),
    'edit_item' => __( 'Edit Market Type' ), 
    'update_item' => __( 'Update Market Type' ),
    'add_new_item' => __( 'Add New Market Type' ),
    'new_item_name' => __( 'New Market Type Name' ),
    'menu_name' => __( 'Market Types' ),
  ); 	
 
  register_taxonomy('market_types',array('property'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'market_type' ),
  ));
}



function add_your_fields_meta_box() {
    	add_meta_box(
    		'your_fields_meta_box', // $id
    		'Custom Fields', // $title
    		'show_your_fields_meta_box', // $callback
    		null, // $screen
    		'advanced', // $context
    		'high' // $priority
    	);
    }
    add_action( 'add_meta_boxes', 'add_your_fields_meta_box' );





function show_your_fields_meta_box() {

		global $post;
		$meta = get_post_meta( $post->ID, 'your_fields', true );


		$page_template = get_post_meta( $post->ID, '_wp_page_template', true );
		$post_type1=get_post_meta($post->ID,get_post_type(),true);
		//print_r($post_type1);

		$post_type = get_post_type( $post->ID );
		//echo $post_type;
		
		?>

		<input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

	<?php
		if ( 'page-templates/home.php' == $page_template ) {
			
  ?>

        <!-- All fields will go here -->

    <p>
    	<label for="your_fields[text]">Below slider text</label>
    	<br>
    	<input type="text" name="your_fields[text]" id="your_fields[text]" class="regular-text" value="<?php echo $meta['text']; ?>">
    </p>
    <p>
    	<label for="your_fields[text13]">Below slider Button Text</label>
    	<br>
    	<input type="text" name="your_fields[text13]" id="your_fields[text13]" class="regular-text" value="<?php echo $meta['text13']; ?>">
    </p>

      <p>
    	<label for="your_fields[text2]">Expertise heading</label>
    	<br>
    	<input type="text" name="your_fields[text2]" id="your_fields[text2]" class="regular-text" value="<?php echo $meta['text2']; ?>">
    </p>

    <p>
    	<label for="your_fields[textarea]">Expertise Description</label>
    	<br>
    	<textarea name="your_fields[textarea]" id="your_fields[textarea]" rows="5" cols="30" style="width:500px;"><?php echo $meta['textarea']; ?></textarea>
    </p>

    <p>
    	<label for="your_fields[text9]">Development</label>
    	<br>
    	<input type="text" name="your_fields[text9]" id="your_fields[text9]" class="regular-text" value="<?php echo $meta['text9']; ?>">
    </p>
    <p>
    	<label for="your_fields[textarea5]">Development Description</label>
    	<br>
    	<textarea name="your_fields[textarea5]" id="your_fields[textarea5]" rows="5" cols="30" style="width:500px;"><?php echo $meta['textarea5']; ?></textarea>
    </p>
    <p>
    	<label for="your_fields[image]">Development Image</label><br>
    	<input type="text" name="your_fields[image]" id="your_fields[image]" class="meta-image regular-text" value="<?php echo $meta['image']; ?>">
    	<input type="button" class="button image-upload" value="Browse">
    </p>
    <div class="image-preview"><img src="<?php echo $meta['image']; ?>" style="max-width: 250px;"></div>


    <p>
    	<label for="your_fields[text10]">Management</label>
    	<br>
    	<input type="text" name="your_fields[text10]" id="your_fields[text10]" class="regular-text" value="<?php echo $meta['text10']; ?>">
    </p>
    <p>
    	<label for="your_fields[textarea6]">Management Description</label>
    	<br>
    	<textarea name="your_fields[textarea6]" id="your_fields[textarea6]" rows="5" cols="30" style="width:500px;"><?php echo $meta['textarea6']; ?></textarea>
    </p>
    <p>
    	<label for="your_fields[image2]">Management Image</label><br>
    	<input type="text" name="your_fields[image2]" id="your_fields[image2]" class="meta-image1 regular-text" value="<?php echo $meta['image2']; ?>">
    	<input type="button" class="button image-upload1" value="Browse">
    </p>
    <div class="image-preview1"><img src="<?php echo $meta['image2']; ?>" style="max-width: 250px;"></div>


    <p>
    	<label for="your_fields[text11]">Construction</label>
    	<br>
    	<input type="text" name="your_fields[text11]" id="your_fields[text11]" class="regular-text" value="<?php echo $meta['text11']; ?>">
    </p>
    <p>
    	<label for="your_fields[textarea7]">Construction Description</label>
    	<br>
    	<textarea name="your_fields[textarea7]" id="your_fields[textarea7]" rows="5" cols="30" style="width:500px;"><?php echo $meta['textarea7']; ?></textarea>
    </p>
     <p>
    	<label for="your_fields[image3]">Construction Image</label><br>
    	<input type="text" name="your_fields[image3]" id="your_fields[image3]" class="meta-image3 regular-text" value="<?php echo $meta['image3']; ?>">
    	<input type="button" class="button image-upload3" value="Browse">
    </p>
    <div class="image-preview3"><img src="<?php echo $meta['image3']; ?>" style="max-width: 250px;"></div>

    <p>
    	<label for="your_fields[text12]">Finance</label>
    	<br>
    	<input type="text" name="your_fields[text12]" id="your_fields[text12]" class="regular-text" value="<?php echo $meta['text12']; ?>">
    </p>
    <p>
    	<label for="your_fields[textarea8]">Finance Description</label>
    	<br>
    	<textarea name="your_fields[textarea8]" id="your_fields[textarea8]" rows="5" cols="30" style="width:500px;"><?php echo $meta['textarea8']; ?></textarea>
    </p>
    <label for="your_fields[image4]">Finance Image</label><br>
    	<input type="text" name="your_fields[image4]" id="your_fields[image4]" class="meta-image4 regular-text" value="<?php echo $meta['image4']; ?>">
    	<input type="button" class="button image-upload4" value="Browse">
    </p>
    <div class="image-preview4"><img src="<?php echo $meta['image4']; ?>" style="max-width: 250px;"></div>

    <p>
    	<label for="your_fields[text2]">Banner heading</label>
    	<br>
    	<input type="text" name="your_fields[text7]" id="your_fields[text7]" class="regular-text" value="<?php echo $meta['text7']; ?>">
    </p>
     <p>
    	<label for="your_fields[benefits]">Banner Description</label>
    	<br>
    	<textarea name="your_fields[benefits]" id="your_fields[benefits]" rows="5" cols="30" style="width:500px;"><?php echo $meta['benefits']; ?></textarea>
    </p>
    <p>
    	<label for="your_fields[text8]">Read More button</label>
    	<br>
    	<input type="text" name="your_fields[text8]" id="your_fields[text8]" class="regular-text" value="<?php echo $meta['text8']; ?>">
    </p>



    <p>
    	<label for="your_fields[text14]">2nd Slider heading</label>
    	<br>
    	<input type="text" name="your_fields[text14]" id="your_fields[text14]" class="regular-text" value="<?php echo $meta['text14']; ?>">
    </p>
     <p>
    	<label for="your_fields[textarea9]">2nd Slider Description</label>
    	<br>
    	<textarea name="your_fields[textarea9]" id="your_fields[textarea9]" rows="5" cols="30" style="width:500px;"><?php echo $meta['textarea9']; ?></textarea>
    </p>
    <p>
    	<label for="your_fields[text15]">Market type</label>
    	<br>
    	<input type="text" name="your_fields[text15]" id="your_fields[text15]" class="regular-text" value="<?php echo $meta['text15']; ?>">
    </p>
  <label for="your_fields[image10]">1st Image</label><br>
    	<input type="text" name="your_fields[image10]" id="your_fields[image10]" class="meta-image10 regular-text" value="<?php echo $meta['image10']; ?>">
    	<input type="button" class="button image-upload10" value="Browse">
    </p>
    <div class="image-preview10"><img src="<?php echo $meta['image10']; ?>" style="max-width: 250px;"></div>

		<label for="your_fields[image9]">2nd Image</label><br>
    	<input type="text" name="your_fields[image9]" id="your_fields[image9]" class="meta-image9 regular-text" value="<?php echo $meta['image9']; ?>">
    	<input type="button" class="button image-upload9" value="Browse">
    </p>
    <div class="image-preview9"><img src="<?php echo $meta['image9']; ?>" style="max-width: 250px;"></div>

     <label for="your_fields[image8]">3rd Image</label><br>
    	<input type="text" name="your_fields[image8]" id="your_fields[image8]" class="meta-image8 regular-text" value="<?php echo $meta['image8']; ?>">
    	<input type="button" class="button image-upload8" value="Browse">
    </p>
    <div class="image-preview8"><img src="<?php echo $meta['image8']; ?>" style="max-width: 250px;"></div>

    <label for="your_fields[image7]">4th Image</label><br>
    	<input type="text" name="your_fields[image7]" id="your_fields[image7]" class="meta-image7 regular-text" value="<?php echo $meta['image7']; ?>">
    	<input type="button" class="button image-upload7" value="Browse">
    </p>
    <div class="image-preview7"><img src="<?php echo $meta['image7']; ?>" style="max-width: 250px;"></div>

     <label for="your_fields[image6]">5th Image</label><br>
    	<input type="text" name="your_fields[image6]" id="your_fields[image6]" class="meta-image6 regular-text" value="<?php echo $meta['image6']; ?>">
    	<input type="button" class="button image-upload6" value="Browse">
    </p>
    <div class="image-preview6"><img src="<?php echo $meta['image6']; ?>" style="max-width: 250px;"></div>

	
		<p>
    	<label for="your_fields[text6]">Important news heading</label>
    	<br>
    	<input type="text" name="your_fields[text6]" id="your_fields[text6]" class="regular-text" value="<?php echo $meta['text6']; ?>">
    </p>

    <p>
    	<label for="your_fields[textarea4]">Important news Description</label>
    	<br>
    	<textarea name="your_fields[textarea4]" id="your_fields[textarea4]" rows="5" cols="30" style="width:500px;"><?php echo $meta['textarea4']; ?></textarea>
    </p>
    <label for="your_fields[image5]">Important news Image</label><br>
    	<input type="text" name="your_fields[image5]" id="your_fields[image5]" class="meta-image5 regular-text" value="<?php echo $meta['image5']; ?>">
    	<input type="button" class="button image-upload5" value="Browse">
    </p>
    <div class="image-preview5"><img src="<?php echo $meta['image5']; ?>" style="max-width: 250px;"></div>


		<p>
    	<label for="your_fields[text3]">Work with us</label>
    	<br>
    	<input type="text" name="your_fields[text4]" id="your_fields[text4]" class="regular-text" value="<?php echo $meta['text4']; ?>">
    </p>    


    <p>
    	<label for="your_fields[text3]">Together Heading</label>
    	<br>
    	<input type="text" name="your_fields[text3]" id="your_fields[text3]" class="regular-text" value="<?php echo $meta['text3']; ?>">
    </p>

    <p>
    	<label for="your_fields[textarea3]">Together Description</label>
    	<br>
    	<textarea name="your_fields[textarea3]" id="your_fields[textarea3]" rows="5" cols="30" style="width:500px;"><?php echo $meta['textarea3']; ?></textarea>
    </p>


     <p>
    	<label for="your_fields[text5]">Search Jobs Button</label>
    	<br>
    	<input type="text" name="your_fields[text5]" id="your_fields[text5]" class="regular-text" value="<?php echo $meta['text5']; ?>">
    </p>


    <?php }
    else if ( 'page-templates/aboutus.php' == $page_template ){
    ?>

    <p>
    	<label for="your_fields[text16]">Statistics Heading</label>
    	<br>
    	<input type="text" name="your_fields[text16]" id="your_fields[text16]" class="regular-text" value="<?php echo $meta['text16']; ?>">
    </p>

     <p>
    	<label for="your_fields[textarea0]">Statistics Description</label>
    	<br>
    	<textarea name="your_fields[textarea0]" id="your_fields[textarea0]" rows="5" cols="30" style="width:500px;"><?php echo $meta['textarea0']; ?></textarea>
    </p>


    <p>
    	<label for="your_fields[text17]">Leadership Heading</label>
    	<br>
    	<input type="text" name="your_fields[text17]" id="your_fields[text17]" class="regular-text" value="<?php echo $meta['text17']; ?>">
    </p>

     <p>
    	<label for="your_fields[textarea10]">Leadership Description</label>
    	<br>
    	<textarea name="your_fields[textarea10]" id="your_fields[textarea10]" rows="5" cols="30" style="width:500px;"><?php echo $meta['textarea10']; ?></textarea>
    </p>

     <p>
    	<label for="your_fields[text18]">Newsletter Heading</label>
    	<br>
    	<input type="text" name="your_fields[text18]" id="your_fields[text18]" class="regular-text" value="<?php echo $meta['text18']; ?>">
    </p>

     <p>
    	<label for="your_fields[text19]">Sign up Button</label>
    	<br>
    	<input type="text" name="your_fields[text19]" id="your_fields[text19]" class="regular-text" value="<?php echo $meta['text19']; ?>">
    </p>

    <p>
    	<label for="your_fields[text20]">Newsletter</label>
    	<br>
    	<input type="text" name="your_fields[text20]" id="your_fields[text20]" class="regular-text" value="<?php echo $meta['text20']; ?>">
    </p>

    <p>
    	<label for="your_fields[text21]">Name</label>
    	<br>
    	<input type="text" name="your_fields[text21]" id="your_fields[text21]" class="regular-text" value="<?php echo $meta['text21']; ?>">
    </p>

    <p>
    	<label for="your_fields[text22]">Email</label>
    	<br>
    	<input type="text" name="your_fields[text22]" id="your_fields[text22]" class="regular-text" value="<?php echo $meta['text22']; ?>">
    </p>

    <p>
    	<label for="your_fields[text23]">Phone</label>
    	<br>
    	<input type="text" name="your_fields[text23]" id="your_fields[text23]" class="regular-text" value="<?php echo $meta['text23']; ?>">
    </p>

    <p>
    	<label for="your_fields[text24]">Our mission</label>
    	<br>
    	<input type="text" name="your_fields[text24]" id="your_fields[text24]" class="regular-text" value="<?php echo $meta['text24']; ?>">
    </p>

    <p>
    	<label for="your_fields[textarea12]">Mission Description</label>
    	<br>
    	<textarea name="your_fields[textarea12]" id="your_fields[textarea12]" rows="5" cols="30" style="width:500px;"><?php echo $meta['textarea12']; ?></textarea>
    </p>

    <p>
    	<label for="your_fields[text25]">Our vision</label>
    	<br>
    	<input type="text" name="your_fields[text25]" id="your_fields[text25]" class="regular-text" value="<?php echo $meta['text25']; ?>">
    </p>

    <p>
    	<label for="your_fields[textarea13]">Vision Description</label>
    	<br>
    	<textarea name="your_fields[textarea13]" id="your_fields[textarea13]" rows="5" cols="30" style="width:500px;"><?php echo $meta['textarea13']; ?></textarea>
    </p>


    <p>
  <label for="your_fields[image11]">Mission Image</label><br>
    	<input type="text" name="your_fields[image11]" id="your_fields[image11]" class="meta-image11 regular-text" value="<?php echo $meta['image11']; ?>">
    	<input type="button" class="button image-upload11" value="Browse">
    </p>
    <div class="image-preview11"><img src="<?php echo $meta['image11']; ?>" style="max-width: 250px;"></div>

     <?php } ?>

     <?php
		if ( 'team' == $post_type ) {?>

			<p>
    	<label for="your_fields[textarea11]">Post Description</label>
    	<br>
    	<textarea name="your_fields[textarea11]" id="your_fields[textarea11]" rows="5" cols="30" style="width:500px;"><?php echo $meta['textarea11']; ?></textarea>
    </p>

		<?php  }?>	

<script>
  jQuery(document).ready(function($) {
    // Instantiates the variable that holds the media library frame.
    var meta_image_frame
    // Runs when the image button is clicked.
    $('.image-upload').click(function(e) {
      // Get preview pane
      var meta_image_preview = $(this)
        .parent()
        .parent()
        .children('.image-preview')
      // Prevents the default action from occuring.
      e.preventDefault()
      var meta_image = $(this)
        .parent()
        .children('.meta-image')
      // If the frame already exists, re-open it.
      if (meta_image_frame) {
        meta_image_frame.open()
        return
      }
      // Sets up the media library frame
      meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: {
          text: meta_image.button,
        },
      })
      // Runs when an image is selected.
      meta_image_frame.on('select', function() {
        // Grabs the attachment selection and creates a JSON representation of the model.
        var media_attachment = meta_image_frame
          .state()
          .get('selection')
          .first()
          .toJSON()
        // Sends the attachment URL to our custom image input field.
        meta_image.val(media_attachment.url)
        meta_image_preview.children('img').attr('src', media_attachment.url)
      })
      // Opens the media library frame.
      meta_image_frame.open()
    })
  })
</script>


<script>
  jQuery(document).ready(function($) {
    // Instantiates the variable that holds the media library frame.
    var meta_image_frame
    // Runs when the image button is clicked.
    $('.image-upload1').click(function(e) {
      // Get preview pane
      var meta_image_preview = $(this)
        .parent()
        .parent()
        .children('.image-preview1')
      // Prevents the default action from occuring.
      e.preventDefault()
      var meta_image = $(this)
        .parent()
        .children('.meta-image1')
      // If the frame already exists, re-open it.
      if (meta_image_frame) {
        meta_image_frame.open()
        return
      }
      // Sets up the media library frame
      meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: {
          text: meta_image.button,
        },
      })
      // Runs when an image is selected.
      meta_image_frame.on('select', function() {
        // Grabs the attachment selection and creates a JSON representation of the model.
        var media_attachment = meta_image_frame
          .state()
          .get('selection')
          .first()
          .toJSON()
        // Sends the attachment URL to our custom image input field.
        meta_image.val(media_attachment.url)
        meta_image_preview.children('img').attr('src', media_attachment.url)
      })
      // Opens the media library frame.
      meta_image_frame.open()
    })
  })
</script>


<script>
  jQuery(document).ready(function($) {
    // Instantiates the variable that holds the media library frame.
    var meta_image_frame
    // Runs when the image button is clicked.
    $('.image-upload3').click(function(e) {
      // Get preview pane
      var meta_image_preview = $(this)
        .parent()
        .parent()
        .children('.image-preview3')
      // Prevents the default action from occuring.
      e.preventDefault()
      var meta_image = $(this)
        .parent()
        .children('.meta-image3')
      // If the frame already exists, re-open it.
      if (meta_image_frame) {
        meta_image_frame.open()
        return
      }
      // Sets up the media library frame
      meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: {
          text: meta_image.button,
        },
      })
      // Runs when an image is selected.
      meta_image_frame.on('select', function() {
        // Grabs the attachment selection and creates a JSON representation of the model.
        var media_attachment = meta_image_frame
          .state()
          .get('selection')
          .first()
          .toJSON()
        // Sends the attachment URL to our custom image input field.
        meta_image.val(media_attachment.url)
        meta_image_preview.children('img').attr('src', media_attachment.url)
      })
      // Opens the media library frame.
      meta_image_frame.open()
    })
  })
</script>


<script>
  jQuery(document).ready(function($) {
    // Instantiates the variable that holds the media library frame.
    var meta_image_frame
    // Runs when the image button is clicked.
    $('.image-upload4').click(function(e) {
      // Get preview pane
      var meta_image_preview = $(this)
        .parent()
        .parent()
        .children('.image-preview4')
      // Prevents the default action from occuring.
      e.preventDefault()
      var meta_image = $(this)
        .parent()
        .children('.meta-image4')
      // If the frame already exists, re-open it.
      if (meta_image_frame) {
        meta_image_frame.open()
        return
      }
      // Sets up the media library frame
      meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: {
          text: meta_image.button,
        },
      })
      // Runs when an image is selected.
      meta_image_frame.on('select', function() {
        // Grabs the attachment selection and creates a JSON representation of the model.
        var media_attachment = meta_image_frame
          .state()
          .get('selection')
          .first()
          .toJSON()
        // Sends the attachment URL to our custom image input field.
        meta_image.val(media_attachment.url)
        meta_image_preview.children('img').attr('src', media_attachment.url)
      })
      // Opens the media library frame.
      meta_image_frame.open()
    })
  })
</script>


<script>
  jQuery(document).ready(function($) {
    // Instantiates the variable that holds the media library frame.
    var meta_image_frame
    // Runs when the image button is clicked.
    $('.image-upload5').click(function(e) {
      // Get preview pane
      var meta_image_preview = $(this)
        .parent()
        .parent()
        .children('.image-preview5')
      // Prevents the default action from occuring.
      e.preventDefault()
      var meta_image = $(this)
        .parent()
        .children('.meta-image5')
      // If the frame already exists, re-open it.
      if (meta_image_frame) {
        meta_image_frame.open()
        return
      }
      // Sets up the media library frame
      meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: {
          text: meta_image.button,
        },
      })
      // Runs when an image is selected.
      meta_image_frame.on('select', function() {
        // Grabs the attachment selection and creates a JSON representation of the model.
        var media_attachment = meta_image_frame
          .state()
          .get('selection')
          .first()
          .toJSON()
        // Sends the attachment URL to our custom image input field.
        meta_image.val(media_attachment.url)
        meta_image_preview.children('img').attr('src', media_attachment.url)
      })
      // Opens the media library frame.
      meta_image_frame.open()
    })
  })
</script>


<script>
  jQuery(document).ready(function($) {
    // Instantiates the variable that holds the media library frame.
    var meta_image_frame
    // Runs when the image button is clicked.
    $('.image-upload6').click(function(e) {
      // Get preview pane
      var meta_image_preview = $(this)
        .parent()
        .parent()
        .children('.image-preview6')
      // Prevents the default action from occuring.
      e.preventDefault()
      var meta_image = $(this)
        .parent()
        .children('.meta-image6')
      // If the frame already exists, re-open it.
      if (meta_image_frame) {
        meta_image_frame.open()
        return
      }
      // Sets up the media library frame
      meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: {
          text: meta_image.button,
        },
      })
      // Runs when an image is selected.
      meta_image_frame.on('select', function() {
        // Grabs the attachment selection and creates a JSON representation of the model.
        var media_attachment = meta_image_frame
          .state()
          .get('selection')
          .first()
          .toJSON()
        // Sends the attachment URL to our custom image input field.
        meta_image.val(media_attachment.url)
        meta_image_preview.children('img').attr('src', media_attachment.url)
      })
      // Opens the media library frame.
      meta_image_frame.open()
    })
  })
</script>


<script>
  jQuery(document).ready(function($) {
    // Instantiates the variable that holds the media library frame.
    var meta_image_frame
    // Runs when the image button is clicked.
    $('.image-upload7').click(function(e) {
      // Get preview pane
      var meta_image_preview = $(this)
        .parent()
        .parent()
        .children('.image-preview7')
      // Prevents the default action from occuring.
      e.preventDefault()
      var meta_image = $(this)
        .parent()
        .children('.meta-image7')
      // If the frame already exists, re-open it.
      if (meta_image_frame) {
        meta_image_frame.open()
        return
      }
      // Sets up the media library frame
      meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: {
          text: meta_image.button,
        },
      })
      // Runs when an image is selected.
      meta_image_frame.on('select', function() {
        // Grabs the attachment selection and creates a JSON representation of the model.
        var media_attachment = meta_image_frame
          .state()
          .get('selection')
          .first()
          .toJSON()
        // Sends the attachment URL to our custom image input field.
        meta_image.val(media_attachment.url)
        meta_image_preview.children('img').attr('src', media_attachment.url)
      })
      // Opens the media library frame.
      meta_image_frame.open()
    })
  })
</script>


<script>
  jQuery(document).ready(function($) {
    // Instantiates the variable that holds the media library frame.
    var meta_image_frame
    // Runs when the image button is clicked.
    $('.image-upload8').click(function(e) {
      // Get preview pane
      var meta_image_preview = $(this)
        .parent()
        .parent()
        .children('.image-preview8')
      // Prevents the default action from occuring.
      e.preventDefault()
      var meta_image = $(this)
        .parent()
        .children('.meta-image8')
      // If the frame already exists, re-open it.
      if (meta_image_frame) {
        meta_image_frame.open()
        return
      }
      // Sets up the media library frame
      meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: {
          text: meta_image.button,
        },
      })
      // Runs when an image is selected.
      meta_image_frame.on('select', function() {
        // Grabs the attachment selection and creates a JSON representation of the model.
        var media_attachment = meta_image_frame
          .state()
          .get('selection')
          .first()
          .toJSON()
        // Sends the attachment URL to our custom image input field.
        meta_image.val(media_attachment.url)
        meta_image_preview.children('img').attr('src', media_attachment.url)
      })
      // Opens the media library frame.
      meta_image_frame.open()
    })
  })
</script>



<script>
  jQuery(document).ready(function($) {
    // Instantiates the variable that holds the media library frame.
    var meta_image_frame
    // Runs when the image button is clicked.
    $('.image-upload9').click(function(e) {
      // Get preview pane
      var meta_image_preview = $(this)
        .parent()
        .parent()
        .children('.image-preview9')
      // Prevents the default action from occuring.
      e.preventDefault()
      var meta_image = $(this)
        .parent()
        .children('.meta-image9')
      // If the frame already exists, re-open it.
      if (meta_image_frame) {
        meta_image_frame.open()
        return
      }
      // Sets up the media library frame
      meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: {
          text: meta_image.button,
        },
      })
      // Runs when an image is selected.
      meta_image_frame.on('select', function() {
        // Grabs the attachment selection and creates a JSON representation of the model.
        var media_attachment = meta_image_frame
          .state()
          .get('selection')
          .first()
          .toJSON()
        // Sends the attachment URL to our custom image input field.
        meta_image.val(media_attachment.url)
        meta_image_preview.children('img').attr('src', media_attachment.url)
      })
      // Opens the media library frame.
      meta_image_frame.open()
    })
  })
</script>



<script>
  jQuery(document).ready(function($) {
    // Instantiates the variable that holds the media library frame.
    var meta_image_frame
    // Runs when the image button is clicked.
    $('.image-upload10').click(function(e) {
      // Get preview pane
      var meta_image_preview = $(this)
        .parent()
        .parent()
        .children('.image-preview10')
      // Prevents the default action from occuring.
      e.preventDefault()
      var meta_image = $(this)
        .parent()
        .children('.meta-image10')
      // If the frame already exists, re-open it.
      if (meta_image_frame) {
        meta_image_frame.open()
        return
      }
      // Sets up the media library frame
      meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: {
          text: meta_image.button,
        },
      })
      // Runs when an image is selected.
      meta_image_frame.on('select', function() {
        // Grabs the attachment selection and creates a JSON representation of the model.
        var media_attachment = meta_image_frame
          .state()
          .get('selection')
          .first()
          .toJSON()
        // Sends the attachment URL to our custom image input field.
        meta_image.val(media_attachment.url)
        meta_image_preview.children('img').attr('src', media_attachment.url)
      })
      // Opens the media library frame.
      meta_image_frame.open()
    })
  })
</script>

<script>
  jQuery(document).ready(function($) {
    // Instantiates the variable that holds the media library frame.
    var meta_image_frame
    // Runs when the image button is clicked.
    $('.image-upload11').click(function(e) {
      // Get preview pane
      var meta_image_preview = $(this)
        .parent()
        .parent()
        .children('.image-preview11')
      // Prevents the default action from occuring.
      e.preventDefault()
      var meta_image = $(this)
        .parent()
        .children('.meta-image11')
      // If the frame already exists, re-open it.
      if (meta_image_frame) {
        meta_image_frame.open()
        return
      }
      // Sets up the media library frame
      meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: {
          text: meta_image.button,
        },
      })
      // Runs when an image is selected.
      meta_image_frame.on('select', function() {
        // Grabs the attachment selection and creates a JSON representation of the model.
        var media_attachment = meta_image_frame
          .state()
          .get('selection')
          .first()
          .toJSON()
        // Sends the attachment URL to our custom image input field.
        meta_image.val(media_attachment.url)
        meta_image_preview.children('img').attr('src', media_attachment.url)
      })
      // Opens the media library frame.
      meta_image_frame.open()
    })
  })
</script>

    	<?php }



function save_your_fields_meta( $post_id ) {
    	// verify nonce
    	if ( !wp_verify_nonce( $_POST['your_meta_box_nonce'], basename(__FILE__) ) ) {
    		return $post_id;
    	}
    	// check autosave
    	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    		return $post_id;
    	}
    	// check permissions
    	if ( 'page' === $_POST['post_type'] ) {
    		if ( !current_user_can( 'edit_page', $post_id ) ) {
    			return $post_id;
    		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
    			return $post_id;
    		}
    	}

    	$old = get_post_meta( $post_id, 'your_fields', true );
    	$new = $_POST['your_fields'];

    	if ( $new && $new !== $old ) {
    		update_post_meta( $post_id, 'your_fields', $new );
    	} elseif ( '' === $new && $old ) {
    		delete_post_meta( $post_id, 'your_fields', $old );
    	}
    }
    add_action( 'save_post', 'save_your_fields_meta' );
?>
    

  <?php function sm_custom_meta() {
    add_meta_box( 'sm_meta', __( 'Featured Posts', 'sm-textdomain' ), 'sm_meta_callback', 'expertise' );
}
function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>
 
	<p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) checked( $featured['meta-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Featured this post', 'sm-textdomain' )?>
        </label>
        
    </div>
</p>
 
    <?php
}
add_action( 'add_meta_boxes', 'sm_custom_meta' );
?>

<?php 
/**
 * Saves the custom meta input
 */
function sm_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
 // Checks for input and saves
if( isset( $_POST[ 'meta-checkbox' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'meta-checkbox', '' );
}
 
}
add_action( 'save_post', 'sm_meta_save' );
?>





<?php function sm_custom_meta1() {
    add_meta_box( 'sm_meta', __( 'Featured Posts', 'sm-textdomain' ), 'sm_meta_callback1', 'property' );
}
function sm_meta_callback1( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>
 
	<p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) checked( $featured['meta-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Featured this post', 'sm-textdomain' )?>
        </label>
        
    </div>
</p>
 
    <?php
}
add_action( 'add_meta_boxes', 'sm_custom_meta1' );
?>

<?php 
/**
 * Saves the custom meta input
 */
function sm_meta_save1( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
 // Checks for input and saves
if( isset( $_POST[ 'meta-checkbox' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'meta-checkbox', '' );
}
 
}
add_action( 'save_post', 'sm_meta_save1' );




// A callback function to add a custom field to our "presenters" taxonomy  
function presenters_taxonomy_custom_fields($tag) {  
   // Check for existing taxonomy meta for the term you're editing  
    $t_id = $tag->term_id; // Get the ID of the term you're editing  
    $term_meta = get_option( "taxonomy_term_$t_id" ); // Do the check  
?>  
  
<tr class="form-field">  
    <th scope="row" valign="top">  
        <label for="sub_head"><?php _e('Sub Heading'); ?></label>  
    </th>  
    <td>  
        <input type="textarea" name="term_meta[sub_head]" id="term_meta[sub_head]" size="25" style="width:60%;" value="<?php echo $term_meta['sub_head'] ? $term_meta['sub_head'] : ''; ?>"><br />  
        <span class="description"><?php _e('Enter sub-Heading Here'); ?></span>  
    </td>  
</tr>  
  
<?php  
} 
// A callback function to save our extra taxonomy field(s)  
function save_taxonomy_custom_fields( $term_id ) {  
    if ( isset( $_POST['term_meta'] ) ) {  
        $t_id = $term_id;  
        $term_meta = get_option( "taxonomy_term_$t_id" );  
        $cat_keys = array_keys( $_POST['term_meta'] );  
            foreach ( $cat_keys as $key ){  
            if ( isset( $_POST['term_meta'][$key] ) ){  
                $term_meta[$key] = $_POST['term_meta'][$key];  
            }  
        }  
        //save the option array  
        update_option( "taxonomy_term_$t_id", $term_meta );  
    }  
}  
// Add the fields to the "presenters" taxonomy, using our callback function  
add_action( 'property_types_edit_form_fields', 'presenters_taxonomy_custom_fields', 10, 2 );  
  
// Save the changes made on the "presenters" taxonomy, using our callback function  
add_action( 'edited_property_types', 'save_taxonomy_custom_fields', 10, 2 );  






function edit_form_tag( ) {
    echo ' enctype="multipart/form-data"';
}
add_action( 'category_term_edit_form_tag' , 'edit_form_tag' );
add_action( 'property_types_term_edit_form_tag' , 'edit_form_tag' );


/** Add New Field To Category **/
function additional_category_fields( $term, $tax ) {
    $uploadID   = get_term_meta( $term->term_id, '_term_image', true );             // Retrieve our Attachment ID from the post_meta Database Table
    $feedback   = get_term_meta( $term->term_id, '_term_image_feedback', true );    // Retrieve any upload feedback from the Optoins Database Table
  ?>

    <tr class="form-field">
        <th scope="row" valign="top"><label for="meta-order"><?php _e( 'Property Image' ); ?></label></th>
        <td>
            <div id="catImage">

                <!-- Create a nonce to validate against -->
                <input type="hidden" name="upload_meta_nonce" value="<?php echo wp_create_nonce( basename( __FILE__ ) ); ?>" />

                <!-- Define our actual upload field -->
                Please choose an image: <input type="file" name="_uploaded_file" value="" />

                <?php 
                  if( is_numeric( $uploadID ) ) :                                       // IF our upload ID is actually numeric, proceed

                    /***
                    /*  In this case we are pulling an image, if we are uploading
                    /*  something such as a PDF we could use the built-in function
                    /*  wp_get_attachment_url( $id );
                    /*  codex.wordpress.org/Function_Reference/wp_get_attachment_url
                    ***/
                    $imageArr = wp_get_attachment_image_src( $uploadID, 'thumbnail' );     // Get the URL of the medium sized image
                    $imageURL = $imageArr[0];                                           // wp_get_attachment_image_src() returns an array, index 0 is our URL
                ?>

                    <div id="uploaded_image">
                        <a href="post.php?post=<?php echo $uploadID; ?>&action=edit" target="_blank">Edit Image</a><br />

                        <!-- Display our image using the URL retrieved earlier -->
                        <a href="post.php?post=<?php echo $uploadID; ?>&action=edit" target="_blank"><img src="<?php echo $imageURL; ?>" /></a><br /><br />
                    </div>

                <!-- IF we received feedback, something went wrong and we need to show that feedback. -->               
                <?php elseif( ! empty( $feedback ) ) : ?>

                    <p style="color:red;font-size:12px;font-weight;bold;font-style:italic;"><?php echo $feedback; ?></p>

                <?php endif; ?>

            </div>
            <span class="description"><?php _e( 'Upload an appropriate image.' ); ?></span>
                <br />
                <br />



        </td> 
    </tr>

  <?php
    /** Since we've shown the user the feedback they need to see, we can delete our meta **/
    delete_term_meta( $term->term_id, '_term_image_feedback' );
}
add_action( 'property_types_edit_form_fields', 'additional_category_fields', 10, 2 ); 



/** Save Category Meta **/
function save_category_fields( $term_id ) {

    // Make sure that the nonce is set, taxonomy is set, and that our uploaded file is not empty
    if(
      isset( $_POST['upload_meta_nonce'] ) && wp_verify_nonce( $_POST['upload_meta_nonce'], basename( __FILE__ ) ) &&
      isset( $_POST['taxonomy'] ) && isset( $_FILES['_uploaded_file'] ) && !empty( $_FILES['_uploaded_file'] )
    ) {
        $supportedTypes = array( 'image/gif', 'image/jpeg', 'image/png' );                      // Only accept image mime types. - List of mimetypes: http://en.wikipedia.org/wiki/Internet_media_type
        $fileArray      = wp_check_filetype( basename( $_FILES['_uploaded_file']['name'] ) );   // Get the mime type and extension.
        $fileType       = $fileArray['type'];                                                   // Store our file type

        // Verify that the type given is what we're expecting
        if( in_array( $fileType, $supportedTypes ) ) {
            $uploadStatus = wp_handle_upload( $_FILES['_uploaded_file'], array( 'test_form' => false ) );   // Let WordPress handle the upload

            // Make sure that the file was uploaded correctly, without error
            if( isset( $uploadStatus['file'] ) ) {
                require_once(ABSPATH . "wp-admin" . '/includes/image.php');

                // Let's add the image to our media library so we get access to metadata
                $imageID = wp_insert_attachment( array(
                        'post_mime_type'    => $uploadStatus['type'],
                        'post_title'        => preg_replace( '/\.[^.]+$/', '', basename( $uploadStatus['file'] ) ),
                        'post_content'      => '',
                        'post_status'       => 'publish'
                    ),
                    $uploadStatus['file']
                );

                // Generate our attachment metadata then update the file.
                $attachmentData = wp_generate_attachment_metadata( $imageID, $uploadStatus['file'] );
                wp_update_attachment_metadata( $imageID,  $attachmentData );


                $existingImage = get_term_meta( $term_id, '_term_image', true );        // IF a file already exists in this meta, grab it
                if( ! empty( $existingImage ) && is_numeric( $existingImage ) ) {       // IF the meta does exist, delete it.
                    wp_delete_attachment( $existingImage );
                }

                update_term_meta( $term_id, '_term_image', $imageID );                  // Update our meta with the new attachment ID
                delete_term_meta( $term_id, '_term_image_feedback' );                   // Just in case there's a feedback meta, delete it - theoretically it shouldn't exist at this point.
            }
            else {
                $uploadFeedback = 'There was a problem with your uploaded file. Contact Administrator.';    // Something major went wrong, enable debugging
            }
        }
        else {
            $uploadFeedback = 'Image Files only: JPEG/JPG, GIF, PNG';   // Wrong file type
        }

        // Update our Feedback meta
        if( isset( $uploadFeedback ) ) {
            update_term_meta( $term_id, '_term_image_feedback', $uploadFeedback );
        }
    }
}
add_action ( 'edited_property_types', 'save_category_fields');

?>








<?php
function edit_form_tag1( ) {
    echo ' enctype="multipart/form-data"';
}
add_action( 'category_term_edit_form_tag' , 'edit_form_tag1' );
add_action( 'property_types_term_edit_form_tag' , 'edit_form_tag1' );


/** Add New Field To Category **/
function additional_category_fields1( $term, $tax ) {
    $uploadID1   = get_term_meta( $term->term_id, '_term_image1', true );             // Retrieve our Attachment ID from the post_meta Database Table
    $feedback1   = get_term_meta( $term->term_id, '_term_image_feedback', true );    // Retrieve any upload feedback from the Optoins Database Table
  ?>

    <tr class="form-field1">
        <th scope="row" valign="top"><label for="meta-order"><?php _e( 'Property Banner Image' ); ?></label></th>
        <td>
            <div id="catImage">

                <!-- Create a nonce to validate against -->
                <input type="hidden" name="upload_meta_nonce1" value="<?php echo wp_create_nonce( basename( __FILE__ ) ); ?>" />

                <!-- Define our actual upload field -->
                Please choose an image: <input type="file" name="_uploaded_file1" value="" />

                <?php 
                  if( is_numeric( $uploadID1 ) ) :                                       // IF our upload ID is actually numeric, proceed

                    /***
                    /*  In this case we are pulling an image, if we are uploading
                    /*  something such as a PDF we could use the built-in function
                    /*  wp_get_attachment_url( $id );
                    /*  codex.wordpress.org/Function_Reference/wp_get_attachment_url
                    ***/
                    $imageArr1 = wp_get_attachment_image_src( $uploadID1, 'thumbnail' );     // Get the URL of the medium sized image
                    $imageURL1 = $imageArr1[0];                                           // wp_get_attachment_image_src() returns an array, index 0 is our URL
                ?>

                    <div id="uploaded_image1">
                        <a href="post.php?post=<?php echo $uploadID1; ?>&action=edit" target="_blank">Edit Image</a><br />

                        <!-- Display our image using the URL retrieved earlier -->
                        <a href="post.php?post=<?php echo $uploadID1; ?>&action=edit" target="_blank"><img src="<?php echo $imageURL1; ?>" /></a><br /><br />
                    </div>

                <!-- IF we received feedback1, something went wrong and we need to show that feedback1. -->               
                <?php elseif( ! empty( $feedback1 ) ) : ?>

                    <p style="color:red;font-size:12px;font-weight;bold;font-style:italic;"><?php echo $feedback1; ?></p>

                <?php endif; ?>

            </div>
            <span class="description1"><?php _e( 'Upload an appropriate image.' ); ?></span>
                <br />
                <br />



        </td> 
    </tr>

  <?php
    /** Since we've shown the user the feedback they need to see, we can delete our meta **/
    delete_term_meta( $term->term_id, '_term_image_feedback' );
}
add_action( 'property_types_edit_form_fields', 'additional_category_fields1', 10, 2 ); 



/** Save Category Meta **/
function save_category_fields1( $term_id ) {

    // Make sure that the nonce is set, taxonomy is set, and that our uploaded file is not empty
    if(
      isset( $_POST['upload_meta_nonce1'] ) && wp_verify_nonce( $_POST['upload_meta_nonce1'], basename( __FILE__ ) ) &&
      isset( $_POST['taxonomy'] ) && isset( $_FILES['_uploaded_file1'] ) && !empty( $_FILES['_uploaded_file1'] )
    ) {
        $supportedTypes = array( 'image/gif', 'image/jpeg', 'image/png' );                      // Only accept image mime types. - List of mimetypes: http://en.wikipedia.org/wiki/Internet_media_type
        $fileArray      = wp_check_filetype( basename( $_FILES['_uploaded_file1']['name'] ) );   // Get the mime type and extension.
        $fileType       = $fileArray['type'];                                                   // Store our file type

        // Verify that the type given is what we're expecting
        if( in_array( $fileType, $supportedTypes ) ) {
            $uploadStatus = wp_handle_upload( $_FILES['_uploaded_file1'], array( 'test_form' => false ) );   // Let WordPress handle the upload

            // Make sure that the file was uploaded correctly, without error
            if( isset( $uploadStatus['file'] ) ) {
                require_once(ABSPATH . "wp-admin" . '/includes/image.php');

                // Let's add the image to our media library so we get access to metadata
                $imageID = wp_insert_attachment( array(
                        'post_mime_type'    => $uploadStatus['type'],
                        'post_title'        => preg_replace( '/\.[^.]+$/', '', basename( $uploadStatus['file'] ) ),
                        'post_content'      => '',
                        'post_status'       => 'publish'
                    ),
                    $uploadStatus['file']
                );

                // Generate our attachment metadata then update the file.
                $attachmentData = wp_generate_attachment_metadata( $imageID, $uploadStatus['file'] );
                wp_update_attachment_metadata( $imageID,  $attachmentData );


                $existingImage = get_term_meta( $term_id, '_term_image1', true );        // IF a file already exists in this meta, grab it
                if( ! empty( $existingImage ) && is_numeric( $existingImage ) ) {       // IF the meta does exist, delete it.
                    wp_delete_attachment( $existingImage );
                }

                update_term_meta( $term_id, '_term_image1', $imageID );                  // Update our meta with the new attachment ID
                delete_term_meta( $term_id, '_term_image_feedback' );                   // Just in case there's a feedback meta, delete it - theoretically it shouldn't exist at this point.
            }
            else {
                $uploadFeedback = 'There was a problem with your uploaded file. Contact Administrator.';    // Something major went wrong, enable debugging
            }
        }
        else {
            $uploadFeedback = 'Image Files only: JPEG/JPG, GIF, PNG';   // Wrong file type
        }

        // Update our Feedback meta
        if( isset( $uploadFeedback ) ) {
            update_term_meta( $term_id, '_term_image_feedback', $uploadFeedback );
        }
    }
}
add_action ( 'edited_property_types', 'save_category_fields1');

?>










<?php
function edit_form_tag2( ) {
    echo ' enctype="multipart/form-data"';
}
add_action( 'category_term_edit_form_tag' , 'edit_form_tag2' );
add_action( 'market_types_term_edit_form_tag' , 'edit_form_tag2' );


/** Add New Field To Category **/
function additional_category_fields2( $term, $tax ) {
    $uploadID2   = get_term_meta( $term->term_id, '_term_image2', true );             // Retrieve our Attachment ID from the post_meta Database Table
    $feedback2   = get_term_meta( $term->term_id, '_term_image_feedback', true );    // Retrieve any upload feedback from the Optoins Database Table
  ?>

    <tr class="form-field2">
        <th scope="row" valign="top"><label for="meta-order"><?php _e( 'Market Image' ); ?></label></th>
        <td>
            <div id="catImage">

                <!-- Create a nonce to validate against -->
                <input type="hidden" name="upload_meta_nonce2" value="<?php echo wp_create_nonce( basename( __FILE__ ) ); ?>" />

                <!-- Define our actual upload field -->
                Please choose an image: <input type="file" name="_uploaded_file2" value="" />

                <?php 
                  if( is_numeric( $uploadID2 ) ) :                                       // IF our upload ID is actually numeric, proceed

                    /***
                    /*  In this case we are pulling an image, if we are uploading
                    /*  something such as a PDF we could use the built-in function
                    /*  wp_get_attachment_url( $id );
                    /*  codex.wordpress.org/Function_Reference/wp_get_attachment_url
                    ***/
                    $imageArr2 = wp_get_attachment_image_src( $uploadID2, 'thumbnail' );     // Get the URL of the medium sized image
                    $imageURL2 = $imageArr2[0];                                           // wp_get_attachment_image_src() returns an array, index 0 is our URL
                ?>

                    <div id="uploaded_image2">
                        <a href="post.php?post=<?php echo $uploadID2; ?>&action=edit" target="_blank">Edit Image</a><br />

                        <!-- Display our image using the URL retrieved earlier -->
                        <a href="post.php?post=<?php echo $uploadID2; ?>&action=edit" target="_blank"><img src="<?php echo $imageURL2; ?>" /></a><br /><br />
                    </div>

                <!-- IF we received feedback1, something went wrong and we need to show that feedback1. -->               
                <?php elseif( ! empty( $feedback2 ) ) : ?>

                    <p style="color:red;font-size:12px;font-weight;bold;font-style:italic;"><?php echo $feedback2; ?></p>

                <?php endif; ?>

            </div>
            <span class="description2"><?php _e( 'Upload an appropriate image.' ); ?></span>
                <br />
                <br />



        </td> 
    </tr>

  <?php
    /** Since we've shown the user the feedback they need to see, we can delete our meta **/
    delete_term_meta( $term->term_id, '_term_image_feedback' );
}
add_action( 'market_types_edit_form_fields', 'additional_category_fields2', 10, 2 ); 



/** Save Category Meta **/
function save_category_fields2( $term_id ) {

    // Make sure that the nonce is set, taxonomy is set, and that our uploaded file is not empty
    if(
      isset( $_POST['upload_meta_nonce2'] ) && wp_verify_nonce( $_POST['upload_meta_nonce2'], basename( __FILE__ ) ) &&
      isset( $_POST['taxonomy'] ) && isset( $_FILES['_uploaded_file2'] ) && !empty( $_FILES['_uploaded_file2'] )
    ) {
        $supportedTypes = array( 'image/gif', 'image/jpeg', 'image/png' );                      // Only accept image mime types. - List of mimetypes: http://en.wikipedia.org/wiki/Internet_media_type
        $fileArray      = wp_check_filetype( basename( $_FILES['_uploaded_file2']['name'] ) );   // Get the mime type and extension.
        $fileType       = $fileArray['type'];                                                   // Store our file type

        // Verify that the type given is what we're expecting
        if( in_array( $fileType, $supportedTypes ) ) {
            $uploadStatus = wp_handle_upload( $_FILES['_uploaded_file2'], array( 'test_form' => false ) );   // Let WordPress handle the upload

            // Make sure that the file was uploaded correctly, without error
            if( isset( $uploadStatus['file'] ) ) {
                require_once(ABSPATH . "wp-admin" . '/includes/image.php');

                // Let's add the image to our media library so we get access to metadata
                $imageID = wp_insert_attachment( array(
                        'post_mime_type'    => $uploadStatus['type'],
                        'post_title'        => preg_replace( '/\.[^.]+$/', '', basename( $uploadStatus['file'] ) ),
                        'post_content'      => '',
                        'post_status'       => 'publish'
                    ),
                    $uploadStatus['file']
                );

                // Generate our attachment metadata then update the file.
                $attachmentData = wp_generate_attachment_metadata( $imageID, $uploadStatus['file'] );
                wp_update_attachment_metadata( $imageID,  $attachmentData );


                $existingImage = get_term_meta( $term_id, '_term_image2', true );        // IF a file already exists in this meta, grab it
                if( ! empty( $existingImage ) && is_numeric( $existingImage ) ) {       // IF the meta does exist, delete it.
                    wp_delete_attachment( $existingImage );
                }

                update_term_meta( $term_id, '_term_image2', $imageID );                  // Update our meta with the new attachment ID
                delete_term_meta( $term_id, '_term_image_feedback' );                   // Just in case there's a feedback meta, delete it - theoretically it shouldn't exist at this point.
            }
            else {
                $uploadFeedback = 'There was a problem with your uploaded file. Contact Administrator.';    // Something major went wrong, enable debugging
            }
        }
        else {
            $uploadFeedback = 'Image Files only: JPEG/JPG, GIF, PNG';   // Wrong file type
        }

        // Update our Feedback meta
        if( isset( $uploadFeedback ) ) {
            update_term_meta( $term_id, '_term_image_feedback', $uploadFeedback );
        }
    }
}
add_action ( 'edited_market_types', 'save_category_fields2');






	
add_action( 'wp_ajax_custom_action', 'custom_action' );
add_action( 'wp_ajax_nopriv_custom_action', 'custom_action' );


function custom_action() {

	if($_POST){

global $wpdb;

	//We shall SQL escape all inputs
	$username = $wpdb->escape($_REQUEST['username']);
	$password = $wpdb->escape($_REQUEST['password']);
	$remember = $wpdb->escape($_REQUEST['rememberme']);

	if($remember) $remember = "true";
	else $remember = "false";

	$login_data = array();
	$login_data['user_login'] = $username;
	$login_data['user_password'] = $password;
	$login_data['remember'] = $remember;


	$user_verify = wp_signon( $login_data, false );

	// echo json_encode(array('message'=>($login_data['user_login'])));
	// die();

		if ( is_wp_error($user_verify) ) 
	{
			 echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));

	   //header("Location: " . home_url() . "/login/error/");
	   // Note, I have created a page called "Error" that is a child of the login page to handle errors. This can be anything, but it seemed a good way to me to handle errors.
	 } 
	 else {	
	     echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful, redirecting...')));
	     
	 		//wp_redirect(home_url());
    	exit();

	 }
}
	die();

}



add_action( 'wp_ajax_register_action', 'register_action' );
add_action( 'wp_ajax_nopriv_register_action', 'register_action' );


function register_action(){

	if ( is_user_logged_in() ) {
   	header( 'Location:' . home_url() );
	}else{
		global $wpdb;
		$errors = array();

		////////name validation
		$username = $wpdb->escape($_REQUEST['username']);
		if ( strpos($username, ' ') !== false ) { 
		echo json_encode(array('code'=>1, 'message'=>__('Sorry, no spaces allowed in usernames')));

    	$errors['username'] = "Sorry, no spaces allowed in usernames";
		}
		if(empty($username)) { 
			$errors['username'] = "Please enter a username";

			echo json_encode(array('code'=>2, 'message'=>__('Please enter a username')));

		} elseif( username_exists( $username ) ) {
		
			echo json_encode(array('code'=>3, 'message'=>__('Username already exists, please try another')));

			$errors['username'] = "Username already exists, please try another";
		}

		///////email validation
		$email = $wpdb->escape($_REQUEST['email']);
		if( !is_email( $email ) ) { 
			
			echo json_encode(array('code'=>4, 'message'=>__('Please enter a valid email')));

			$errors['email'] = "Please enter a valid email";
		} elseif( email_exists( $email ) ) {

			echo json_encode(array('code'=>5, 'message'=>__('This email address is already in use')));

			$errors['email'] = "This email address is already in use";
		}



		//password validation
		if(0 === preg_match("/.{6,}/", $_POST['password'])){
		 
		  echo json_encode(array('code'=>6, 'message'=>__('Password must be at least six characters')));

		  $errors['password'] = "Password must be at least six characters";
		}

		// Check password confirmation_matches
		if(0 !== strcmp($_POST['password'], $_POST['password_confirmation'])){
		  $errors['password_confirmation'] = "Passwords do not match";

		  echo json_encode(array('code'=>7, 'message'=>__('Passwords do not match')));
		}


				// Check terms of service is agreed to
		if($_POST['terms'] != "Yes"){
			echo json_encode(array('code'=>8, 'message'=>__('You must agree to Terms of Service')));

			$errors['terms'] = "You must agree to Terms of Service";
		}

		//print_r($errors['password']);die();


		if(0 === count($errors)) {

			$password = $_POST['password'];

			$new_user_id = wp_create_user( $username, $password, $email );

			echo json_encode(array('code'=>0, 'message'=>__('Success')));

			// You could do all manner of other things here like send an email to the user, etc. I leave that to you.

			$success = 1;

			//header( 'Location:' . get_bloginfo('url') . '/login/?success=1&u=' . $username );

			}
	

	}//else ends

	die();

}// function ends
?>



<?php

require_once(ABSPATH . "wp-admin" . '/includes/image.php');
require_once(ABSPATH . "wp-admin" . '/includes/file.php');
require_once(ABSPATH . "wp-admin" . '/includes/media.php');


add_shortcode( 'wpshout_frontend_post', 'wpshout_frontend_post' );
function wpshout_frontend_post() {

	wpshout_save_post_if_submitted();
    ?>
<div id="postbox">
    <form id="new_post" name="new_post" method="post" enctype="multipart/form-data">
   <div class="contact-row row">
   	<div class="col-md-6 col-sm-12 col-xs-12">

   	<div class="">
    <p><label class="input-name" for="title">Title</label><br />
        <input class="input-text  ml-auto" type="text" id="title" value="" tabindex="1" size="20" name="title" />
    </p>
  </div>

  <div class="col-md-12 col-sm-12 col-xs-12 text-left">
    <p>
        <label class="input-msg text-left" for="content">Post Content</label><br />
        <textarea class="msg-area" id="content" tabindex="3" name="content" cols="50" rows="6"></textarea>
    </p>
  </div>

    <div>
    <p><label class="input-name" for="post_tags">Tags</label>
		<input class="input-text ml-auto" type="text" value="" tabindex="5" size="16" name="post_tags" id="post_tags" /></p>
		</div>

		<div class="check-box col-md-6 col-sm-12 col-xs-12 text-left">
		<input type="file" name="featured" id="featured" size="50"><br><br>
    <p><?php wp_dropdown_categories( 'show_option_none=Category&tab_index=4&taxonomy=category' ); ?></p>
  </div>


    <?php wp_nonce_field( 'wps-frontend-post' ); ?>

    <p align="right"><input type="submit" class="contact-submit" value="Publish" tabindex="6" id="submit" name="submit" /></p>
    	</div>
    </div>
   </form>
</div>
    <?php
}


function wpshout_save_post_if_submitted() {
    // Stop running function if form wasn't submitted
    if ( !isset($_POST['title']) ) {
        return;
    }

    // Check that the nonce was set and valid
    if( !wp_verify_nonce($_POST['_wpnonce'], 'wps-frontend-post') ) {
        echo 'Did not save because your form seemed to be invalid. Sorry';
        return;
    }

    // Do some minor form validation to make sure there is content
    if (strlen($_POST['title']) < 3) {
        echo 'Please enter a title. Titles must be at least three characters long.';
        return;
    }
    if (strlen($_POST['content']) < 5) {
        echo 'Please enter content more than 100 characters in length';
        return;
    }


			$uploaddir = wp_upload_dir();
			$file = $_FILES['featured' ];
			$uploadfile = $uploaddir['path'] . '/' . basename( $file['name'] );
			move_uploaded_file( $file['tmp_name'] , $uploadfile );
			$filename = basename( $uploadfile );
			$wp_filetype = wp_check_filetype(basename($filename), null );
			$attachment = array(
			'post_mime_type' => $wp_filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
			'post_content' => '',
			'post_status' => 'inherit',
			'menu_order' => $_i + 1000
			);
			$attach_id = wp_insert_attachment( $attachment, $uploadfile );


    // Add the content of the form to $post as an array
    $post = array(
        'post_title'    => $_POST['title'],
        'post_content'  => $_POST['content'],
        
        'post_category' => $_POST['cat'], 
        'tags_input'    => $_POST['post_tags'],
        'post_status'   => 'draft',   // Could be: publish
        'post_type' 	=> 'post' // Could be: `page` or your CPT
    );
    
    

    $pid = wp_insert_post($post);

    update_post_meta($pid,'_thumbnail_id',$attach_id);
		set_post_thumbnail( $pid, $thumbnail_id );

    echo 'Saved your post successfully! :)';
}

?>







<?php
add_action( 'add_meta_boxes', 'mb_add_custom_box' );
/* Do something with the data entered */
add_action( 'save_post', 'mb_save_postdata' );
/* Adds a box to the main column on the Post and Page edit screens */
function mb_add_custom_box() {
    add_meta_box(
        'mb_sectionid',
        __( 'My Repeater Fields', 'myplugin_textdomain' ),
        'mb_inner_custom_box',
        'slider');
}
/* Prints the box content */
function mb_inner_custom_box() {
    global $post;
    // Use nonce for verification
    wp_nonce_field( plugin_basename( __FILE__ ), 'mbMeta_noncename' );
    ?>
    <div id="meta_inner">
    <?php
    //get the saved meta as an array
    $songs = get_post_meta($post->ID,'songs',false);
    $c = 0;
    if ( count( $songs ) > 0 ) {
        if(!empty($songs)){
            foreach( $songs as $track_val ) {
                foreach( $track_val as $track ) {
                    if ( isset( $track['title'] ) || isset( $track['track'] ) ) {
                        printf( '<p>Title <input type="text" name="songs[%1$s][title]" value="%2$s" /> -- Description : <input type="text" name="songs[%1$s][track]" value="%3$s" /><span class="remove">%4$s</span></p>', $c, $track['title'], $track['track'], __( 'Remove Field' ) );
                        $c = $c +1;
                    }
                }
            }
        }    
    }
    ?>
<span id="here"></span>
<span class="add"><?php _e('Add Fields'); ?></span>
<script>
    var $ =jQuery.noConflict();
    $(document).ready(function() {
        var count = <?php echo $c; ?>;
        $(".add").click(function() {
            count = count + 1;
            $('#here').append('<p>Title <input type="text" name="songs['+count+'][title]" value="" /> -- Description : <input type="text" name="songs['+count+'][track]" value="" /><span class="remove">Remove Field</span></p>' );
            return false;
        });
        $(".remove").live('click', function() {
            $(this).parent().remove();
        });
    });
    </script>
</div><?php
}
/* When the post is saved, saves our custom data */
function mb_save_postdata( $post_id ) {
    // verify if this is an auto save routine. 
    // If it is our form has not been submitted, so we dont want to do anything
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;
    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    if ( !isset( $_POST['mbMeta_noncename'] ) )
        return;
    if ( !wp_verify_nonce( $_POST['mbMeta_noncename'], plugin_basename( __FILE__ ) ) )
        return;
    // OK, we're authenticated: we need to find and save the data
    $songs = $_POST['songs'];
    update_post_meta($post_id,'songs',$songs);
}

?>




<?php
add_action('admin_init', 'gpm_add_meta_boxes', 2);

function gpm_add_meta_boxes() {
add_meta_box( 'gpminvoice-group', 'Custom Repeatable', 'Repeatable_meta_box_display', 'slider', 'normal', 'default');
}

function Repeatable_meta_box_display() {
    global $post;
    $gpminvoice_group = get_post_meta($post->ID, 'customdata_group', true);
     wp_nonce_field( 'gpm_repeatable_meta_box_nonce', 'gpm_repeatable_meta_box_nonce' );
    ?>
    <script type="text/javascript">
    jQuery(document).ready(function( $ ){
        $( '#add-row' ).on('click', function() {
            var row = $( '.empty-row.screen-reader-text' ).clone(true);
            row.removeClass( 'empty-row screen-reader-text' );
            row.insertBefore( '#repeatable-fieldset-one tbody>tr:last' );
            return false;
        });

        $( '.remove-row' ).on('click', function() {
            $(this).parents('tr').remove();
            return false;
        });
    });
  </script>
  <table id="repeatable-fieldset-one" width="100%">
  <tbody>
    <?php
     if ( $gpminvoice_group ) :
      foreach ( $gpminvoice_group as $field ) {
    ?>
    <tr>
      <td width="15%">
        <input type="text"  placeholder="Title" name="TitleItem[]" value="<?php if($field['TitleItem'] != '') echo esc_attr( $field['TitleItem'] ); ?>" /></td> 
      <td width="70%">
      <textarea placeholder="Description" cols="55" rows="5" name="TitleDescription[]"> <?php if ($field['TitleDescription'] != '') echo esc_attr( $field['TitleDescription'] ); ?> </textarea></td>
      <td width="15%"><a class="button remove-row" href="#1">Remove</a></td>
    </tr>
    <?php
    }
    else :
    // show a blank one
    ?>
    <tr>
      <td> 
        <input type="text" placeholder="Title" title="Title" name="TitleItem[]" /></td>
      <td> 
          <textarea  placeholder="Description" name="TitleDescription[]" cols="55" rows="5">  </textarea>
          </td>
      <td><a class="button  cmb-remove-row-button button-disabled" href="#">Remove</a></td>
    </tr>
    <?php endif; ?>

    <!-- empty hidden one for jQuery -->
    <tr class="empty-row screen-reader-text">
      <td>
        <input type="text" placeholder="Title" name="TitleItem[]"/></td>
      <td>
          <textarea placeholder="Description" cols="55" rows="5" name="TitleDescription[]"></textarea>
          </td>
      <td><a class="button remove-row" href="#">Remove</a></td>
    </tr>
  </tbody>
</table>
<p><a id="add-row" class="button" href="#">Add another</a></p>
 <?php
}
add_action('save_post', 'custom_repeatable_meta_box_save');
function custom_repeatable_meta_box_save($post_id) {
    if ( ! isset( $_POST['gpm_repeatable_meta_box_nonce'] ) ||
    ! wp_verify_nonce( $_POST['gpm_repeatable_meta_box_nonce'], 'gpm_repeatable_meta_box_nonce' ) )
        return;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    if (!current_user_can('edit_post', $post_id))
        return;

    $old = get_post_meta($post_id, 'customdata_group', true);
    $new = array();
    $invoiceItems = $_POST['TitleItem'];
    $prices = $_POST['TitleDescription'];
     $count = count( $invoiceItems );
     for ( $i = 0; $i < $count; $i++ ) {
        if ( $invoiceItems[$i] != '' ) :
            $new[$i]['TitleItem'] = stripslashes( strip_tags( $invoiceItems[$i] ) );
             $new[$i]['TitleDescription'] = stripslashes( $prices[$i] ); // and however you want to sanitize
        endif;
    }
    if ( !empty( $new ) && $new != $old )
        update_post_meta( $post_id, 'customdata_group', $new );
    elseif ( empty($new) && $old )
        delete_post_meta( $post_id, 'customdata_group', $old );


}