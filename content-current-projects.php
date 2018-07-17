<div class="container-fluid" id="leedstidal-current-projects">

    <h1>
        <?php 
                $current_projects_title = wpautop(get_post_meta( get_the_ID(), 'current_projects_title', true ));
                echo ( $current_projects_title );
            ?>
    </h1>

    <?php 
        
        // The query
        
        $event_project_query = new WP_Query( array( 'post_type' => 'event/project') ); 
    
        // The loop
    
        if( $event_project_query->have_posts() ):
        
            while( $event_project_query->have_posts() ): $event_project_query->the_post(); ?>

    <div class="row">

        <div class="col-1">

            <img src="<?php the_post_thumbnail_url('sq-sm'); ?>" style="max-width:100%;max-height:100%;">

        </div>
        <!-- col-1 -->

        <div class="col-11">

            <h2>
                <?php the_title(); ?>
            </h2>
            <p>
                <?php echo $post->post_content; ?></p>
                <hr>

        </div>
        <!-- .col-11 -->

    </div>
    <!-- .row -->
    <?php endwhile;
        
    endif;
    
    ?>

<?php wp_reset_query(); ?>

</div>
<!-- .container-fluid #leedstidal-current-projects -->