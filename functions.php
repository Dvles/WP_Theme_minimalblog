<?php

function themembb_register_styles(){
    // CSS with cache-busting using filemtime
    wp_enqueue_style('themembb-global-css', get_template_directory_uri() . "/assets/css/global.css", array(), filemtime(get_template_directory() . '/assets/css/global.css'), 'all');
    wp_enqueue_style('themembb-splide-css', get_template_directory_uri() . "/assets/css/splide.css", array(), filemtime(get_template_directory() . '/assets/css/global.css'), 'all');
    wp_enqueue_style('themembb-about-css', get_template_directory_uri() . "/assets/css/about.css", array(), filemtime(get_template_directory() . '/assets/css/about.css'), 'all');
    wp_enqueue_style('themembb-footer-css', get_template_directory_uri() . "/assets/css/footer.css", array(), filemtime(get_template_directory() . '/assets/css/footer.css'), 'all');
    wp_enqueue_style('themembb-form-css', get_template_directory_uri() . "/assets/css/form.css", array(), filemtime(get_template_directory() . '/assets/css/form.css'), 'all');
    wp_enqueue_style('themembb-header-css', get_template_directory_uri() . "/assets/css/header.css", array(), filemtime(get_template_directory() . '/assets/css/header.css'), 'all');
    wp_enqueue_style('themembb-portfolio-article-css', get_template_directory_uri() . "/assets/css/portfolio_article.css", array(), filemtime(get_template_directory() . '/assets/css/portfolio_article.css'), 'all');
    wp_enqueue_style('themembb-portfolio-grid-css', get_template_directory_uri() . "/assets/css/portfolio_grid.css", array(), filemtime(get_template_directory() . '/assets/css/portfolio_grid.css'), 'all');

    // External CSS
    wp_enqueue_style('cdn-splide-css', "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css", array(), '4.1.4', 'all');
}

function themembb_register_scripts(){
    // JS (local) with cache-busting using filemtime
    wp_enqueue_script('themembb-main-js', get_template_directory_uri() . "/assets/js/script.js", array(), filemtime(get_template_directory() . '/assets/js/script.js'), true);
    wp_enqueue_script('themembb-splide', get_template_directory_uri() . "/assets/js/splide.js", array(), filemtime(get_template_directory() . '/assets/js/splide.js'), true);
    wp_enqueue_script('themembb-scroll', get_template_directory_uri() . "/assets/js/scroll.js", array(), filemtime(get_template_directory() . '/assets/js/scroll.js'), true);
    wp_enqueue_script('themembb-skills', get_template_directory_uri() . "/assets/js/skills.js", array(), filemtime(get_template_directory() . '/assets/js/skills.js'), true);

    // Conditional JS
    if (is_page('specific-page-slug') || is_single('specific-post-slug')) {
        wp_enqueue_script('themembb-lightbox', get_template_directory_uri() . "/assets/js/lightbox.js", array(), filemtime(get_template_directory() . '/assets/js/lightbox.js'), true);
        wp_enqueue_script('themembb-hover-text', get_template_directory_uri() . "/assets/js/hover-text.js", array(), filemtime(get_template_directory() . '/assets/js/hover-text.js'), true);
    }
        

    // External JS
    wp_enqueue_script('cdn-splide-js', "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js", array(), '4.1.4', true);

    // Defer all scripts
    wp_script_add_data('themembb-splide', 'defer', true);
    wp_script_add_data('cdn-splide-js', 'defer', true);
    wp_script_add_data('themembb-skills', 'defer', true);
    wp_script_add_data('themembb-hover-text', 'defer', true);
    wp_script_add_data('themembb-scroll', 'defer', true);
    wp_script_add_data('themembb-main-js', 'defer', true);
}

// Register both correctly
add_action('wp_enqueue_scripts', 'themembb_register_styles');
add_action('wp_enqueue_scripts', 'themembb_register_scripts');

?>
