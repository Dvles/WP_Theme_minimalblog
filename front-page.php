<?php
get_header();
?>

<main class="homepage1-main-content">
    <section class="splide" aria-label="Project slider">
        <div class="splide__track">
            <ul class="splide__list">
                <?php
                // Custom query for latest blog posts
                $latest_posts = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 5
                ]);

                if ($latest_posts->have_posts()) :
                    while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                        <li class="splide__slide">
                            <div class="homepage-image-container">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="https://placehold.co/500x400" alt="<?php the_title(); ?>">
                                </a>
                            </div>
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="hero-title"><?php the_title(); ?></h2>
                            </a>
                        </li>
                    <?php endwhile;
                    wp_reset_postdata(); // important!
                else : ?>
                    <p>No recent posts found.</p>
                <?php endif; ?>
            </ul>
        </div>
    </section>
</main>

<?php
get_footer();
?>
