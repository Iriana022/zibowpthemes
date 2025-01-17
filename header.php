<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webpack
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header class="menu">
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark pt-5">
			<div class="container">
				<a class="navbar-brand" href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri().'/assets/dist/images/logo_zibo.png'?>" width="148" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button> 
				<div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
					<ul class="navbar-nav">
					<li class="nav-item active position-relative">
						<a class="nav-link" data-bs-toggle="modal" data-bs-target="#restos">Nos restos</a>
						<span class="hachure position-absolute"></span>
					</li>
					<li class="nav-item position-relative">
						<a class="nav-link" href="<?php echo get_permalink(8) ?>">A propos</a>
						<span class="hachure position-absolute"></span>
					</li>
					<li class="nav-item position-relative">
						<a class="nav-link" href="https://groupezibo.achatdecartescadeaux.com/fr/login" target="_blank" rel="nofollow">carte cadeaux</a>
						<span class="hachure position-absolute"></span>
					</li>
					<li class="nav-item position-relative">
						<a class="nav-link" href="<?php echo get_permalink(81) ?>">carrieres</a>
						<span class="hachure position-absolute"></span>
					</li>
					<li class="nav-item position-relative">
						<a class="nav-link" href="<?php echo get_permalink(118) ?>">blogue</a>
						<span class="hachure position-absolute"></span>
					</li>
					<li class="nav-item position-relative">
						<a class="nav-link" href="#">en</a>
						<span class="hachure position-absolute"></span>
					</li>
					<li class="nav-item ms-5">
						<a class="nav-link" href="">
							<i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
						</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">
							<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
						</a>
					</li>
					</ul>
				</div>
			</div>
			<div class="menu-bottom">
				<a href="#">Menu</a><a href="#">Pour emporter</a><a href="#">reservations</a>
			</div>
		</nav>
    </header>

	<?php include("template-parts/restos.php"); ?>
	<div class="py-5"></div>