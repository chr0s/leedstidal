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
  <div class="card-body">
    <h5 class="card-title"><?php 
                $involved_left_desc = wpautop(get_post_meta( get_the_ID(), 'involved_left_desc', true ));
                echo ( $involved_left_desc );
            ?></h5>

  </div>
  <img class="card-img-bottom" src="<?php echo $involved_left_image = wp_get_attachment_url( get_post_meta( get_the_ID(), 'involved_left_image_id', 1 ), 'sq-sm' ); ?>"
                alt="Card image cap">
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php 
                $involved_left_mid_desc = wpautop(get_post_meta( get_the_ID(), 'involved_left_mid_desc', true ));
                echo ( $involved_left_mid_desc );
            ?></h5>

  </div>
  <img class="card-img-bottom" src="<?php echo $involved_left_mid_image = wp_get_attachment_url( get_post_meta( get_the_ID(), 'involved_left_mid_image_id', 1 ), 'sq-sm' ); ?>"
                alt="Card image cap">
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php 
                $involved_right_mid_desc = wpautop(get_post_meta( get_the_ID(), 'involved_right_mid_desc', true ));
                echo ( $involved_right_mid_desc );
            ?></h5>

  </div>
  <img class="card-img-bottom" src="<?php echo $involved_right_mid_image = wp_get_attachment_url( get_post_meta( get_the_ID(), 'involved_right_mid_image_id', 1 ), 'sq-sm' ); ?>"
                alt="Card image cap">
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php 
                $involved_right_desc = wpautop(get_post_meta( get_the_ID(), 'involved_right_desc', true ));
                echo ( $involved_right_desc );
            ?></h5>

  </div>
  <img class="card-img-bottom" src="<?php echo $involved_right_image = wp_get_attachment_url( get_post_meta( get_the_ID(), 'involved_right_image_id', 1 ), 'sq-sm' ); ?>"
                alt="Card image cap">
</div>
    </div>
    <!-- .card-deck -->

</div>
<!-- .container-fluid #leedstidal-what-we-do -->