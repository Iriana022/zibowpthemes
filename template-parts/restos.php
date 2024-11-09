<div class="modal" id="restos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="hr"></div>
      <div class="modal-header position-relative">

      <i class="fa fa-times position-absolute icon-close" data-bs-dismiss="modal" aria-hidden="true"></i>

      </div>
      <div class="modal-body">
        <div class="container">
            <h3 class="title-restos text-uppercase text-center">
                <span class="text-outline">Nos</span> Restos
            </h3>

            <div class="box-restos d-flex text-uppercase justify-content-between mt-5 pt-5">
                <a href="<?php echo get_permalink(10) ?>">
                    Anjou
                </a>
                <a href="<?php echo get_permalink(12) ?>">
                    Boisbriand
                </a>
                <a href="<?php echo get_permalink(14) ?>">
                    Brossard
                </a>
                <a href="<?php echo get_permalink(16) ?>">
                    Griffintown
                </a>
            </div>
            <div class="box-restos d-flex text-uppercase justify-content-between mt-4">
                <a href="<?php echo get_permalink(55) ?>">
                    Laval
                </a>
                <a href="<?php echo get_permalink(62) ?>">
                    Saint-Bruno
                </a>
                <a href="<?php echo get_permalink(61) ?>">
                    saint-hyacinte
                </a>
                <a href="<?php echo get_permalink(63) ?>">
                    Vaudreuil
                </a>
            </div>
            <div class="text-center mt-4">
                <img width="120" src="<?php echo get_template_directory_uri().'/assets/dist/images/logo-zibo-rond.png' ?>" alt="">
            </div>
        </div>
      </div>
      <div class="hr"></div>
    </div>
  </div>
</div>