<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title('|', true, 'right') ?></title>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="top">
		<div class="container">
        	<?php
            wp_nav_menu(
            	array(
                	'menu' => 'mymenu',
                	'menu_class' => 'nav nav-pills pull-right',
                	'fallback_cb' => '',
                	'menu_id' => 'mymenu'       
              	)    
            ); ?>
	        <div class="logo">
	        	<a href="<?php echo home_url('/');?>">
	        		<h1>Bis Lite</h1>
	        	</a>
	        </div>
		</div>
	</div>
	