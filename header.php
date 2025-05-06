<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    
</head>

<body>

    <!-- Sticky Header -->
    <header class="container">
        <div class="navbar">
            <?php 
               // if(function_exists('the_custom_logo')){
                    // the_custom_logo(); adds logo with WP classes
                    //$custom_logo_id= get_theme_mod('custom_logo');
                   // $logo = wp_get_attachement_image_src($custom_logo_id);
               // }
            ?>
            <h2><a href="index.html"><?php echo get_bloginfo('name');?></a></h2>
            <nav class="nav-flex">
                <?php
                    wp_nav_menu(
                        array(
                            'menu'=>'primay',
                            'container'=>'',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class"">%3$s</ul>' // emty classes & id to avoid WP from adding its own??
                        )
                    );
                ?>
            </nav>
        </div>

    </header>
<!--     <div class="main-wrapper">
        <h1 class=""> <?php the_title(); ?></h1>
            
    </div> -->
