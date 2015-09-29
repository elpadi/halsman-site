<?php
/* @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<link rel="stylesheet/less" href="<?php bloginfo( 'template_url' ); ?>/style.less" />
<script src="<?php bloginfo( 'template_url' ); ?>/js/less-1.3.0.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="photographer, magnum, jump, portrait, nudes, LIFE magazine, jumpology, darkroom, analog photography, Dali, Marilyn, Audrey, Einstein, 
psychological portraiture, licensing, print sales, hitchcock, tv guide, Elizabeth Taylor, the frenchman, halsman at work, unknown halsman, Dali's mustache,
pre photoshop, atomicus">

</head>

<body <?php body_class(); ?>>
<a name="top"></a>
<!---------- Body ---------->
<div id="wrapper" class="grp">

    <!-- Header -->
    <header>
    
    	<a class="logo ir" href="/">Halsman</a>
        
        <nav class="grp">
            
			<?php wp_nav_menu('menu=Main Menu&container=false'); ?>
        
        </nav>
    
    </header>
    <!-- End Header -->