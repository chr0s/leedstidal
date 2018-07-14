<?php get_header(); ?>

<div class="container-fluid">

    <?php 

    // The loop

    if( have_posts() ):
    
        while( have_posts() ): the_post(); ?>

            <a href="<?php the_permalink(); ?>">
                <h2>
                    <?php the_title(); ?>
                </h2>
            </a>
            <h4>
                <?php the_time('j/n/Y'); ?>
                <?php the_tags( '| #', '&nbsp;&nbsp;#', $after ); ?>
            </h4>
            <?php the_excerpt(); ?>
            <hr>

    <?php endwhile;

    endif;

?>

        <h3>
            <?php posts_nav_link(); ?>
        </h3>


</div><!-- .container-fluid -->

<?php get_footer(); ?>