<?php
function themembb_theme_support() {
    add_theme_support('title_tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails'); // featured image to posts

    // Custom sizes
    add_image_size('custom-thumb-small', 150, 150, true);
    add_image_size('custom-thumb-wide', 600, 300, true);

    
}
add_action('after_setup_theme', 'themembb_theme_support');


function my_theme_customize_register( $wp_customize ) {
    // Add a new section for Social Media Links
    $wp_customize->add_section('social_media_section', array(
        'title'       => __('Social Media Links', 'your-theme'),
        'priority'    => 20,  // Set a unique priority for this section
        'description' => __('Edit your social media links displayed in the footer.'),
    ));

    // Add each social media platform
    $socials = ['linkedin', 'instagram', 'behance'];
    foreach ($socials as $social) {
        $wp_customize->add_setting("{$social}_url", array(
            'default'   => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control("{$social}_url", array(
            'label'   => ucfirst($social) . ' URL',
            'section' => 'social_media_section',
            'type'    => 'url',
        ));
    }
}

add_action('customize_register', 'my_theme_customize_register');



function themembb_menus(){
    $locations = array(
        'primary' => "Desktop primary header menu",
        'footer' => "Footer menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'themembb_menus');

function themembb_register_styles() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    $styles = [
        'global'                => 'global.css',
        'splide'                => 'splide.css',
        'about'                 => 'about.css',
        'footer'                => 'footer.css',
        'form'                  => 'form.css',
        'header'                => 'header.css',
        'portfolio-article'     => 'portfolio_article.css',
        'portfolio-grid'        => 'portfolio_grid.css',
    ];

    foreach ($styles as $handle => $file) {
        $path = "$theme_dir/assets/css/$file";
        if (file_exists($path)) {
            wp_enqueue_style("themembb-$handle-css", "$theme_uri/assets/css/$file", [], filemtime($path), 'all');
        }
    }

    // External Splide CSS
    wp_enqueue_style('cdn-splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', [], '4.1.4', 'all');
}


function themembb_register_scripts() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    $scripts = [
        'main-js'       => 'script.js',
        'splide'        => 'splide.js',
        'scroll'        => 'scroll.js',
        'skills'        => 'skills.js',
    ];

    foreach ($scripts as $handle => $file) {
        $path = "$theme_dir/assets/js/$file";
        if (file_exists($path)) {
            wp_enqueue_script("themembb-$handle", "$theme_uri/assets/js/$file", [], filemtime($path), true);
            wp_script_add_data("themembb-$handle", 'defer', true);
        }
    }

    // Conditional scripts
    if (is_singular()) {
        $conditional_scripts = [
            'lightbox'    => 'lightbox.js',
            'hover-text'  => 'hover-text.js',
        ];

        foreach ($conditional_scripts as $handle => $file) {
            $path = "$theme_dir/assets/js/$file";
            if (file_exists($path)) {
                wp_enqueue_script("themembb-$handle", "$theme_uri/assets/js/$file", [], filemtime($path), true);
                wp_script_add_data("themembb-$handle", 'defer', true);
            }
        }
    }

    // External Splide JS
    wp_enqueue_script('cdn-splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', [], '4.1.4', true);
    wp_script_add_data('cdn-splide-js', 'defer', true);
}

// Register both correctly
add_action('wp_enqueue_scripts', 'themembb_register_styles');
add_action('wp_enqueue_scripts', 'themembb_register_scripts');

?>
