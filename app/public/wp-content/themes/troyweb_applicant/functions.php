<?php
function troyweb_applicant_enqueue_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Oldenburg&display=swap', array(), null );

    // Enqueue Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all' );

    // Enqueue Bootstrap JS with Popper.js (required for Bootstrap's JavaScript components)
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true );

    // Enqueue Font Awesome CSS
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4' );

    // Enqueue main theme stylesheet
    wp_enqueue_style( 'troyweb-applicant-style', get_stylesheet_uri(), array('google-fonts', 'bootstrap-css', 'font-awesome') );
}

// Hook the function into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'troyweb_applicant_enqueue_scripts' );

// Register Custom Post Type: Applicant
function create_applicant_post_type() {
    $labels = array(
        'name'               => _x( 'Applicants', 'Post Type General Name', 'troyweb_applicant' ),
        'singular_name'      => _x( 'Applicant', 'Post Type Singular Name', 'troyweb_applicant' ),
        'menu_name'          => __( 'Applicants', 'troyweb_applicant' ),
        'name_admin_bar'     => __( 'Applicant', 'troyweb_applicant' ),
        'add_new'            => __( 'Add New', 'troyweb_applicant' ),
        'add_new_item'       => __( 'Add New Applicant', 'troyweb_applicant' ),
        'new_item'           => __( 'New Applicant', 'troyweb_applicant' ),
        'edit_item'          => __( 'Edit Applicant', 'troyweb_applicant' ),
        'view_item'          => __( 'View Applicant', 'troyweb_applicant' ),
        'all_items'          => __( 'All Applicants', 'troyweb_applicant' ),
        'search_items'       => __( 'Search Applicants', 'troyweb_applicant' ),
        'parent_item_colon'  => __( 'Parent Applicants:', 'troyweb_applicant' ),
        'not_found'          => __( 'No applicants found.', 'troyweb_applicant' ),
        'not_found_in_trash' => __( 'No applicants found in Trash.', 'troyweb_applicant' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'applicant' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'applicant', $args );
}

// Hook the function to the 'init' action
add_action( 'init', 'create_applicant_post_type' );

// Register Custom Post Type: Core Value
function create_core_value_post_type() {
    $labels = array(
        'name'               => _x( 'Core Values', 'Post Type General Name', 'troyweb_applicant' ),
        'singular_name'      => _x( 'Core Value', 'Post Type Singular Name', 'troyweb_applicant' ),
        'menu_name'          => __( 'Core Values', 'troyweb_applicant' ),
        'name_admin_bar'     => __( 'Core Value', 'troyweb_applicant' ),
        'add_new'            => __( 'Add New', 'troyweb_applicant' ),
        'add_new_item'       => __( 'Add New Core Value', 'troyweb_applicant' ),
        'new_item'           => __( 'New Core Value', 'troyweb_applicant' ),
        'edit_item'          => __( 'Edit Core Value', 'troyweb_applicant' ),
        'view_item'          => __( 'View Core Value', 'troyweb_applicant' ),
        'all_items'          => __( 'All Core Values', 'troyweb_applicant' ),
        'search_items'       => __( 'Search Core Values', 'troyweb_applicant' ),
        'parent_item_colon'  => __( 'Parent Core Values:', 'troyweb_applicant' ),
        'not_found'          => __( 'No core values found.', 'troyweb_applicant' ),
        'not_found_in_trash' => __( 'No core values found in Trash.', 'troyweb_applicant' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'core-value' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'core_value', $args );
}

// Hook the function to the 'init' action
add_action( 'init', 'create_core_value_post_type' );

// Function to create 'skill' taxonomy
function create_skills_taxonomy() {
    $labels = array(
        'name'              => _x( 'Skills', 'taxonomy general name', 'troyweb_applicant' ),
        'singular_name'     => _x( 'Skill', 'taxonomy singular name', 'troyweb_applicant' ),
        'search_items'      => __( 'Search Skills', 'troyweb_applicant' ),
        'all_items'         => __( 'All Skills', 'troyweb_applicant' ),
        'parent_item'       => __( 'Parent Skill', 'troyweb_applicant' ),
        'parent_item_colon' => __( 'Parent Skill:', 'troyweb_applicant' ),
        'edit_item'         => __( 'Edit Skill', 'troyweb_applicant' ),
        'update_item'       => __( 'Update Skill', 'troyweb_applicant' ),
        'add_new_item'      => __( 'Add New Skill', 'troyweb_applicant' ),
        'new_item_name'     => __( 'New Skill Name', 'troyweb_applicant' ),
        'menu_name'         => __( 'Skills', 'troyweb_applicant' ),
    );

    $args = array(
        'hierarchical'      => false, // Set to false for a tag-like structure.
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'skill' ),
    );

    // Register the taxonomy and associate it with the 'applicant' post type
    register_taxonomy( 'skill', array( 'applicant' ), $args );

    // Array of skills to be added
    $skills = array(
        'PHP' => 'php',
        'Laravel' => 'laravel',
        'WordPress' => 'wordpress',
        '.NET' => 'dot-net',
        'C#' => 'csharp',
        'SQL' => 'sql',
    );

    // Loop through skills and insert terms
    foreach ($skills as $skill_name => $skill_slug) {
        // Check if term exists
        $term = term_exists($skill_name, 'skill');

        if (!$term) {
            // Insert term if it doesn't exist
            $inserted_term = wp_insert_term($skill_name, 'skill', array(
                'slug' => $skill_slug,
            ));

            if (is_wp_error($inserted_term)) {
                error_log('Failed to insert term "' . $skill_name . '": ' . $inserted_term->get_error_message());
            } else {
                // Log success message
                error_log('Inserted term "' . $skill_name . '" with ID: ' . $inserted_term['term_id']);
            }
         }
    }
}

// Hook the function to the 'init' action
add_action( 'init', 'create_skills_taxonomy' );

// Function to register Experience Taxonomy
function create_experience_taxonomy() {
    $labels = array(
        'name'              => _x( 'Experiences', 'taxonomy general name', 'troyweb_applicant' ),
        'singular_name'     => _x( 'Experience', 'taxonomy singular name', 'troyweb_applicant' ),
        'search_items'      => __( 'Search Experiences', 'troyweb_applicant' ),
        'all_items'         => __( 'All Experiences', 'troyweb_applicant' ),
        'parent_item'       => __( 'Parent Experience', 'troyweb_applicant' ),
        'parent_item_colon' => __( 'Parent Experience:', 'troyweb_applicant' ),
        'edit_item'         => __( 'Edit Experience', 'troyweb_applicant' ),
        'update_item'       => __( 'Update Experience', 'troyweb_applicant' ),
        'add_new_item'      => __( 'Add New Experience', 'troyweb_applicant' ),
        'new_item_name'     => __( 'New Experience Name', 'troyweb_applicant' ),
        'menu_name'         => __( 'Experiences', 'troyweb_applicant' ),
    );

    $args = array(
        'hierarchical'      => false, // Set to false for a tag-like structure.
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'experience' ),
    );

    // Register the taxonomy and associate it with the 'applicant' post type
    register_taxonomy( 'experience', array( 'applicant' ), $args );

    // Array of Experiences to be added
    $experiences = array(
        'Web Development' => 'web-development',
        'Database Design' => 'database-design',
        'Tech Project Lead' => 'tech-project-lead',
        'WordPress Expert' => 'wordpress-expert',
    );

    // Loop through experiences and insert terms
    foreach ($experiences as $experience_name => $experience_slug) {
        // Check if term exists
        $term = term_exists($experience_name, 'experience');

        if (!$term) {
            // Insert term if it doesn't exist
            $inserted_term = wp_insert_term($experience_name, 'experience', array(
                'slug' => $experience_slug,
            ));

            if (is_wp_error($inserted_term)) {
                error_log('Failed to insert term "' . $experience_name . '": ' . $inserted_term->get_error_message());
            } else {
                // Log success message
                error_log('Inserted term "' . $experience_name . '" with ID: ' . $inserted_term['term_id']);
            }
        }
    }
}

// Hook the function to the 'init' action at the end
add_action( 'init', 'create_experience_taxonomy' );

// Register navigation menus for the theme.
function troyweb_register_menus() {
    // Register a navigation menu for the header
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'troyweb-applicant'),
    ));
}

// Hook the function to the after_setup_theme action
add_action('after_setup_theme', 'troyweb_register_menus');


// Register theme supports for custom logos
function custom_theme_supports() {
    add_theme_support('custom-header', array(
        'height'      => 480,
        'width'       => 720,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));

    add_theme_support( 'custom-logo', array(
        'height'      => 480,
        'width'       => 720,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));
}
add_action('after_setup_theme', 'custom_theme_supports');