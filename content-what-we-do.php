<div class="container-fluid" id="leedstidal-what-we-do">

    <h1>
        <?php 
                $what_we_do_title = wpautop(get_post_meta( get_the_ID(), 'what_we_do_title', true ));
                echo ( $what_we_do_title );
            ?>
    </h1>
    <div class="row">
        <div id="leedstidal-boilerplate" class="col-12 col-md-8 offset-md-2">
            <?php 
                    $what_we_do_desc = wpautop(get_post_meta( get_the_ID(), 'what_we_do_desc', true ));
                    echo ( $what_we_do_desc );
                ?>
        </div>
        <!-- col -->
    </div>
    <!-- row -->
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="<?php echo $involved_left_image = wp_get_attachment_url( get_post_meta( get_the_ID(), 'involved_left_image_id', 1 ), 'sq-sm' ); ?>"
                alt="Card image cap">
            <div class="card-body">

                <p class="card-text">
                    <?php 
                $involved_left_desc = wpautop(get_post_meta( get_the_ID(), 'involved_left_desc', true ));
                echo ( $involved_left_desc );
            ?>
                </p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo $involved_left_mid_image = wp_get_attachment_url( get_post_meta( get_the_ID(), 'involved_left_mid_image_id', 1 ), 'sq-sm' ); ?>"
                alt="Card image cap">
            <div class="card-body">

                <p class="card-text">
                    <?php 
                $involved_left_mid_desc = wpautop(get_post_meta( get_the_ID(), 'involved_left_mid_desc', true ));
                echo ( $involved_left_mid_desc );
            ?>
                </p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo $involved_right_mid_image = wp_get_attachment_url( get_post_meta( get_the_ID(), 'involved_right_mid_image_id', 1 ), 'sq-sm' ); ?>"
                alt="Card image cap">
            <div class="card-body">

                <p class="card-text">
                    <?php 
                $involved_right_mid_desc = wpautop(get_post_meta( get_the_ID(), 'involved_right_mid_desc', true ));
                echo ( $involved_right_mid_desc );
            ?>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo $involved_right_image = wp_get_attachment_url( get_post_meta( get_the_ID(), 'involved_right_image_id', 1 ), 'sq-sm' ); ?>"
                alt="Card image cap">
            <div class="card-body">

                <p class="card-text">
                    <?php 
                $involved_right_desc = wpautop(get_post_meta( get_the_ID(), 'involved_right_desc', true ));
                echo ( $involved_right_desc );
            ?>
            </div>
        </div>
    </div>
    <!-- .card-deck -->

</div>
<!-- .container-fluid #leedstidal-what-we-do -->