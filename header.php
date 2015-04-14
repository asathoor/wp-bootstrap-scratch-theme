<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

<!-- defining viewport for Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
<!-- will define the title via php -->
	<title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>

<!-- will call all WP Scripts for the header section -->

<!-- calling up Bootstrap, Jquery etc. -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- the THEME CSS -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<!-- wp_head() -->
<?php wp_head(); ?>


</head>

<body>

<!-- the header menu (see: functions.php) -->
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

<!-- end header.php -->
