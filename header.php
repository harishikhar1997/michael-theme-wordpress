<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

// $menu = wp_get_nav_menu_object("My Menu" );
// echo $menu->count;die();
?>

	<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/font-assets/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/font-assets/BentonSans-medium/font.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

   <!--  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.min.css"> -->
	
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/custom-style.css">
		
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/ajax-login-script.js"></script>
		



		<style>#wpadminbar{display: none;}</style>

    <title>Home</title>
</head>
<body>
    
<section class="custom-nav">	
	<nav class="navbar navbar-expand-sm navbar-light bg-light">
		<div class="container">
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

	<?php		$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			//echo $image[0];?>
			
			<a class="navbar-brand logo-sec" href="home"><img src="<?php echo $image[0]; ?>" class="d-block w-100" alt="Micheal Logo" /></a>				
			<div class="small-screen-sec">
				<div class="navbar-right">
					<form class="search-form" role="search">
						<div class="searching">
							<a href="javascript:void(0)" class="search-open">
								<i class="fa fa-search"></i>
							</a>

							<div class="pollSlider">
								<div class="search-inline">
									<form>
										<button type="submit">
											<i class="fa fa-search"></i>
										</button>
										<input type="text" class="form-control" placeholder="Searching..." />
										<a href="javascript:void(0)" class="search-close">
											<i class="fa fa-times"></i>
										</a>
									</form>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<?php 
				$args = array(
				'theme_location'  => 'menu-1',
				'container' => 'ul',
				'menu_class'=> 'navbar-nav ml-auto mt-2 mt-lg-0',
				'container' => 'a'
				);

				// print_r(wp_nav_menu( $args ));die();
				wp_nav_menu( $args );
				?>   
				<!-- <a href="#" class="find-home-btn small-screen-sec hvr-sweep-to-right"> Find your home <i class="fa fa-arrow-right"></i> </a> -->
			</div>


	


	 <a class="logout" href="<?php echo wp_logout_url('login'); ?>">Log out</a>

			<a href="#" class="find-home-btn desktop-screen-sec  hvr-sweep-to-right"> Find your home <i class="fa fa-arrow-right"></i> </a>
			<div class="navbar-right desktop-screen-sec">
				<form class="search-form" role="search">
					<div class="searching">
						<a href="javascript:void(0)" class="search-open" id="pollSlider-button">
							<i class="fa fa-search"></i>
						</a>
						<div class="pollSlider">
							<div class="search-inline">
								<form>
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
									<input type="text" class="form-control" placeholder="Searching..." />
									<a href="javascript:void(0)" class="search-close">
										<i class="fa fa-times"></i>
									</a>
								</form>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</nav>
	<a class="cpost" href="<?= get_bloginfo('url').'/create-post/'?>">Add New Post</a> 
</section>
<!-- Header Sections Ends --> 

	<!-- 	</section> -->

	<!-- <div id="content" class="site-content"> -->





