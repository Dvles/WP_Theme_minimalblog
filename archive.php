<?php get_header(); ?>

<main class="main-content">
    <div class="portfolio-grid block">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="portfolio-item block__link">
                <article>
                    <div class="image-container">
                        <img src="https://placehold.co/500x400" class="primary-image">
                        <img src="https://res.cloudinary.com/dzqge7ico/image/upload/v1742820606/placeholder_1_hmjqkj.png" class="hover-image">
                    </div>
                    <h2><?php the_title(); ?></h2>
                </article>
            </a>
        <?php endwhile; else : ?>
            <p>No posts found.</p>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
