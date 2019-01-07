<?php

/*
|--------------------------------------------------------------------------
| Sidebar Theme configuration
|--------------------------------------------------------------------------
|
| @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
|
*/

return [
    [
        'name' => esc_html__('Sidebar', 'wpspock'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'wpspock'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ],
    [
        'name' => __('Footer', 'wpspock'),
        'id' => 'sidebar-2',
        'description' => __('Add widgets here to appear in your footer.', 'wpspock'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ],
];