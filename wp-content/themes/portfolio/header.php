<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">
        <?php
		//wp_head must be included in your header
		wp_head(); ?>
	</head>
<div class="header">	
	<div class="col-lg-12">
		<nav>
				
			<ul>
				<div class="logo-img"></div>
				
				<?php
					$defaults = array(
						'theme_location'  => 'primary',
						'menu'            => '',
						'container'       => 'nav',
						'container_class' => ''
					);?>
				<li><?php wp_nav_menu($defaults); ?></li>
			</ul>
		</nav>
	</div>
	<div class="row-centered">	
		<div class="header col-lg-12 col-md-12 col-centered">
				<p class="hello"><strong>BONJOUR,</strong></br></br>
				<span class="head-blurt">MY NAME IS <span class="blue">TASHA</span>.</br><span class="line2">WEB <span class="blue">DESIGNER</span> & <span class="blue">DEVELOPER</span>.</span></span></br></br><span class="arrow">&#9660;</span></p>
		</div>
	</div>
</div>