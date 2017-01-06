<?php


// Load CSS and javaScript
function moesiaclone_theme_styles() {
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style( 'fonts_css', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed');
  wp_enqueue_style( 'fontawesome_cs', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css');
  wp_enqueue_style( 'style', get_stylesheet_uri());
}
function moesiaclone_enqueue_script() {
	wp_enqueue_script( 'jquery',  get_template_directory_uri() . '/assets/js/jquery.min.js', false );
  wp_enqueue_script( 'bootstrap',  get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', false );
}
add_action ( 'wp_enqueue_scripts', 'moesiaclone_theme_styles' );
add_action ( 'wp_enqueue_scripts', 'moesiaclone_enqueue_script' );



// Register Sidebars
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<aside class="widget">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));



// Register Navigation Menus
function register_header_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action ( 'init', 'register_header_menu' );




// Register Custom Bootstrap Navigation Walker
require_once('wp_bootstrap_navwalker.php');


// Add Support for Featured Images
add_theme_support( 'post-thumbnails' );
add_image_size( 'thumb', '210', '315', 'false' );

// Post Navigation
if ( ! function_exists( 'moesia_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function moesia_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation clearfix" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'moesia' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '<span class="meta-nav">&larr;</span>&nbsp;%title', 'Previous post link', 'moesia' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title&nbsp;<span class="meta-nav">&rarr;</span>', 'Next post link',     'moesia' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

?>
