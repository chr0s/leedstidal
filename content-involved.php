<div class="container-fluid" id="leedstidal-involved">

    <h1>
        <?php 
                $involved_title = wpautop(get_post_meta( get_the_ID(), 'involved_title', true ));
                echo ( $involved_title );
            ?>
    </h1>

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
<!-- .container-fluid #leedstidal-involved" -->