<div class="container-fluid" id="leedstidal-involved">

    <h1>
        <?php 
                $involved_title = wpautop(get_post_meta( get_the_ID(), 'involved_title', true ));
                echo ( $involved_title );
            ?>
    </h1>
    <div class="row">
        <div id="leedstidal-boilerplate" class="col-12 col-md-8 offset-md-2">
            <?php 
                    $involved_desc = wpautop(get_post_meta( get_the_ID(), 'involved_desc', true ));
                    echo ( $involved_desc );
                ?>
        </div>
        <!-- col -->
    </div>
    <!-- row -->

      <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="<?php echo $what_we_do_left_image = wp_get_attachment_url( get_post_meta( get_the_ID(), 'what_we_do_left_image_id', 1 ), 'sq-sm' ); ?>"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">
                    <?php 
                    $what_we_do_left_title = wpautop(get_post_meta( get_the_ID(), 'what_we_do_left_title', true ));
                    echo ( $what_we_do_left_title );
                ?>
                </h5>
                <p class="card-text">
                    <?php 
                    $what_we_do_left_desc = wpautop(get_post_meta( get_the_ID(), 'what_we_do_left_desc', true ));
                    echo ( $what_we_do_left_desc );
                ?>
                </p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo $what_we_do_middle_image = wp_get_attachment_url( get_post_meta( get_the_ID(), 'what_we_do_middle_image_id', 1 ), 'sq-sm' ); ?>"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">
                    <?php 
                    $what_we_do_middle_title = wpautop(get_post_meta( get_the_ID(), 'what_we_do_middle_title', true ));
                    echo ( $what_we_do_middle_title );
                ?>
                </h5>
                <p class="card-text">
                    <?php 
                    $what_we_do_middle_desc = wpautop(get_post_meta( get_the_ID(), 'what_we_do_middle_desc', true ));
                    echo ( $what_we_do_middle_desc );
                ?>
                </p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo $what_we_do_right_image = wp_get_attachment_url( get_post_meta( get_the_ID(), 'what_we_do_right_image_id', 1 ), 'sq-sm' ); ?>"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">
                    <?php 
                    $what_we_do_right_title = wpautop(get_post_meta( get_the_ID(), 'what_we_do_right_title', true ));
                    echo ( $what_we_do_right_title );
                ?>
                </h5>
                <p class="card-text">
                    <?php 
                    $what_we_do_right_desc = wpautop(get_post_meta( get_the_ID(), 'what_we_do_right_desc', true ));
                    echo ( $what_we_do_right_desc );
                ?>
            </div>
        </div>
    </div>
    <!-- .card-deck -->

</div>
<!-- .container-fluid #leedstidal-involved" -->