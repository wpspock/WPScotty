<?php

/*
|--------------------------------------------------------------------------
| Editor configuration
|--------------------------------------------------------------------------
|
|
*/

return [

    // Enqueue editor styles.
    'editor-styles' => 'style-editor.css',

    // Add custom editor font sizes.
    'editor-font-sizes' =>
        [
            [
                'name' => __('Small', 'wpspock'),
                'shortName' => __('S', 'wpspock'),
                'size' => 19.5,
                'slug' => 'small',
            ],
            [
                'name' => __('Normal', 'wpspock'),
                'shortName' => __('M', 'wpspock'),
                'size' => 22,
                'slug' => 'normal',
            ],
            [
                'name' => __('Large', 'wpspock'),
                'shortName' => __('L', 'wpspock'),
                'size' => 36.5,
                'slug' => 'large',
            ],
            [
                'name' => __('Huge', 'wpspock'),
                'shortName' => __('XL', 'wpspock'),
                'size' => 49.5,
                'slug' => 'huge',
            ],
        ],

    // Editor color palette.
    'editor-color-palette' =>
        [
            [
                'name' => __('Primary', 'wpspock'),
                'slug' => 'primary',
                'color' => '#fe0',
            ],
            [
                'name' => __('Secondary', 'wpspock'),
                'slug' => 'secondary',
                'color' => '#acd',
            ],
            [
                'name' => __('Dark Gray', 'wpspock'),
                'slug' => 'dark-gray',
                'color' => '#111',
            ],
            [
                'name' => __('Light Gray', 'wpspock'),
                'slug' => 'light-gray',
                'color' => '#767676',
            ],
            [
                'name' => __('White', 'wpspock'),
                'slug' => 'white',
                'color' => '#FFF',
            ],
        ],
        // additional allows mime types
        'upload_mimes' => [
            'svg' => 'image/svg+xml'
        ],
];