<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Misc
    |--------------------------------------------------------------------------
    |
    |
    */

    'add_editor_style' => true,

    // minify the HTML
    'minify' => true,

    /*
    |--------------------------------------------------------------------------
    | Theme support
    |--------------------------------------------------------------------------
    |
    | Used in add_theme_support()
    |
    */
    'theme_support' => [
        // Add default posts and comments RSS feed links to head.
        'automatic-feed-links',
        // Let WordPress manage the document title.
        // By adding theme support, we declare that this theme does not use a
        // hard-coded <title> tag in the document head, and expect WordPress to
        // provide it for us.
        'title-tag',
        // Enable support for Post Thumbnails on posts and pages.
        // @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        'post-thumbnails',
        // Set up the WordPress core custom background feature.
        'custom-background',
        'array_themes_gallery_support',
        'array_toolkit_legacy_widgets',
        'post-formats' => ['gallery'],
        // Switch default core markup for search form, comment form, and comments
        // to output valid HTML5.
        'html5' => [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ],
        // Add theme support for selective refresh for widgets.
        'customize-selective-refresh-widgets',
        // Add support for core custom logo.
        // @link https://codex.wordpress.org/Theme_Logo
        'custom-logo' => [
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ],
        // Add support for Block Styles.
        'wp-block-styles',
        // Add support for full and wide align images.
        'align-wide',
        // Add support for responsive embedded content.
        'responsive-embeds'
    ],

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | init to your theme. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [
    ],

];