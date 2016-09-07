<?php
/**
 * Make theme available for translation
 * Translations can be filed in the /languages/ directory
 */
load_theme_textdomain( 'anariel', get_template_directory() . '/languages' );

$locale = get_locale();
$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );
/**
 * Enqueue the Fonts.
 */
function anariel_fonts() {
	$protocol = is_ssl() ? 'https' : 'http';
	wp_enqueue_style( 'anariel-lato', "$protocol://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Sintony:400,700|Revalia|Droid+Sans:400,700" );}
add_action( 'wp_enqueue_scripts', 'anariel_fonts' );
/*-----------------------------------------------------------------------------------*/
// Scripts
/*-----------------------------------------------------------------------------------*/
function anariel_scripts_styles() {
	/*
	 * Adds JavaScript to pages with the comment form to support sites with
	 * threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	// Loads JavaScript file with functionality specific to anariel.
	if(is_page()){ //Check if we are viewing a page
	global $wp_query;
	//Check which template is assigned to current page we are looking at
	$template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
	if($template_name == 'template-home.php'){
	wp_enqueue_script( 'circle', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array( 'jquery' ), '2.0', true );
	wp_enqueue_script( 'flex', get_template_directory_uri() . '/js/flexslider.js', array( 'jquery' ), '1.0', true );
	}}
	// Loads JavaScript file with functionality specific to anariel.
	if(is_page()){ //Check if we are viewing a page
	global $wp_query;
	//Check which template is assigned to current page we are looking at
	$template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
	if($template_name == 'template-homeone.php'){
	wp_enqueue_script( 'circle', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array( 'jquery' ), '2.0', true );
	wp_enqueue_script( 'flex', get_template_directory_uri() . '/js/flexslider.js', array( 'jquery' ), '1.0', true );
	}}
	// Loads JavaScript file with functionality specific to anariel.
	if(is_page()){ //Check if we are viewing a page
	global $wp_query;
	//Check which template is assigned to current page we are looking at
	$template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
	if($template_name == 'template-hometwo.php'){
	wp_enqueue_script( 'circle', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array( 'jquery' ), '2.0', true );
	wp_enqueue_script( 'flex', get_template_directory_uri() . '/js/flexslider.js', array( 'jquery' ), '1.0', true );
	}}
	// Loads JavaScript file with functionality specific to anariel.
	if(is_page()){ //Check if we are viewing a page
	global $wp_query;
	//Check which template is assigned to current page we are looking at
	$template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
	if($template_name == 'template-homefive.php'){
	wp_enqueue_script( 'circle', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array( 'jquery' ), '2.0', true );
	wp_enqueue_script( 'flex', get_template_directory_uri() . '/js/flexslider.js', array( 'jquery' ), '1.0', true );
	}}
	wp_enqueue_script( 'anariel-script', get_template_directory_uri() . '/js/screen.js', array( 'jquery' ), '20130211', true );
}
add_action( 'wp_enqueue_scripts', 'anariel_scripts_styles' );

/*-----------------------------------------------------------------------------------*/
/*Include Stylesheets
/*-----------------------------------------------------------------------------------*/
function anariel_enqueue_css() {

	// Loads our main stylesheet.
	wp_enqueue_style( 'anariel-style', get_stylesheet_uri() );
	wp_enqueue_style( 'anariel-skeleton', get_template_directory_uri() . '/css/skeleton.css' );

}
add_action('wp_enqueue_scripts', 'anariel_enqueue_css');
/**
 * Register widgetized area and update sidebar with default widgets
 */
function anariel_widgets_init() {
	register_sidebar( array (
		'name' => __( 'Top Bar - Call to Action Buttons', 'anariel' ),
		'id' => 'calltoaction',
		'description' => __( 'We use this sidebar for call to action buttons', 'anariel'),
		'before_widget' => '<aside class="home_widget">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => __( 'Top Bar - Social Icons', 'anariel' ),
		'id' => 'socials',
		'description' => __( 'We use this sidebar for social icons', 'anariel'),
		'before_widget' => '<aside class="home_widget">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => __( 'Home Main, Ver.3 and Ver.6 - Slider', 'anariel' ),
		'id' => 'mainslider',
		'description' => __( 'We use this sidebar for homepage slider', 'anariel'),
		'before_widget' => '<aside class="home_widget">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => __( 'Home Main, Ver.1, 2 and 6 - Intro Block', 'anariel' ),
		'id' => 'homeintroblock',
		'description' => __( 'We use this sidebar for intro block (content under the main slider)', 'anariel'),
		'before_widget' => '<aside class="home_widget">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
	register_sidebar( array (
		'name' => __( 'Home Ver.2 - Programs Intro Block', 'anariel' ),
		'id' => 'programsintroblock',
		'description' => __( 'We use this sidebar for intro block aboove three columns of programs', 'anariel'),
		'before_widget' => '<aside class="home_widget">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
	register_sidebar( array (
		'name' => __( 'Home Ver.3 and 4 - Sidebar', 'anariel' ),
		'id' => 'homethree',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => __( 'Home 6 - Recent Posts Block', 'anariel' ),
		'id' => 'homerecentpost',
		'description' => __( 'We use this sidebar to show 4 recent posts', 'anariel'),
		'before_widget' => '<aside class="home_widget">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
	register_sidebar( array (
		'name' => __( 'Footer-First Column', 'anariel' ),
		'id' => 'footerfirstcolumn',
		'description' => __( 'We use this sidebar for footer first column content', 'anariel'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => __( 'Footer-Second Column', 'anariel' ),
		'id' => 'footersecondcolumn',
		'description' => __( 'We use this sidebar for footer second column content', 'anariel'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => __( 'Footer-Third Column', 'anariel' ),
		'id' => 'footerthirdcolumn',
		'description' => __( 'We use this sidebar for footer third column content', 'anariel'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => __( 'Footer-Fourth Column', 'anariel' ),
		'id' => 'footerfourthcolumn',
		'description' => __( 'We use this sidebar for footer fourth column content', 'anariel'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => __( 'Second Footer-Left Column', 'anariel' ),
		'id' => 'secondfooterleft',
		'description' => __( 'We use this sidebar for the footer menu', 'anariel'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => __( 'Second Footer-Right Column', 'anariel' ),
		'id' => 'secondfooterright',
		'description' => __( 'We use this sidebar for the footer cart and shop', 'anariel'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => __( 'Programs Sidebar', 'anariel' ),
		'id' => 'programs',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => __( 'Get Involved and Our Events Sidebar', 'anariel' ),
		'id' => 'getinvolved',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => __( 'News Sidebar', 'anariel' ),
		'id' => 'sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => __( 'Contact Sidebar', 'anariel' ),
		'id' => 'contact',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'init', 'anariel_widgets_init' );
// ============== Define constants
define('ANARIEL_WIDGETS', get_template_directory() . '/widgets/');
// ============== Load widgets
require_once( ANARIEL_WIDGETS .'calltoaction.php' );
require_once( ANARIEL_WIDGETS .'socials.php' );
require_once( ANARIEL_WIDGETS .'homeintroblock.php' );
require_once( ANARIEL_WIDGETS .'footerabout.php' );
require_once( ANARIEL_WIDGETS .'footercontactinfo.php' );
require_once( ANARIEL_WIDGETS .'recentposts.php' );
/*-----------------------------------------------------------------------------------*/
// Header scripts and styles
/*-----------------------------------------------------------------------------------*/
function anariel_custom_styles(){
	get_template_part( 'includes/custom', 'styles' );		// Custom styles
}
add_action( 'wp_head', 'anariel_custom_styles', 50 );// add to header. 50 is the priority(Lower numbers correspond with earlier execution. Not specified = 10)
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 1280;

/**
 * Tell WordPress to run anariel() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'anariel' );

if ( ! function_exists( 'anariel' ) ):

/**
 * Sets up theme defaults and registers support for WordPress features.
 */
function anariel() {

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'home_thumbnail', 60, 60, true );
	add_image_size( 'audio_thumbnail', 150, 9999, true );
	add_image_size( 'programs_thumbnail', 420, 150, true );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Navigation Menu', 'anariel' ) );

	// Add support for Post Formats
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'video', 'image', 'quote', 'audio' ) );

	// This theme allows users to set a custom background
	add_theme_support( 'custom-background' );

	// Add support for flexible headers
 $header_args = array(
 'flex-height' => true,
 'height' => 470,
 'flex-width' => true,
 'width' => 1920,
 'header-text' => false,
 );

 add_theme_support( 'custom-header', $header_args );

	// ... and thus ends the changeable header business.

	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
	register_default_headers( array(
			'beach' => array(
			'url' => '%s/images/headers/headerimage.jpg',
			'thumbnail_url' => '%s/images/headers/headerimage-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Header Image', 'anariel' )
			),
			'urban' => array(
			'url' => '%s/images/headers/headerimage1.jpg',
			'thumbnail_url' => '%s/images/headers/headerimage1-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Header Image One', 'anariel' )
			),
			'palms' => array(
			'url' => '%s/images/headers/headerimage2.jpg',
			'thumbnail_url' => '%s/images/headers/headerimage2-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Header Image Two', 'anariel' )
			),
			'romantic' => array(
			'url' => '%s/images/headers/headerimage3.jpg',
			'thumbnail_url' => '%s/images/headers/headerimage3-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Header Image Three', 'anariel' )
			),
			'summer' => array(
			'url' => '%s/images/headers/headerimage4.jpg',
			'thumbnail_url' => '%s/images/headers/headerimage4-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Header Image 4', 'anariel' )
			),
			'landscape' => array(
			'url' => '%s/images/headers/headerimage5.jpg',
			'thumbnail_url' => '%s/images/headers/headerimage5-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Header Image Five', 'anariel' )
			)
	) );
}
endif;

if ( ! function_exists( 'anariel_admin_header_style' ) ) :

/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 * Referenced via add_custom_image_header() in anariel_setup().
 */
function anariel_admin_header_style() {
?>
<style type="text/css">
/* Shows the same border as on front end */
#heading {
	border-bottom: 1px solid #000;
	border-top: 4px solid #000;
}
/* If NO_HEADER_TEXT is false, you would style the text with these selectors:
	#headimg #name { }
	#headimg #desc { }
*/
</style>
<?php
}
endif;

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function anariel_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'anariel_page_menu_args' );

/**
 * Sets the post excerpt length to 40 characters.
 */
function anariel_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'anariel_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 */
function anariel_continue_reading_link() {
	return ' <br><br><a class="more-link" href="'. get_permalink() . '">' . __( 'Read More', 'anariel' ) . '</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and anariel_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function anariel_auto_excerpt_more( $more ) {
	return ' &hellip;' . anariel_continue_reading_link();
}
add_filter( 'excerpt_more', 'anariel_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 */
function anariel_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= anariel_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'anariel_custom_excerpt_more' );

/**
 * Remove inline styles printed when the gallery shortcode is used.
 */
function anariel_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'anariel_remove_gallery_css' );

if ( ! function_exists( 'anariel_comment' ) ) :

/**
 * Template for comments and pingbacks.
 */
function anariel_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-gravatar"><?php echo get_avatar( $comment, 65 ); ?></div>

		<div class="comment-body">
		<div class="comment-meta commentmetadata">
		<?php printf( __( '%s', 'anariel' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?><br/>
		<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'anariel' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( 'Edit', 'anariel' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<?php comment_text(); ?>

		<?php if ( $comment->comment_approved == '0' ) : ?>
		<p class="moderation"><?php _e( 'Your comment is awaiting moderation.', 'anariel' ); ?></p>
		<?php endif; ?>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->

		</div>
		<!--comment Body-->

	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'anariel' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'anariel'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 */
function anariel_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'anariel_remove_recent_comments_style' );

/**
 * Search form custom styling
 */
function anariel_search_form( $form ) {

	$form = '<form role="search" method="get" class="searchform" action="'.home_url().'" >
	<div><label class="screen-reader-text" for="s">' . __('Search', 'anariel') . '</label>
	<input type="text" class="search-input" value="' . get_search_query() . '" name="s" id="s" />
	<input type="submit" class="searchsubmit" value="'. esc_attr__('Search', 'anariel') .'" />
	</div>
	</form>';

	return $form;
}
add_filter( 'get_search_form', 'anariel_search_form' );

/**
 * Remove the default CSS style from the WP image gallery
 */
add_filter('gallery_style', create_function('$a', 'return "
<div class=\'gallery\'>";'));

/**
 * Binds JavaScript handlers to make Customizer preview reload changes
 * asynchronously.
 */
function anariel_customize_preview_js() {
	wp_enqueue_script( 'anariel-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20130213', true );
}
add_action( 'customize_preview_init', 'anariel_customize_preview_js' );

/**
 * Adds the individual sections for custom logo
 */
function anariel_theme_customizer( $wp_customize ) {
	$wp_customize->add_section( 'anariel_logo_section' , array(
	'title'       => __( 'Logo', 'anariel' ),
	'priority'    => 30,
	'description' => 'Upload a logo to replace the default site name and description in the header',
) );
$wp_customize->add_setting( 'anariel_logo', array(
	'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'anariel_logo', array(
	'label'    => __( 'Logo', 'anariel' ),
	'section'  => 'anariel_logo_section',
	'settings' => 'anariel_logo',
) ) );
}
add_action('customize_register', 'anariel_theme_customizer');
/**
 * Adds the individual sections for custom favicon
 */
function anariel_favicon_customizer( $wp_customize ) {
	$wp_customize->add_section( 'anariel_favicon_section' , array(
	'title'       => __( 'Favicon', 'anariel' ),
	'priority'    => 30,
	'description' => 'Upload a favicon',
) );
$wp_customize->add_setting(
	'anariel_favicon',
	array(
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'anariel_favicon', array(
	'label'    => __( 'Favicon', 'anariel' ),
	'section'  => 'anariel_favicon_section',
	'settings' => 'anariel_favicon',
) ) );
}
add_action('customize_register', 'anariel_favicon_customizer');
/**
 * Adds the individual sections for colors
 */
function anariel_customize_register( $wp_customize ) {
	$colors = array();
$colors[] = array(
	'slug'=>'content_link_color',
	'default' => '#f14332',
	'label' => __('Change color of the elements with color value #f14332', 'anariel')
);
$colors[] = array(
	'slug'=>'content_bluebg_color',
	'default' => '#314558',
	'label' => __('Change color of the blue background elements with color value #314558', 'anariel')
);
foreach( $colors as $color ) {
	// SETTINGS
	$wp_customize->add_setting(
		$color['slug'], array(
			'default' => $color['default'],
			'type' => 'option',
			'sanitize_callback' => 'sanitize_hex_color',
			'capability' =>
			'edit_theme_options'
		)
	);
	// CONTROLS
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			$color['slug'],
			array('label' => $color['label'],
			'section' => 'colors',
			'settings' => $color['slug'])
		)
	);
}
}
add_action( 'customize_register', 'anariel_customize_register' );
/*-----------------------------------------------------------------------------------*/
/*	Adds the individual sections, settings, and controls to the theme customizer
/*-----------------------------------------------------------------------------------*/
function anariel_customizer( $wp_customize ) {
	$wp_customize->add_section(
		'anariel_section_one',
		array(
			'title' => 'Copyright Settings',
			'description' => 'This is a settings section.',
			'priority' => 35,
		)
	);
	$wp_customize->add_setting(
	'copyright_textbox',
	array(
		'default' => '4 Children with Love by Anariel Design. All rights reserved.',
		'sanitize_callback' => 'anariel_sanitize_text',
	)
);
$wp_customize->add_control(
	'copyright_textbox',
	array(
		'label' => 'Copyright text',
		'section' => 'anariel_section_one',
		'type' => 'text',
	)
);
$wp_customize->add_setting(
	'hide_copyright',
	array(
	'sanitize_callback' => 'anariel_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	'hide_copyright',
	array(
		'type' => 'checkbox',
		'label' => 'Hide copyright text',
		'section' => 'anariel_section_one',
	)
);
}
add_action( 'customize_register', 'anariel_customizer' );
/**
 * Sanitization
 */
//Checkboxes
function anariel_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}
//Integers
function anariel_sanitize_int( $input ) {
	if( is_numeric( $input ) ) {
		return intval( $input );
	}
}
//Text
function anariel_sanitize_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}
/*-----------------------------------------------------------------------------------*/
/*	Remove More Jump link
/*-----------------------------------------------------------------------------------*/
function remove_more_jump_link($link) {
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');
/*-----------------------------------------------------------------------------------*/
/* Custom Trim Words (for Recent Posts widget excerpts)
/*-----------------------------------------------------------------------------------*/
function custom_trim_words( $text, $num_words = 55, $more = null ) {
	if ( null === $more )
		$more = __( '&hellip;', 'anariel' );

	$original_text = $text;
	$text = strip_shortcodes( $text );
	// Add tags that you don't want stripped
	$text = strip_tags( $text, '<a>' );

	if ( 'characters' == _x( 'words', 'word count: words or characters?', 'anariel' ) && preg_match( '/^utf\-?8$/i', get_option( 'blog_charset' ) ) ) {
		$text = trim( preg_replace( "/[\n\r\t ]+/", ' ', $text ), ' ' );
		preg_match_all( '/./u', $text, $words_array );
		$words_array = array_slice( $words_array[0], 0, $num_words + 1 );
		$sep = '';
	} else {
		$words_array = preg_split( "/[\n\r\t ]+/", $text, $num_words + 1, PREG_SPLIT_NO_EMPTY );
		$sep = ' ';
	}

	if ( count( $words_array ) > $num_words ) {
		array_pop( $words_array );
		$text = implode( $sep, $words_array );
		$text = $text . $more;
	} else {
		$text = implode( $sep, $words_array );
	}

	return apply_filters( 'custom_trim_words', $text, $num_words, $more, $original_text );
}
/**
 * WooCommerce
 *
 * Unhook sidebar
 */
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
add_theme_support( 'woocommerce' );
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );