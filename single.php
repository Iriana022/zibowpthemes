<?php
get_header();
?>
<main id="primary" class="site-main allpage">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'article' );
	endwhile; // End of the loop.
	?>
</main>
<?php
get_footer();
