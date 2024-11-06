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
				<a class="navbar-brand" href="#">
					<img src="<?php echo get_template_directory_uri().'/assets/dist/images/logo_zibo.png'?>" width="148" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button> 
				<div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
					<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Nos restos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">A propos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">carte cadeaux</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">carrieres</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">blogue</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">en</a>
					</li>
					<li class="nav-item ms-5">
						<a class="nav-link" href=""><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
					</li>
					<li class="nav-item">
					<a href="" class="nav-link"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
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
	<div class="py-5"></div>