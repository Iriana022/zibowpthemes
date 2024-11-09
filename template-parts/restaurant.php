<?php
/**
 * Template Name: Restaurant
 */
get_header();
$horaires = get_field('horaires');
$telephone = get_field('telephone');
$courriel = get_field('courriel');
$visite_virtuelle = get_field('visite_virtuelle');
$adresse = get_field('adresse');
$lien_google_map = get_field('lien_google_map');
$image_manager = get_field('image_manager');
$nom_manager = get_field('nom_manager');
$titre_manager = get_field('titre_manager');
?>

    <setcion id="anjou-header" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>)" class="d-flex position-relative justify-content-center align-items-center">
        <div class="dark-shape position-absolute top-0 start-0"></div>
        <div class="container d-flex flex-column pres-text justify-content-center align-items-center">
            <h1><span class="outline-text">NOS</span> RESTOS</h1>
            <p class="text-white py-4 fw-bold">
            Bienvenue chez ZIBO!
            </p>
            <img src="<?php echo get_template_directory_uri().'/assets/dist/images/logo-rond.png' ?>" alt="">
        </div>
    </setcion>

    <section id="anjou-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h2 class="text-white title-section"><?php echo get_the_title();?></h2>
                    <p class="para">
                        <a href="<?php echo $lien_google_map;?>" target="_blank" rel="nofollow"><?php echo $adresse;?></a>
                    </p>
                    <?php
                    if($visite_virtuelle) {
                    ?>
                    <p class="para mt-4">
                        <a href="<?php echo $visite_virtuelle;?>" target="_blank" rel="nofollow">
                        Visite 360°
                        </a>
                    </p>
                    </p>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <img src="<?php echo $image_manager;?>" class="w-100" alt="">
                    <p class="mt-2 para"><strong style="font-size: 0.8em!important;"><?php echo $nom_manager;?></strong><br>
<span style="font-weight: 400; font-size: 0.8em!important;"><?php echo $titre_manager;?></span></p>
                </div>
                <div class="col-md-8 col-12 ps-5">
                    <h4 class="sailec-regular text-uppercase">Heure<br>d'ouverture</h4>
                    <?php
                    if($horaires) {
                    ?>
                    <p style="text-align: left; font-size: 1.1em;" class="para">
                        <?php
                        foreach($horaires as $hor) {
                            $horaire = $hor['horaire'];
                            echo $horaire."<br/>";
                        }    
                        ?>
                    </p>
                    <?php
                    }
                    ?>
                    <p style="text-align: left; font-size: 1.1em;" class="para">
                        <?php
                        if($telephone) {
                        ?>
                        <a href="tel:<?php echo $telephone;?>"><?php echo $telephone;?></a><br>
                        <?php
                        }
                        if($courriel) {
                        ?>
                        <a href="mailto:<?php echo $courriel;?>"></a>
                        <?php
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div>
                <button class="btn-outline-orange me-5 text-uppercase">
                    Laissez un avis
                </button>
                <button class="btn-outline-orange text-uppercase ms-5">
                    Voir les autres restos
                </button>
            </div>
        </div>
    </section>

    <section id="restroom">
        <img src="<?php echo get_template_directory_uri().'/assets/dist/images/zibo-restroom.jpg'?>" class="w-100" alt="">
    </section>

    <?php
        get_template_part("inc/rdv");
    ?>

<?php
get_footer();
?>