<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php
	$content = '<meta name="description" content="';
	if( is_single() || is_page() ){
		$meta_description = get_post_meta( $post->ID, "metadescription", true );
	if( $meta_description != '' ){
		$content .= esc_attr($meta_description);
	} else {
		if( have_posts() ){ while( have_posts() ){ the_post();
			$excerpt = esc_attr(strip_tags(get_the_excerpt()));
		if( strlen($excerpt) > 140 ) $excerpt = substr($excerpt, 0, 137) .'...';
			$content .= $excerpt;
		} }
	}
	} elseif( is_home() || is_front_page() ){
		$content .= get_bloginfo('description');
	} elseif( is_category() ){
		$cat_desc = esc_attr(trim(strip_tags(category_description())));
	if($cat_desc != '')
		$content .= $cat_desc;
	else
		$content .= 'Archive for the category '. single_cat_title('', false);
	} elseif( is_tag() ) {
		$tag_desc = esc_attr(trim(strip_tags(tag_description())));
		if($tag_desc != '')
		$content .= $tag_desc;
		else
		$content .= 'Archive for the tag '. single_tag_title('', false);
	} elseif( is_author() ){
		if(isset($_GET['author_name']))
		$curauth = get_user_by('slug', $author_name);
		else
		$curauth = get_userdata(intval($author));
		$content .= 'Archive for the author '. $curauth->display_name;
	} elseif( is_year() ){
		$content .= 'Archive for ' . get_the_time('Y');
	} elseif( is_month() ){
		$content .= 'Archive for ' . get_the_time('F, Y');
	} elseif( is_day() ){
		$content .= 'Archive for ' . get_the_time('jS F, Y');
	}
	$content .= '" />' . "\n";
	?>
	<?php echo $content; ?>
	
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="library/css/ie.css" type="text/css" media="screen" /><![endif]-->

	<!-- The 1140px Grid - http://cssgrid.net/ -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/library/css/1140.css" type="text/css" media="screen" />
	
	<!-- Your styles -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/library/css/main.css" type="text/css" media="screen" />
	
		
	<?php if ( is_front_page() ) { ?>
     <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/library/css/homepage.css" type="text/css" media="screen" />
     <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/library/css/flexslider.css" type="text/css">
	<?php } elseif ( is_page('53') || '53' == $post->post_parent ) { ?>
     <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/library/css/portfolio.css" type="text/css">
	<?php } else if ( is_page('9') ) {?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/library/css/blog.css" type="text/css">
	<?php } else if ( is_page('11') ) {?>	
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/library/css/contact.css" type="text/css">
	<?php } ?>
	
	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/library/js/css3-mediaqueries.js"></script>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory') ?>/library/js/jquery.flexslider.js"></script>
	<script src="<?php bloginfo('stylesheet_directory') ?>/library/js/bootstrap-twipsy.js"></script>
	
	
	<!-- Hook up the FlexSlider -->
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider();
		});
		
		
	</script>
	<script src="<?php bloginfo('stylesheet_directory') ?>/library/js/jquery.isotope.min.js"></script>

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

</head>
<body <?php body_class(); ?>>
<div id="logobg"></div>
<div class="container header">

	<div class="row">
		<div class="sixcol">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><h1><?php bloginfo( 'name' ); ?></h1></a>
			
		</div>
		<div class="sixcol last">
		<!-- <ul id="main-navigation"> -->
			<?php 
				wp_nav_menu (array('menu'=>'Main Navigation Menu'));
			?>
		<!-- </ul> -->
		</div>
	</div>

</div> <!-- end header -->
