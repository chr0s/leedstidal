<div class="container-fluid" id="leedstidal-newsletter">

    <h1>
        <?php 
                $newsletter_title = wpautop(get_post_meta( get_the_ID(), 'newsletter_title', true ));
                echo ( $newsletter_title );
            ?>
    </h1>
    <div class="row">
        <div id="leedstidal-boilerplate" class="col-12 col-md-8 offset-md-2">
            <?php 
                    $newsletter_description = wpautop(get_post_meta( get_the_ID(), 'newsletter_description', true ));
                    echo ( $newsletter_description );
                ?>
        </div>
        <!-- col -->
    </div>
    <!-- row -->

    <div class="row">
        <div class="col-10 offset-1 col-md-6 offset-md-3">

        <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted" style="text-align:center;"><?php 
                $newsletter_reasons = wpautop(get_post_meta( get_the_ID(), 'newsletter_reasons', true ));
                echo ( $newsletter_reasons );
            ?></small>
 
</div><!-- form-group -->
</div><!-- col -->
</div><!-- row -->

    </div>
    <!-- .container-fluid #leedstidal-testimonials" -->