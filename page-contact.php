<?php
/* Template Name: Contact Page */
get_header();
?>



<body>
<div class="intro padding-20">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content(); // Now cleanly placed
                endwhile;
            endif;
            ?>
        </div>
        <form class="contact-form">
            <div class="form-container">
                <div class="left">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="right">
                    <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
                    <button id="hover-btn" type="submit" data-default="Send" data-hover="Go!">Send</button>
                </div>
            </div>
        </form>
        
    </body>

<?php get_footer(); ?>
