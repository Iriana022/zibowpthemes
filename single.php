<?php
get_header();
$images = get_field('image_recette');
$desc = get_field('description_du_recette');
//var_dump($images);
?>

<setcion id="single-header" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>); background-position: center center" class="d-flex position-relative justify-content-center align-items-center">
	<div class="dark-shape position-absolute top-0 start-0"></div>
	<div class="container d-flex flex-column pres-text justify-content-center align-items-center">
		<h1><?php echo get_the_title(); ?></h1>
		<p class="text-white py-4 fw-bold">
		</p>
	</div>
</setcion>

<main id="primary" class="site-main allpage single-post py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-12 img-single py-5 d-flex justify-content-between flex-column">
				<?php
					if($images) :
					foreach($images as $img) :
				?>
					<div class="description-image">
						<img src="<?php echo $img['image']; ?>" class="w-100" alt="">
						<?php echo $img['description_image']; ?>
					</div>
				<?php endforeach; endif;?>
			</div>
			<div class="col-md-6 col-12 py-5">
				<?php echo $desc; ?>
			</div>
		</div>
	</div>
	<?php
	/* while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'article' );
	endwhile; // End of the loop. */
	?>
</main>
<?php
get_footer();
