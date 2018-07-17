<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Leeds Tidal</title>
    <?php wp_head(); ?>

    <base href="http://www.leedstidal.org/">

    <link rel="shortcut icon" href="<?php echo home_url(); ?>/" />

    <?php
        #twitter cards hack
        if(is_single() || is_page()) {
        $twitter_url    = get_permalink();
        $twitter_title  = get_the_title();
        $twitter_desc   = get_the_excerpt();
        $twitter_thumbs = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );
        $twitter_thumb  = $twitter_thumbs[0];
        if(!$twitter_thumb) {
        $twitter_thumb = 'http://www.gravatar.com/avatar/8eb9ee80d39f13cbbad56da88ef3a6ee?rating=PG&size=75';
    }}
?>
        <meta name="twitter:card" value="summary" />
        <meta name="twitter:url" value="<?php echo $twitter_url; ?>" />
        <meta name="twitter:title" value="<?php echo $twitter_title; ?>" />
        <meta name="twitter:description" value="<?php echo $twitter_desc; ?>" />
        <meta name="twitter:image" value="<?php echo $twitter_thumb; ?>" />
        <meta name="twitter:site" value="@leedstidal" />


        <meta name="twitter:creator" value="@leedstidal" />


        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- fontawesome, updated with fresh credentials for Tidal -->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
            crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>

<body>

    <div class="wrapper">

    <?php get_template_part( 'navbar' ); ?>
