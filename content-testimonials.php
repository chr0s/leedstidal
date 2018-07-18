<div class="container-fluid" id="leedstidal-testimonials">

    <h1>
        <?php 
                $testimonials_title = wpautop(get_post_meta( get_the_ID(), 'testimonials_title', true ));
                echo ( $testimonials_title );
            ?>
    </h1>
    <div class="row">
        <div id="leedstidal-boilerplate" class="col-12 col-md-8 offset-md-2">
            <?php 
                    $testimonials_desc = wpautop(get_post_meta( get_the_ID(), 'testimonials_desc', true ));
                    echo ( $testimonials_desc );
                ?>
        </div>
        <!-- col -->
    </div>
    <!-- row -->

  <div class="row"><div class="col-md-8 offset-md-2 col-12">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://placeimg.com/1080/500/animals" alt="First slide">
            <div class="carousel-caption d-none d-block">
            <h5>Right wing populist</h5>
            <p><span id="leedstidal-caption-hide">We would've got away with it too, if it weren't for those pesky Tidal kids!</span></p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://placeimg.com/1080/500/arch" alt="Second slide">
            <div class="carousel-caption d-none d-block">
                <h5>Satisfied activist</h5>
                <p><span id="leedstidal-caption-hide">Tidal really pointed me in the right direction</span></p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://placeimg.com/1080/500/nature" alt="Third slide">
            <div class="carousel-caption d-none d-block">
            <h5>Chris</h5>
                <p><span id="leedstidal-caption-hide">Leeds Tidal is really great</span></p>

            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div></div></div>

<?php wp_reset_query(); ?>

</div>
<!-- .container-fluid #leedstidal-testimonials" -->