<div class="container-fluid" id="leedstidal-current-projects">

    <h1>
        <?php 
                $current_projects_title = wpautop(get_post_meta( get_the_ID(), 'current_projects_title', true ));
                echo ( $current_projects_title );
            ?>
    </h1>
    <div class="row">
        <div id="leedstidal-boilerplate" class="col-12 col-md-8 offset-md-2">
            <?php 
                    $current_projects_desc = wpautop(get_post_meta( get_the_ID(), 'current_projects_desc', true ));
                    echo ( $current_projects_desc );
                ?>
        </div>
        <!-- col -->
    </div>
    <!-- row -->
    <?php 
        
        // The query
        
        $event_project_query = new WP_Query( array( 'post_type' => 'event/project') ); 
    
        // The loop
    
        if( $event_project_query->have_posts() ):
        
            while( $event_project_query->have_posts() ): $event_project_query->the_post(); ?>

    <div class="row" >
<div class="col-12 col-md-8 offset-md-2" style="background-color: #FEFEFE; margin-bottom: 10px; padding: 10px; border: 2px solid #404040">
    <div class="row">
        <div class="col-2" height="auto">

            <img src="<?php the_post_thumbnail_url('sq-sm'); ?>" width="100%" >

        </div>
        <!-- col-1 -->

        <div class="col-10">

            <h2>
                <?php the_title(); ?>
            </h2>
            <p>
                <?php echo $post->post_content; ?></p>
            

        </div>
        <!-- .col-11 -->
        </div><!-- row -->
        </div><!-- col -->

    </div>
    <!-- .row -->
    <?php endwhile;
        
    endif;
    
    ?>

<?php wp_reset_query(); ?>

</div>
<!-- .container-fluid #leedstidal-current-projects -->