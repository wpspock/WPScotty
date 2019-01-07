<?php
/**
 * The header for our theme.
 *
 * Edit /resources/wp_head.php
 *
 * @internal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

  <!-- Dealing with slower connections -->
  <link rel="canonical"
        href="<?php echo get_site_url() ?>"/>

  <link rel="shortcut icon"
        href="/favicon.ico"/>

  <link rel="icon"
        href="/favicon.ico"/>

  <link rel="mask-icon"
        href="/favicon.svg"
        color="#09B584"/>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <link rel="profile"
        href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="spock-page">

    <?php if (apply_filters('spock_should_display_header', true)) : ?>
        <?php get_template_part( 'resources/views/header/header' ) ?>
    <?php endif; ?>

  <div id="spock-content">