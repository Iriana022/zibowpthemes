<?php
/**
 * Template Name: Page Blog
 */
$args = array(
    'post_type' => 'post', // Type d'article
    'posts_per_page' => -1, // Nombre d'articles à afficher
);
$query = new WP_Query( $args );
$posts = $query->posts;
//var_dump($posts);
get_header();
?>

    <setcion id="blog-header" class="d-flex position-relative justify-content-center align-items-center">
        <div class="dark-shape position-absolute top-0 start-0"></div>
        <div class="container d-flex flex-column pres-text justify-content-center align-items-center">
            <h1>BLOGUE</h1>
            <p class="text-white py-4 fw-bold">
             Parce que vous avez le goût d’en savoir plus!
            </p>
            <img width="300" src="<?php echo get_template_directory_uri().'/assets/dist/images/Logo-palmier-Zibo.png' ?>" alt="">
        </div>
    </setcion>

    <section id="blog-content" class="py-5">
        <div class="container">
            <h2 class="title-orange-standard text-center">CULTIVEZ VOTRE CURIOSITÉ CULINAIRE</h2>
            <p class="para-standard-orange text-center">
            Découvrez nos recettes inspirantes et nos récits captivants pour stimuler votre curiosité culinaire. Nos experts, au coeur de notre succès, partagent leur expertise à travers nos articles. Rejoignez-nous pour éveiller vos sens et nourrir vos connaissances.
            </p>

            <div class="item-post my-5">
                <div class="d-flex justify-content-between">
                    <?php  foreach($posts as $post): ?>
                        <a href="<?php echo get_permalink($post->ID) ?>" class="text-decoration-none">
                            <div class="box-item-post position-relative text-white flex-1">
                                <img class="position-absolute top-0 start-0" src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" alt="">
                                <div class="d-flex align-items-center flex-column justify-content-center h-100">
                                    <h3 class="text-uppercase title-post-item text-center">
                                        <?php echo $post->post_title; ?>
                                    </h3>
                                    <p class="text-center position-relative">
                                        <?php echo $post->post_excerpt; ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

<?php 
    get_footer();
?>