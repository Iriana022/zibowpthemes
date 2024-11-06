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

<section id="menu">
    <div class="container d-flex align-items-center justify-content-center flex-column h-100 text-center">
        <h2>UN MENU D’INSPIRATION CALIFORNIENNE,
        GÉNÉREUX EN SAVEURS ET EN COULEURS</h2>
        <p class="py-4">Découvrez des plats confectionnés par des cuisiniers<br>
passionnés avec des ingrédients d’une qualité irréprochable.</p>
    <button>
        Consutez le menu
    </button>
    </div>
</section>

<section id="place" class="text-center position-relative">
<div class="dark-shape position-absolute top-0 start-0"></div>
    <div class="background-text">CINQASEPT</div>
    <div class="container d-flex align-items-center justify-content-center flex-column h-100 text-center">
        <h2>UN CINQ À SEPT<br>
        EN BONNE COMPAGNIE</h2>
        <p class="text-white py-4">Envie d’agrémenter la soirée? Parcourez notre sélection de savoureux cocktails, classiques ou<br>maison,<br>
        de bières et de vins sélectionnés avec soin pour rehausser votre expérience gustative.</p>
        <button class="btn btn-outline text-uppercase">
            Consutez le menu Boisson
        </button>
    </div>
</section>

<section id="experience" class="text-center position-relative">
<div class="dark-shape position-absolute top-0 start-0"></div>
    <div class="container d-flex align-items-center justify-content-center flex-column h-100 text-center">
        <h2>OFFREZ<br>
        L’EXPÉRIENCE ZIBO!</h2>
        <p class="text-white py-4">Faites plaisir à un proche en lui offrant une carte-cadeau du Groupe ZIBO!</p>
        <button class="btn btn-outline text-uppercase">
            Achetez
        </button>
    </div>
</section>

<section id="restos" class="text-center position-relative">
<div class="dark-shape position-absolute top-0 start-0"></div>
    <div class="container d-flex align-items-center justify-content-center flex-column h-100 text-center">
        <h2>NOS RESTOS</h2>
        <p class="text-white py-4">Vivez une expérience mémorable dans<br>
        l’un de nos restaurants-bars ZIBO!</p>
        <button class="btn btn-outline text-uppercase">
            Réservez
        </button>
    </div>
</section>

<section id="experience" class="text-center position-relative">
<div class="dark-shape position-absolute top-0 start-0"></div>
    <div class="container d-flex align-items-center justify-content-center flex-column h-100 text-center">
        <h2>OFFREZ<br>
        L’EXPÉRIENCE ZIBO!</h2>
        <p class="text-white py-4">Faites plaisir à un proche en lui offrant une carte-cadeau du Groupe ZIBO!</p>
        <button class="btn btn-outline text-uppercase">
            Achetez
        </button>
    </div>
</section>



<section id="promotions" class="text-center position-relative">
    <div class="container d-flex align-items-center justify-content-center flex-column h-100 text-center">
        <h2>DES PROMOTIONS GÉNÉREUSES<br>
        DIGNES DE VOS PLUS BEAUX MOMENTS</h2>
        <p class="py-4">Consultez nos promotions qui vous permettront de profiter<br>
        plus pleinement de vos sorties en famille, entre amis ou collègues!</p>
        <button class="btn btn-create text-uppercase" data-toggle="modal" data-target="#carteasix">
            <span class="text-white">carte</span><span class="text-outline">à</span><span class="text-gold">six</span>
        </button>
    </div>
</section>

<section id="meet" class="text-center position-relative">
<div class="dark-shape position-absolute top-0 start-0"></div>
    <div class="container d-flex align-items-center justify-content-center flex-column h-100 text-center">
        <h2>RÉSERVEZ MAINTENANT</h2>
        <p class="text-white py-4">Nous prenons des réservations de 2 à 6 personnes en ligne.<br>
        Pour plus de disponibilités ou pour plus de 7 personnes, veuillez<br> communiquer avec nous.</p>
        <div class="px-5 pt-4 pb-2 bg-white form text-center w-100">
            <img src="<?php echo get_template_directory_uri().'/assets/dist/images/zibo-wood.png' ?>" alt=""><br>
            <select name="" id="">
                <option value="">
                    Sélectionnez un restaurant
                </option>
                <option value="">
                    ZIBO! (Anjou)
                </option>
                <option value="">
                    ZIBO! (Boisbriand)
                </option>
                <option value="">
                    ZIBO! (Brossard)
                </option>
                <option value="">
                    ZIBO! (Griffintown)
                </option>
                <option value="">
                    ZIBO! (Laval)
                </option>
                <option value="">
                    ZIBO! (saint Bruno)
                </option>
                <option value="">
                    ZIBO! (Saint Hacynthe)
                </option>
                <option value="">
                    ZIBO! (Vaudreuil)
                </option>
            </select>
        </div>
        <div>
        </div>
    </div>
</section>

<!-- Modal à six -->
<div class="modal fade" id="carteasix" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span class="text-white">carte</span><span class="text-outline">à</span><span class="text-gold">six</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php 
get_footer();
?>