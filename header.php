<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->

<head>
  
	<title><?php wp_title(':', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" type="text/css" media="screen" charset="utf-8" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" charset="utf-8" />

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="SiteWrapper">
	<header>
		<hgroup id="Header">
			<h1><a href="<?php echo get_option('home'); ?>/" title="Home"><?php  bloginfo('name');?></a></h1> 
			<h2><?php  bloginfo('description'); ?></h2>
		</hgroup>
		<nav>
			<ul>
				<?php wp_list_pages('title_li=&depth=1'); ?>
			</ul>
		</nav>
		<?php /*
		<p id="Twitter"><?php echo twitter_messages('bawigga', 1, false, false, '', true, true, true); ?></p>
		*/ ?>
	</header>

    <?php
      if($post->post_parent)
      $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
      else
      $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
      if ($children) { ?>
      <div id="subNav">
      <ul>
      <?php echo $children; ?>
      </ul>
      </div>
      <?php } ?>
  

