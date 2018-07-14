<?php

/* 
    Template name: Home
*/

 get_header(); ?>

<div class="container-fluid" id="leedstidal-hero">

    <?php echo $post->post_content; ?>

</div><!-- .container-fluid #leedstidal-hero -->

<?php get_template_part( 'content', 'what-we-do' ); ?>

<?php get_template_part( 'content', 'current-projects' ); ?>

<?php get_template_part( 'content', 'involved' ); ?>

<?php get_template_part( 'content', 'testimonials' ); ?>

<?php get_template_part( 'content', 'newsletter' ); ?>

<?php get_footer(); ?>

