<?php
/* Template Name: About Page */
get_header();
?>



<body>


    <main class="about main-content block">
        <div class="container flex-container">
            <section>
                <div class="intro">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            the_content(); // this will render its own <p> tags
                        endwhile;
                    endif;
                    ?>
                </div>
            </section>

            <section class="skill-section">
                <div class="skill-list">
                    <?php for ($i = 1; $i <= 6; $i++) :
                            $title = get_field("skill_{$i}");
                            $desc = get_field("skill_description_{$i}");
                        if ($title && $desc): ?>
                            <div class="skill">
                                <span class="skill-text block__link"><?php echo esc_html($title); ?></span>
                                <p class="hidden"><?php echo esc_html($desc); ?></p>
                            </div>
                        <?php endif;
                    endfor; ?>
                </div>

                <!-- Skill Description -->
                <div class="skill-description-div">
                    <p id="skill-description" class="skill-description"></p>
                </div>
            </section>

        </div>
    </main>


<?php get_footer(); ?>
