<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&display=swap" rel="stylesheet">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
			<!-- header -->
			<header class="nav-page bg-salmon">
			    <div class="container">
			        <div class="row">
			            <nav class="col-12 navbar navbar-expand-lg ">
			                <a class="navbar-brand" href="#top"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.svg" alt="" class="img-fluid"></a>
			                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			                    <span class="bar-menu"></span>
			                    <span class="bar-menu"></span>
			                    <span class="bar-menu"></span>
			                </button>                
			                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			                    <?php
			                    $defaults = array(
			                        'theme_location'    => 'principal-menu',
			                        'container'             => 'false',
			                        'menu_class'            => 'navbar-nav'
			                    );
			                    wp_nav_menu( $defaults );

			                    ?>
			                </div> 
			            </nav>
			        </div>
			    </div>
			</header>
			<!-- /header -->
