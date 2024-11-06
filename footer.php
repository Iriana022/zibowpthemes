<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webpack
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 d-flex align-items-end">
					<div class="text-end">
						<p>Un concept du</p>
						<img width="82" src="<?php echo get_template_directory_uri().'/assets/dist/images/logo-footer.png' ?>" alt="">
					</div>
					<div>
						<i class="fa fa-facebook text-black fa-3x ps-4" aria-hidden="true"></i>
						<i class="fa fa-instagram text-black fa-3x ps-2" aria-hidden="true"></i>

					</div>
				</div>
				<div class="col-md-8 footer-right">
					<div class="menu-footer text-black text-end">
						<a href="">Carrieres</a><a href="">A propos</a><a href="">Contact</a>
						<a href="">carte-cadeaux</a><a href="">infolettre</a>
					</div>
					<div class="menu-footer text-black text-end">
						<a href="">Nos promos</a><a href="">Blogue</a><a href="">politique de confidentialité</a>
					</div>
					<div class="menu-footer text-black text-end">
						<a href="">modalites et conditions du site web et de l'application mobile du restaurant</a>
					</div>
					<div class="menu-footer text-black text-end">
						<a href="">Groupe zibo 2024 - tous droits réservés</a>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
