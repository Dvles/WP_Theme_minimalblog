<?php
get_header();

?>

<?php

if( have_posts()){

    while (have_posts()){
        the_post();
    }
}

?>


<main class="main-content block">
        <article class="article">
            <section class="article-image">
            <?php get_template_part('template-parts/content','feat-image'); ?>
                </section>
            
            
            <section class="article-content">
                <h1 class="block__title"><?php the_title(); ?></h1>
                <p>By <?php the_author(); ?> | <?php the_date(); ?></p>

                <section class="article-body">
                    <p class="article-paragraph">
                    <?php get_template_part('template-parts/content','article'); ?>
                    </p>

                    <h6 class="article-paragraph block">
                        <ul>
                            <li><a href="" class="block__link">share</a></li>
                            <li><a href="" class="block__link">bookmark</a></li>
                            <li><a href="" class="block__link">download</a></li>
                        </ul>

                    </h6>
                </section>
            </section>
        </article>
    </main>

    <div id="lightbox" class="lightbox">
        <span class="close">&times;</span>
        <img class="lightbox-content" id="lightbox-img">
    </div>
    <div class="custom-cursor"></div>


<?php
get_footer();

?>