<?php return [
    'plugin' => [
        'name' => 'Slideshow',
        'description' => 'A plugin to create and display Twitter Bootstrap carousels with additional content.',
    ],
    'navigation' => [
        'label' => 'Slideshow',
        'sideMenu' => [
            'slideshows' => 'Slideshows',
            'slides' => 'Slides',
        ],
    ],
    'permissions' => [
        'tab' => 'Slideshow',
        'manage' => 'Manage slideshows',
    ],
    'components' => [
        'slideshow' => [
            'name' => 'Slideshow',
            'description' => 'Display a slideshow.',
            'properties' => [
                'id' => [
                    'title' => 'ID',
                    'description' => 'This value can be changed depending on the identifier used in the URL of this page. See the plugin\'s manual for more information.',
                    'placeholder' => 'Select slideshow',
                ],
            ],
        ],
    ],
    'controller' => [
        'view' => [
            'slideshows' => [
                'new' => 'New Slideshow',
                'breadcrumb_label' => 'Slideshows',
                'return' => 'Return to slideshows list',
                'creating' => 'Creating Slideshow...',
                'delete_confirmation' => 'Do you really want to delete this slideshow?',
            ],
        ],
        'list' => [
            'slideshows' => 'Manage Slideshows',
        ],
        'form' => [
            'slideshows' => [
                'title' => 'Slideshow',
                'create' => 'Create Slideshow',
                'update' => 'Update Slideshow',
                'flashCreate' => 'The Slideshow has been successfully created',
                'flashUpdate' => 'The Slideshow has been successfully updated',
                'flashDelete' => 'The Slideshow has been successfully deleted',
            ],
        ],
    ],
    'columns' => [
        'slideshow' => [
            'id' => 'ID',
            'name' => 'Name',
            'slides_count' => 'Number of slides',
            'published' => 'Published',
        ],
        'slide' => [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'link' => 'Target link',
            'published' => 'Published',
        ],
    ],
    'fields' => [
        'slideshow' => [
            'name' => 'Name',
        ],
        'slide' => [
            'name' => 'Name',
            'description' => 'Description',
            'link' => 'Target link',
            'image' => 'Image',
            'unpublished_at' => 'Finish publishing',
            'published_at' => 'Start publishing',
            'published' => 'Published',
        ],
    ],
];