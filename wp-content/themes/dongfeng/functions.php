<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Dongfeng Lietuva
 * @since Dongfeng Lietuva 1.0
 */

function dongfeng_setup() {
	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 580;
	}


	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);


	add_theme_support( 'title-tag' );

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
			'script',
			'style',
			'navigation-widgets',
		)
	);



}
add_action( 'after_setup_theme', 'dongfeng_setup' );



function dongfeng_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'dongfeng-style', get_stylesheet_uri(), array(), $theme_version );
}
add_action( 'wp_enqueue_scripts', 'dongfeng_register_styles' );


function dongfeng_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script( 'dongfeng-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version );
	wp_script_add_data( 'dongfeng-js', 'strategy', 'defer' );
}
add_action( 'wp_enqueue_scripts', 'dongfeng_register_scripts' );


// Remove global styles (Gutenberg)
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_footer', 'wp_enqueue_global_styles', 1);

add_action('init', 'completely_deregister_annoying_styles');
function completely_deregister_annoying_styles() {
    // Remove the actual handles (not just inline)
    wp_deregister_style('wp-img-auto-sizes-contain');
    wp_deregister_style('wp-block-library');
    wp_deregister_style('classic-theme-styles');
    wp_deregister_style('global-styles');
}

// Disable sizes=auto being added to <img> tags (WP 6.7+)
add_filter('wp_img_tag_add_auto_sizes', '__return_false');

// Disable Gutenberg for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// Disable Gutenberg for widgets
add_filter('use_widgets_block_editor', '__return_false');

// Remove block styles on frontend (optional cleanup)
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}, 100);


function dongfeng_menus() {

	$locations = array(
		'primary_1'   => __( 'Modeliai Dongfeng', 'dongfeng' ),
		'primary_1_2'   => __( 'Modeliai Forthing', 'forthing' ),
		'primary_1_3'   => __( 'Modeliai Voyah', 'voyah' ),
		'primary_1_4'   => __( 'Modeliai M-Hero', 'm-hero' ),
		'primary_2'   => __( 'Servisas ir Garantija', 'dongfeng' ),
		'primary_3'   => __( 'Savininkams', 'dongfeng' ),
		'primary_4'   => __( 'Apie Mus', 'dongfeng' ),
		'primary_5'   => __( 'Pasiūlymai', 'dongfeng' ),
		'footer'      => __( 'Footer - Modeliai', 'dongfeng' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'dongfeng_menus' );


function dongfeng_get_custom_logo( $html ) {

	$logo_id = get_theme_mod( 'custom_logo' );

	if ( ! $logo_id ) {
		return $html;
	}

	$logo = wp_get_attachment_image_src( $logo_id, 'full' );

	if ( $logo ) {
		// For clarity.
		$logo_width  = esc_attr( $logo[1] );
		$logo_height = esc_attr( $logo[2] );

		// If the retina logo setting is active, reduce the width/height by half.
		if ( get_theme_mod( 'retina_logo', false ) ) {
			$logo_width  = floor( $logo_width / 2 );
			$logo_height = floor( $logo_height / 2 );

			$search = array(
				'/width=\"\d+\"/iU',
				'/height=\"\d+\"/iU',
			);

			$replace = array(
				"width=\"{$logo_width}\"",
				"height=\"{$logo_height}\"",
			);

			// Add a style attribute with the height, or append the height to the style attribute if the style attribute already exists.
			if ( false === strpos( $html, ' style=' ) ) {
				$search[]  = '/(src=)/';
				$replace[] = "style=\"height: {$logo_height}px;\" src=";
			} else {
				$search[]  = '/(style="[^"]*)/';
				$replace[] = "$1 height: {$logo_height}px;";
			}

			$html = preg_replace( $search, $replace, $html );

		}
	}

	return $html;
}
add_filter( 'get_custom_logo', 'dongfeng_get_custom_logo' );





function dongfeng_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer - Kontaktai', 'dongfeng' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Rodomas Footer sekcijoje Kontaktu skiltyje', 'dongfeng' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer - Žemesnis', 'dongfeng' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Rodomas pačioje apačioje.', 'dongfeng' ),
			)
		)
	);

	// Footer #3.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Socialiu tinklu nuorodos', 'dongfeng' ),
				'id'          => 'sidebar-3',
				'description' => __( 'Rodomas viršuj virš pagrindnio meniu ir pačioje apačioje', 'dongfeng' ),
			)
		)
	);

	// Footer #4.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Kontaktai virsuj', 'dongfeng' ),
				'id'          => 'sidebar-4',
				'description' => __( 'Rodomi pačiam viršuj virš menu juostos', 'dongfeng' ),
			)
		)
	);
}
add_action( 'widgets_init', 'dongfeng_sidebar_registration' );


// Add to functions.php
function render_responsive_picture($image_field, $class = '', $sizes = []) {
    if (!$image_field) return '';
    
    // Default sizes if none provided
    $default_sizes = [
        'desktop' => '2048x2048',
        'laptop' => 'post-thumbnail',
        'tablet' => 'large',
        'mobile' => 'medium_large'
    ];
    
    // Merge custom sizes with defaults
    $sizes = array_merge($default_sizes, $sizes);
    
    // Get alt text
    $alt = $image_field['alt'] ?: '';
    
    ob_start();
    ?>
    <picture class="<?php echo esc_attr($class); ?>">
        <source 
            srcset="<?php echo esc_url($image_field['sizes'][$sizes['desktop']]); ?>" 
            media="(min-width: 1200px)"
        >
        <source 
            srcset="<?php echo esc_url($image_field['sizes'][$sizes['laptop']]); ?>" 
            media="(min-width: 1024px)"
        >
        <source 
            srcset="<?php echo esc_url($image_field['sizes'][$sizes['tablet']]); ?>" 
            media="(min-width: 768px)"
        >
        <img 
            src="<?php echo esc_url($image_field['sizes'][$sizes['mobile']]); ?>" 
            alt="<?php echo esc_attr($alt); ?>"
            decoding="async"
            loading="lazy"
        >
    </picture>
    <?php
    return ob_get_clean();
}

function my_acf_google_map_api($api) {
    $api['key'] = get_option('google_maps_api_key');
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');



// 1. Add the admin menu item
add_action('admin_menu', 'add_google_maps_api_menu');
function add_google_maps_api_menu() {
    add_options_page(
        'Google Maps API Settings',
        'Google Maps API',
        'manage_options',
        'google-maps-api',
        'render_google_maps_api_page'
    );
}

// 2. Render the settings page
function render_google_maps_api_page() {
    ?>
    <div class="wrap">
        <h1>Google Maps API Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('google_maps_api_options_group');
            do_settings_sections('google-maps-api');
            ?>
            <table class="form-table">
                <tr>
                    <th scope="row">Google Maps API Key</th>
                    <td>
                        <input type="text" 
                               name="google_maps_api_key" 
                               value="<?php echo esc_attr(get_option('google_maps_api_key')); ?>" 
                               class="regular-text"
                               placeholder="Enter your API key here">
                        <p class="description">Paste your Google Maps API key here.</p>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

// 3. Register the setting
add_action('admin_init', 'register_google_maps_api_setting');
function register_google_maps_api_setting() {
    register_setting('google_maps_api_options_group', 'google_maps_api_key');
}
