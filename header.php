<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
	<!-- Tutorial By- Md. Mahabubar Rahaman -->
		<meta charset="<?php bloginfo('charset'); ?>">
		<title> <?php bloginfo('name'); ?> </title>
 
		
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/png" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />		

	   <?php wp_head(); ?>	
	</head>
	<body <?php body_class(); ?>>
	<div class="main_wrap header_bg">
		<div class="wrap">
			<header>
				<div id="header">
					<h2> <a href="#"><?php bloginfo('name'); ?></a></h2>
					<p> <?php bloginfo('description'); ?> </p>
				</div>
			</header>			
		</div>
	</div>