<?php return [
    'plugin' => [
        'name' => 'Slideshow',
        'description' => 'Ein Plugin um Twitter Bootstrap Carousels mit zus&auml;tzlichem Inhalt zu erstellen und anzuzeigen.',
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
        'manage' => 'Slideshows verwalten',
    ],
    'components' => [
        'slideshow' => [
            'name' => 'Slideshow',
            'description' => 'Eine Slideshow anzeigen.',
            'properties' => [
                'id' => [
                    'title' => 'Slideshow',
                    'description' => 'Dieser Wert kann je nach der in der URL dieser Seite verwendeten ID ge&auml;ndert werden. F&uuml;r weitere Information befinden sich in der Dokumentation des Plugins.',
                    'placeholder' => 'Slideshow ausw&auml;hlen',
                ],
                'number_of_slide' => [
                    'title' => 'Slides limit',
                    'description' => 'Maximale anzahl von Slides, die angezeigt werden solllen',
                    'placeholder' => '5',
                ],
            ],
        ],
    ],
    'controller' => [
        'view' => [
            'slideshows' => [
                'new' => 'Neue Slideshow',
                'breadcrumb_label' => 'Slideshows',
                'return' => 'Zu der Slideshows Liste zur&uuml;ckkehren',
                'creating' => 'Slideshow erstellen...',
                'delete_confirmation' => 'Wollen Sie diese Slideshow wirklich l&ouml;schen?',
            ],
        ],
        'list' => [
            'slideshows' => 'Slideshows verwalten',
        ],
        'form' => [
            'slideshows' => [
                'title' => 'Slideshow',
                'create' => 'Slideshow erstellen',
                'update' => 'Slideshow aktualisieren',
                'flashCreate' => 'Die Slideshow wurde erfolgreich erstellt',
                'flashUpdate' => 'Die Slideshow wurde erfolgreich aktualisiert',
                'flashDelete' => 'Die Slideshow wurde erfolgreich gel&ouml;scht',
            ],
        ],
        'config' => [
            'relation' => [
                'label' => 'Slideshow Slides',
                'emptyMessage' => 'Diese slideshow enh&auml;lt keine Slides.'
            ],
        ],
    ],
    'columns' => [
        'slideshow' => [
            'id' => 'ID',
            'name' => 'Name',
            'slides_count' => 'Anzahl der Slides'
        ],
        'slide' => [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Beschreibung',
            'link' => 'Link Ziel',
            'is_published' => 'Ver&ouml;ffentlicht?',
        ],
    ],
    'fields' => [
        'slideshow' => [
            'name' => 'Name',
        ],
        'slide' => [
            'name' => 'Name',
            'description' => 'Beschreibung',
            'link' => 'Link Ziel',
            'image' => 'Bild',
            'unpublished_at' => 'Startdatum der Ver&ouml;ffentlichung',
            'published_at' => 'Enddatum der Ver&ouml;ffentlichung',
            'is_published' => 'Ver&ouml;ffentlicht?',
        ],
    ],
];
