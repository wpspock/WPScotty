<?php
/**
 * The template for displaying the footer.
 *
 * Edit /resources/wp_footer.php
 *
 * @internal
 */

?>

	</div><!-- #spock-content -->

</div><!-- #spock-page -->

<?php wp_footer() ?>

<?php if (apply_filters('spock_should_display_footer', true)) : ?>
  <?php get_template_part( 'resources/views/footer/footer' ) ?>
<?php endif; ?>

</body>
</html>
