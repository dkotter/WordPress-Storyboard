<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.0.6.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.6.2.min.js"><\/script>')</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php $count_posts = wp_count_posts(); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
#mp3j_addscripts();
wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="center">
   <header id="banner" role="banner">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="77" height="47" alt="Star Moose">
   </header>