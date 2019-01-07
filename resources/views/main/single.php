<?php
/**
 * The template for displaying all single posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
?>

  <section id="primary"
       class="content-area">
    <main id="main"
          class="site-main">

        <?php
        while(have_posts()) :
            the_post();

            get_template_part('resources/views/main/content/content', 'single');

            the_post_navigation();

            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

    </main>
  </section>

<?php
//get_sidebar();
get_footer();
