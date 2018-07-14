<div class="container-fluid" id="leedstidal-involved">

    <h2>
        <?php 
                $testimonials_title = wpautop(get_post_meta( get_the_ID(), 'testimonials_title', true ));
                echo ( $testimonials_title );
            ?>
    </h2>



</div>
<!-- .container-fluid #leedstidal-testimonials" -->