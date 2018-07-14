<div class="container-fluid" id="leedstidal-involved">

    <h2>
        <?php 
                $newsletter_title = wpautop(get_post_meta( get_the_ID(), 'newsletter_title', true ));
                echo ( $newsletter_title );
            ?>
    </h2>

    <div class="row">
        <div class="col-6">
            <?php 
                $newsletter_description = wpautop(get_post_meta( get_the_ID(), 'newsletter_description', true ));
                echo ( $newsletter_description );
            ?>
        </div>
        <div class="col-6">
            <?php 
                $newsletter_reasons = wpautop(get_post_meta( get_the_ID(), 'newsletter_reasons', true ));
                echo ( $newsletter_reasons );
            ?>
        </div>

    </div>
    <!-- .container-fluid #leedstidal-testimonials" -->