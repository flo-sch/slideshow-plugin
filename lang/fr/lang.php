<?php return [
    'plugin' => [
        'name' => 'Slideshow',
        'description' => 'Un plugin pour créer et afficher un slideshow sur le style du carousel Twitter Bootstrap, avec du contenu additionel.',
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
        'manage' => 'Gérer les slideshows',
    ],
    'components' => [
        'slideshow' => [
            'name' => 'Slideshow',
            'description' => 'Affiche un slideshow.',
            'properties' => [
                'id' => [
                    'title' => 'Slideshow',
                    'description' => 'Cette valeur peut être changée en fonction de l\'identifiant utilisé dans l\'URL de cette page. Voir la documentation du plugin pour plus d\'informations.',
                    'placeholder' => 'Choisir le slideshow',
                ],
                'number_of_slide' => [
                    'title' => 'Limites de slides',
                    'description' => 'Limite maximale de slides à afficher pour ce slideshow',
                    'placeholder' => '5',
                ],
            ],
        ],
    ],
    'controller' => [
        'view' => [
            'slideshows' => [
                'new' => 'Nouveau slideshow',
                'breadcrumb_label' => 'Slideshows',
                'return' => 'Revenir à la liste',
                'creating' => 'Création en cours...',
                'delete_confirmation' => 'Voulez-vous vraiment supprimer ce slideshow ?',
            ],
        ],
        'list' => [
            'slideshows' => 'Gérer les slideshows',
        ],
        'form' => [
            'slideshows' => [
                'title' => 'Slideshow',
                'create' => 'Créer un slideshow',
                'update' => 'Mettre à jour un slideshow',
                'flashCreate' => 'Le slideshow a bien été créé',
                'flashUpdate' => 'Le slideshow a bien été mis à jour',
                'flashDelete' => 'Le slideshow a bien été supprimé',
            ],
        ],
        'config' => [
            'relation' => [
                'label' => 'Slideshow slides',
                'emptyMessage' => 'Aucune slide n\'est liée à ce slideshow pour le moment.'
            ],
        ],
    ],
    'columns' => [
        'slideshow' => [
            'id' => 'ID',
            'name' => 'Nom',
            'slides_count' => 'Nombre de slides'
        ],
        'slide' => [
            'id' => 'ID',
            'name' => 'Nom',
            'description' => 'Description',
            'link' => 'Adresse du lien',
            'is_published' => 'Publié ?',
        ],
    ],
    'fields' => [
        'slideshow' => [
            'name' => 'Nom',
        ],
        'slide' => [
            'name' => 'Nom',
            'description' => 'Description',
            'link' => 'Adresse du lien',
            'image' => 'Image',
            'unpublished_at' => 'Fin de publication',
            'published_at' => 'Début de publication',
            'is_published' => 'Publié ?',
        ],
    ],
];
