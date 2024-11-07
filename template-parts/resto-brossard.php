<?php
/**
 * Template Name: Restaurant Brossard
 */
get_header();
?>

    <setcion id="brossard-header" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>)" class="d-flex position-relative justify-content-center align-items-center">
        <div class="dark-shape position-absolute top-0 start-0"></div>
        <div class="container d-flex flex-column pres-text justify-content-center align-items-center">
            <h1><span class="outline-text">NOS</span> RESTOS</h1>
            <p class="text-white py-4 fw-bold">
            Bienvenue chez ZIBO!
            </p>
            <img src="<?php echo get_template_directory_uri().'/assets/dist/images/logo-rond.png' ?>" alt="">
        </div>
    </setcion>

    <section id="brossard-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h2 class="text-white title-section">BROSSARD</h2>
                    <p class="para">
                        Quartier DIX30<br>
                        <a href="https://maps.app.goo.gl/esHhgswucYNMxN2y8" target="_blank" rel="nofollow">1520, avenue des Lumières nº 10,<br>
                        Brossard (Québec) J4Y 0B3</a><br>
                    </p>
                    <p class="para mt-4">
                        <a href="https://maps.app.goo.gl/JUdzY3HdYPvDKxmW7" target="_blank" rel="nofollow">
                        Visite 360°
                        </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <img src="<?php echo get_template_directory_uri().'/assets/dist/images/laurence_rondeau.jpg' ?>" class="w-100" alt="">
                    <p class="mt-2 para">
                        <strong style="font-size: 0.8em!important;">Laurence Rondeau</strong><br>
                    </p>
                </div>
                <div class="col-md-8 col-12 ps-5">
                    <h4 class="sailec-regular text-uppercase">Heure<br>d'ouverture</h4>
                    <p style="text-align: left; font-size: 1.1em;" class="para">
                        Lundi au jeudi : 11h à 22h<br>
                        Vendredi et Samedi : 11h à 23h<br>
                        Dimanche : 11h à 21h
                    </p>
                    <p style="text-align: left; font-size: 1.1em;" class="para">
                        <a href="tel:4506565255">450 656-5255</a><br>
                        <a href="mailto:brossard@restaurantszibo.com">brossard@restaurantszibo.com</a>
                    </p>
                </div>
            </div>
            <div>
                <button class="btn-outline-orange me-5 text-uppercase">
                    Laissezun avis
                </button>
                <button class="btn-outline-orange text-uppercase ms-5">
                    Voir les autres restos
                </button>
            </div>
        </div>
    </section>

    <section id="restroom">
        <img src="<?php echo get_template_directory_uri().'/assets/dist/images/ZIBO-BROSSARS_TERRASSE.jpg'?>" class="w-100" alt="">
    </section>

    <?php
        get_template_part("inc/rdv");
    ?>

<?php
get_footer();
?>