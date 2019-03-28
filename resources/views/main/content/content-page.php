<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

?>

<!-- content-page -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
      <?php get_template_part('resources/views/header/entry', 'header'); ?>
  </header>

  <div class="entry-content">
      <?php
      the_content();

      wp_link_pages([
          'before' => '<div class="page-links">' . esc_html__('Pages:', 'wpspock'),
          'after' => '</div>',
      ]);
      ?>
  </div>

    <?php if (get_edit_post_link()) : ?>
      <footer class="entry-footer">
          <?php
          edit_post_link(
              sprintf(
                  wp_kses(
                  /* translators: %s: Name of current post. Only visible to screen readers */
                      __('Edit <span class="screen-reader-text">%s</span>', 'wpspock'),
                      [
                          'span' => [
                              'class' => [],
                          ],
                      ]
                  ),
                  get_the_title()
              ),
              '<span class="edit-link">',
              '</span>'
          );
          ?>
      </footer>
    <?php endif; ?>
</article>
