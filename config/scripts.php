<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Additional scripts for all theme
    |--------------------------------------------------------------------------
    |
    | You'll use 'key' => 'filename'.
    |
    | If you need to include a script for a specific page, use `/theme/function.php`
    | to add your hook, for example
    |
    | add_action('wp_enqueue_scripts', function () {
    |   if (is_page_template('templates/page-home-page.php')) {
    |     wp_enqueue_script('spock-script',
    |        get_template_directory_uri() . '/public/js/script.js',
    |        [], wp_get_theme()->version, true);
    |   }
    | });
    |
    */

    'ewp-common' => 'index.js',
    ];