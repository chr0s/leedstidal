<?php 


// FONTS

function wpb_add_google_fonts() {

    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,900', false );

}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

// SCRIPTS

function leedstidal_script_enqueue() {

    // CSS
   wp_enqueue_style('bootstrap-grid-min', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
   wp_enqueue_style('bootstrap-reboot-min', get_template_directory_uri() . '/css/bootstrap-reboot.min.css' );
   wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style('theme-css', get_template_directory_uri() . '/style.css' );
    
    // JS
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/leedstidal.js', array(), '1.0', 'false');


}

add_action('wp_enqueue_scripts', 'leedstidal_script_enqueue');

// THEME SETUP 

function leedstidal_theme_setup() {

    add_theme_support('menus');
    register_nav_menu('headermenu', 'Top nav');
    register_nav_menu('footermenu', 'Bottom nav');

}

add_action('init', 'leedstidal_theme_setup');

// THEME SUPPORT

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

// POST THUMBNAILS

add_image_size( 'sq-md', 500, 500, false);
add_image_size( 'sq-sm', 250, 250, false);
add_image_size( 'rec-md', 500, 333, false);

//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="https://opengraphprotocol.org/schema/" xmlns:fb="https://www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype');
 
// FB OG 
 
function insert_fb_in_head() {
    global $post;
    if ( !is_singular()) //if it is not a post or a page
        return;
	echo '<meta property="og:description" content="' . get_the_excerpt() . '"/>';
        echo '<meta property="fb:admins" content="689575211"/>';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="Leeds Tidal"/>';
    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
        $default_image="https://chrislee.is/wp-content/uploads/2017/10/bicycle.png"; //replace this with a default image on your server or an image in your media library
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    else{
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    }
    echo "
";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );

// CUSTOM POST TYPES

function leedstidal_custom_posts() {

    // Testimonials

    $labels1 = array(
        'name'      => 'Testimonials',
        'singular'  => 'Testimonial',
        'add_new'   => 'Add testimonial',
        'all_items' => 'All testimonials',
    );

    $args1 = array(
        'labels'                => $labels1,
        'public'                => true,
        'has_archive'           => false, 
        'publicly_queryable'    => true,
        'query_var'             => true,
        'rewrite'               => array(
	    'with_front' => false,
	    'slug' => 'testimonial'
	    ),
        'capability_type'       => 'post', // gives default settings of specified
        'hierarchical'          => false, // dependencies on other items
        'supports'               => array( 
            'title',
            'editor',
            'thumbnail', // featured image
            'revisions', // automatically saves prior versions
            ), //which parts of the edit screen get shown
        'menu_position'         =>  6,
        'exclude_from_search'   =>  true,
        );
    
    register_post_type('testimonial', $args1);

    // Ongoing projects

    $labels2 = array(
        'name'      => 'Events/projects',
        'singular'  => 'Event/project',
        'add_new'   => 'Add event/project',
        'all_items' => 'All events/projects',
    );

    $args2 = array(
        'labels'                => $labels2,
        'public'                => true,
        'has_archive'           => false, 
        'publicly_queryable'    => true,
        'query_var'             => true,
        'rewrite'               => array(
	    'with_front' => false,
	    'slug' => 'testimonial'
	    ),
        'capability_type'       => 'post', // gives default settings of specified
        'hierarchical'          => false, // dependencies on other items
        'supports'               => array( 
            'title',
            'editor',
            'thumbnail', // featured image
            'revisions', // automatically saves prior versions
            ), //which parts of the edit screen get shown
        'menu_position'         =>  6,
        'exclude_from_search'   =>  true,
        );
    
    register_post_type('event/project', $args2);

    }

add_action('init', 'leedstidal_custom_posts');

// Here be CMB2 meta boxes

add_action( 'cmb2_admin_init', 'cmb2_leedstidal_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_leedstidal_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_leedstidal_meta_';

    // WHAT WE DO 
    
    $cmb = new_cmb2_box( array(
        'id'            => 'leedstidal_home_what_we_do',
        'title'         => __( 'What we do', 'cmb2' ),
        'object_types'  => array( 'page'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb-styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    $cmb->add_field( array(
        'name'       => 'Section title',
        'id'         => 'what_we_do_title',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name'       => 'Left image',
        'desc'       => __( 'Images should be square!', 'cmb2' ),
        'id'         => 'what_we_do_left_image',
        'type'       => 'file',
    ) );

    $cmb->add_field( array(
        'name'      => 'Left title',
        'id'        => 'what_we_do_left_title',
        'type'      => 'text_medium',
    ));

    $cmb->add_field( array(
        'name'      => 'Left description',
        'id'        => 'what_we_do_left_desc',
        'type'      => 'textarea_small',
    ));
    
    $cmb->add_field( array(
        'name'       => 'Middle image',
        'desc'       => __( 'Images should be square!', 'cmb2' ),
        'id'         => 'what_we_do_middle_image',
        'type'       => 'file',
    ) );

    $cmb->add_field( array(
        'name'      => 'Middle title',
        'id'        => 'what_we_do_middle_title',
        'type'      => 'text_medium',
    ));

    $cmb->add_field( array(
        'name'      => 'Middle description',
        'id'        => 'what_we_do_middle_desc',
        'type'      => 'textarea_small',
    ));

    $cmb->add_field( array(
        'name'       => 'Right image',
        'desc'       => __( 'Images should be square!', 'cmb2' ),
        'id'         => 'what_we_do_right_image',
        'type'       => 'file',
    ) );

    $cmb->add_field( array(
        'name'      => 'Right title',
        'id'        => 'what_we_do_right_title',
        'type'      => 'text_medium',
    ));

    $cmb->add_field( array(
        'name'      => 'Right description',
        'id'        => 'what_we_do_right_desc',
        'type'      => 'textarea_small',
    ));

    // CURRENT PROJECTS

    $cmb = new_cmb2_box( array(
        'id'            => 'leedstidal_home_current_projects',
        'title'         => __( 'Current projects and upcoming events', 'cmb2' ),
        'object_types'  => array( 'page'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb-styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    $cmb->add_field( array(
        'name'       => 'Section title',
        'id'         => 'current_projects_title',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name'       => 'Add a new event/project or edit existing ones via Events/projects in the sidebar!',
        'id'         => 'current_projects_prompt',
        'type'       => 'title',
    ) );

    // HOW CAN I GET INVOLVED

    $cmb = new_cmb2_box( array(
        'id'            => 'leedstidal_home_involved',
        'title'         => __( 'How to get involved', 'cmb2' ),
        'object_types'  => array( 'page'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb-styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    $cmb->add_field( array(
        'name'       => 'Section title',
        'id'         => 'involved_title',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name'       => 'Left image',
        'desc'       => __( 'Images should be 3x2 aspect ratio, ideally 500 x 333 px', 'cmb2' ),
        'id'         => 'involved_left_image',
        'type'       => 'file',
    ) );

    $cmb->add_field( array(
        'name'      => 'Left description',
        'id'        => 'involved_left_desc',
        'type'      => 'textarea_small',
    ));

    $cmb->add_field( array(
        'name'       => 'Left_middle image',
        'desc'       => __( 'Images should be 3x2 aspect ratio, ideally 500 x 333 px', 'cmb2' ),
        'id'         => 'involved_left_mid_image',
        'type'       => 'file',
    ) );

    $cmb->add_field( array(
        'name'      => 'Left_middle description',
        'id'        => 'involved_left_mid_desc',
        'type'      => 'textarea_small',
    ));

    $cmb->add_field( array(
        'name'       => 'Right_middle image',
        'desc'       => __( 'Images should be 3x2 aspect ratio, ideally 500 x 333 px', 'cmb2' ),
        'id'         => 'involved_right_mid_image',
        'type'       => 'file',
    ) );

    $cmb->add_field( array(
        'name'      => 'Right_middle description',
        'id'        => 'involved_right_mid_desc',
        'type'      => 'textarea_small',
    ));
    
    $cmb->add_field( array(
        'name'       => 'Right image',
        'desc'       => __( 'Images should be 3x2 aspect ratio, ideally 500 x 333 px', 'cmb2' ),
        'id'         => 'involved_right_image',
        'type'       => 'file',
    ) );

    $cmb->add_field( array(
        'name'      => 'Right description',
        'id'        => 'iinvolved_right_desc',
        'type'      => 'textarea_small',
    ));

    // WHAT PEOPLE SAY

    $cmb = new_cmb2_box( array(
        'id'            => 'leedstidal_home_testimonials',
        'title'         => __( 'What people say', 'cmb2' ),
        'object_types'  => array( 'page'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb-styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    $cmb->add_field( array(
        'name'       => 'Section title',
        'id'         => 'testimonials_title',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name'       => 'Add a new testimonial or edit existing ones via Testimonials in the sidebar!',
        'id'         => 'testimonials_prompt',
        'type'       => 'title',
    ) );

        // NEWSLETTER

    $cmb = new_cmb2_box( array(
        'id'            => 'leedstidal_home_newsletter',
        'title'         => __( 'Newsletter', 'cmb2' ),
        'object_types'  => array( 'page'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb-styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    $cmb->add_field( array(
        'name'       => 'Section title',
        'id'         => 'newsletter_title',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name'       => 'Description',
        'id'         => 'newsletter_description',
        'type'       => 'textarea_small',
    ) );

    $cmb->add_field( array(
        'name'       => 'Reasons to join',
        'desc'       => __( 'Best formatted as bullet points', 'cmb2' ),
        'id'         => 'newsletter_reasons',
        'type'       => 'wysiwyg',
    ) );
}

