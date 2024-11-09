<?php
/**
 * Template Name: Page carriere
 */
    get_header();
?>
    <setcion id="career" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>)" class="d-flex position-relative justify-content-center align-items-center">
        <div class="dark-shape position-absolute top-0 start-0"></div>
        <div class="container d-flex flex-column pres-text justify-content-center align-items-center">
            <h1>CARRIÈRES</h1>
            <p class="text-white py-4 fw-bold">
            Joignez-vous à notre équipe!
            </p>
            <img src="<?php echo get_template_directory_uri().'/assets/dist/images/logo-rond.png' ?>" alt="">
        </div>
    </setcion>

    <section id="choice" class="pt-5">
        <div class="container">
            <h3 class="text-center text-uppercase text-white title-white-standard mb-4">Pourquoi choisir ZIBO?</h3>
            <p class="para-standard text-white text-center">
            Tout part de l’attitude et du coeur au ventre.<br>
            Chez ZIBO!, nos employés sont nos meilleurs ambassadeurs. Vous fournissez la <br>
            volonté, nous perfectionnons vos aptitudes!<br>
            Postulez MAINTENANT!
            </p>
            <ul class="nav nav-pills menu-carriere mt-5" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-service-tab" data-bs-toggle="pill" data-bs-target="#pills-service" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Service</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-cuisine" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Cuisine</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-gestion" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Gestion</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <?php get_template_part("inc/tabs/service"); ?>
            <?php get_template_part("inc/tabs/cuisine"); ?>
            <?php get_template_part("inc/tabs/gestion"); ?>
        </div>
    </section>

<?php
    get_footer();
?>