<?php
/**
 * Template part for displaying results in search pages
 */

?>

<!-- content-search -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
      <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

      <?php if ('post' === get_post_type()) : ?>
        <div class="entry-meta">
            <?php
            spock()->post()->postedOn()->postedBy();
            ?>
        </div>
      <?php endif; ?>
  </header>

    <?php spock()->post()->thumbnail(); ?>

  <div class="entry-summary">
      <?php the_excerpt(); ?>
  </div>

  <footer class="entry-footer">
      <?php get_template_part('resources/views/footer/entry', 'footer'); ?>
  </footer>
</article>
