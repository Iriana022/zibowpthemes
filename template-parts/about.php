<?php
/**
 * Template Name: Page à propos
 */
get_header();
?>
    <setcion id="about-header" class="d-flex position-relative justify-content-center align-items-center">
        <div class="dark-shape position-absolute top-0 start-0"></div>
        <div class="container d-flex flex-column pres-text justify-content-center align-items-center">
            <h1><span class="outline-text">À</span> PROPOS</h1>
            <p class="text-white py-4">
            Être authentique, notre meilleure recette
            </p>
            <img src="<?php echo get_template_directory_uri().'/assets/dist/images/logo-rond.png' ?>" alt="">
        </div>
    </setcion>

    <setcion id="about-concept" class="d-flex position-relative justify-content-center align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-white title-section">LE CONCEPT</h1>
            <p class="text-white py-4 para text-center">
                Les restaurants-bars ZIBO! proposent une cuisine de type californienne haute en saveurs et en couleurs. Inspiré par l’art de vivre de cette région de nature exceptionnelle, notre menu se décline en autant de plats concoctés avec virtuosité par notre brigade de passionnés. Salades, pizzas, pâtes, grillades, poissons et succulents desserts, tous font la belle part aux ingrédients frais et sont présentés pour le plaisir de vos yeux. Couronnez votre expérience gourmande avec notre carte de vins sélectionnés pour tous les goûts. Goûtez à l’expérience ZIBO!, une aventure 100% québécoise! 
            </p>
            <h3 class="text-white text-center classic-title">
                L’ambiance
            </h3>
            <p class="text-white py-4 para text-center">
                Que ce soit pour un souper en amoureux ou en famille, une sortie festive entre amis, un 5 à 7 entre collègues ou un lunch d’affaires, toutes les occasions sont bonnes pour retrouver l’ambiance conviviale et animée de nos restaurants-bars ZIBO! Côté bar ou salle à manger, faites l’expérience d’un service attentionné et chaleureux, à la hauteur des valeurs qui nous démarquent depuis notre création.
            </p>
        </div>
    </setcion>

    <section id="president" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <img src="<?php echo get_template_directory_uri().'/assets/dist/images/Hugues-Bourque.jpg' ?>" alt="">
                </div>
                <div class="col-md-8 col-12 ps-5">
                    <p class="text-white sailec-medium">
                    Venez découvrir le concept unique
                    de nos établissements ZIBO!
                    Il nous fera plaisir de vous accueillir.
                    </p>
                    <p class="text-end orange h3 my-4">– Hugues Bourque</p>
                    <p class="sailec-regular text-end text-white">
                    PRÉSIDENT & FONDATEUR<br>
                    DU GROUPE ZIBO!
                    </p>
                </div>
            </div>
        </div>
    </section>



<section id="story" class="text-center position-relative">
    <div class="dark-shape position-absolute top-0 start-0"></div>
        <div class="background-text">HISTOIRE</div>
        <div class="container d-flex align-items-center justify-content-center flex-column h-100 text-center">
            <h2>L'HISTOIRE</h2>
            <p class="text-white pt-4">Depuis l’ouverture de son premier établissement à Rosemère en 2001, le Groupe ZIBO! n’a cessé d’évoluer.</p>
            <p class="text-white pb-4">L’entreprise québécoise possède maintenant une dizaine d’établissements sous trois concepts originaux de restaurants-bars : ZIBO! et Vertigo et de sa shoppe Beignes & Glaz. Source de grande fierté, cette croissance est le fruit du travail d’une équipe passionnée qui compte à présent plus de 700 employés, tous déterminés à offrir une expérience à la fois mémorable et authentique.</p>
            <button class="btn btn-outline text-uppercase">
                Groupezibo.com
            </button>
    </div>
</section>



<?php
get_footer();
?>