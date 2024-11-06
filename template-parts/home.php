<?php
/**
 * Template Name: Page accueil
 */
get_header();
?>

<setcion id="presentation" class="d-flex position-relative justify-content-center align-items-center">
    <div class="dark-shape position-absolute top-0 start-0"></div>
    <div class="container d-flex flex-column pres-text justify-content-center align-items-center">
        <h1>PARCE QUE VOUS AVEZ DU GOÛT</h1>
        <p class="text-white py-4">
            En  amoureux, entre amis ou en famille, venez<br> savourer une cuisine débordante de goût dans<br> l’ambiance unique et conviviale de nos<br> restaurants-bars.
        </p>
        <img src="<?php echo get_template_directory_uri().'/assets/dist/images/logo-rond.png' ?>" alt="">
    </div>
</setcion>

<?php 
get_footer();
?>