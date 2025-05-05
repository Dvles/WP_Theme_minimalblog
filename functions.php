<?php

function themembb_register_styles(){
    // CSS
    wp_enqueue_style('themembb-global-css', get_template_directory_uri() . "/assets/css/global.css", array(), '1.0', 'all');
    wp_enqueue_style('themembb-about-css', get_template_directory_uri() . "/assets/css/about.css", array(), '1.0', 'all');
    wp_enqueue_style('themembb-footer-css', get_template_directory_uri() . "/assets/css/footer.css", array(), '1.0', 'all');
    wp_enqueue_style('themembb-form-css', get_template_directory_uri() . "/assets/css/form.css", array(), '1.0', 'all');
    wp_enqueue_style('themembb-header-css', get_template_directory_uri() . "/assets/css/header.css", array(), '1.0', 'all');
    wp_enqueue_style('themembb-portfolio-article-css', get_template_directory_uri() . "/assets/css/portfolio_article.css", array(), '1.0', 'all');
    wp_enqueue_style('themembb-portfolio-grid-css', get_template_directory_uri() . "/assets/css/portfolio_grid.css", array(), '1.0', 'all');

    // External CSS
    wp_enqueue_style('cdn-splide-css', "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css", array(), '4.1.4', 'all');
}

function themembb_register_scripts(){
    // JS (local)
    wp_enqueue_script('themembb-main-js', get_template_directory_uri() . "/assets/js/script.js", array(), '1.0', true);
    wp_enqueue_script('themembb-splide', get_template_directory_uri() . "/assets/js/splide.js", array(), '1.0', true);
    wp_enqueue_script('themembb-lightbox', get_template_directory_uri() . "/assets/js/lightbox.js", array(), '1.0', true);
    wp_enqueue_script('themembb-scroll', get_template_directory_uri() . "/assets/js/scroll.js", array(), '1.0', true);
    wp_enqueue_script('themembb-hover-text', get_template_directory_uri() . "/assets/js/hover-text.js", array(), '1.0', true);
    wp_enqueue_script('themembb-skills', get_template_directory_uri() . "/assets/js/skills.js", array(), '1.0', true);

    // External JS
    wp_enqueue_script('cdn-splide-js', "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js", array(), '4.1.4', true);
}

// Register both correctly
add_action('wp_enqueue_scripts', 'themembb_register_styles');
add_action('wp_enqueue_scripts', 'themembb_register_scripts');

?>
