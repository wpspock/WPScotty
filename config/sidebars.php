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
        'name' => esc_html__('Sidebar', 'easywp'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'easywp'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ],
];