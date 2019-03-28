<?php
/**
 * Template part for displaying posts
 *
 */
?>

<!-- content -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
      <?php get_template_part('resources/views/header/entry', 'header'); ?>
  </header>

  <div class="entry-content">
      <?php
      the_content(
          sprintf(
              wp_kses(
                  __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'wpspock'),
                  [
                      'span' => [
                          'class' => [],
                      ],
                  ]
              ),
              get_the_title()
          )
      );

      wp_link_pages(
          [
              'before' => '<div class="page-links">' . __('Pages:', 'wpspock'),
              'after' => '</div>',
          ]
      );
      ?>
  </div>

  <footer class="entry-footer">
      <?php get_template_part('resources/views/footer/entry', 'footer'); ?>
  </footer>

</article>
