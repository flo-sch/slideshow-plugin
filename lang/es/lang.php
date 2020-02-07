<?php return [
    'plugin' => [
        'name' => 'Presentación',
        'description' => 'Plugin para crear y mostrar carruseles de Twitter Bootstrap con contenido adicional.',
    ],
    'navigation' => [
        'label' => 'Presentación',
        'sideMenu' => [
            'slideshows' => 'Presentación',
            'slides' => 'Diapositivas',
        ],
    ],
    'permissions' => [
        'tab' => 'Presentación',
        'manage' => 'Administrar presentaciones',
    ],
    'components' => [
        'slideshow' => [
            'name' => 'Presentación',
            'description' => 'Mostrar una presentación.',
            'properties' => [
                'id' => [
                    'title' => 'Presentación',
                    'description' => 'Este valor puede ser cambiado dependiendo del identificador usado en la URL de esta página. Vea el manual del plugin para más información.',
                    'placeholder' => 'Seleccione la presentación',
                ],
                'number_of_slide' => [
                    'title' => 'Límite de diapositivas',
                    'description' => 'Número máximo de diapositivas para mostrar',
                    'placeholder' => '5',
                ],
            ],
        ],
    ],
    'controller' => [
        'view' => [
            'slideshows' => [
                'new' => 'Nueva presentación',
                'breadcrumb_label' => 'Presentación',
                'return' => 'Retorne al listado de presentaciones',
                'creating' => 'Creando presentación...',
                'delete_confirmation' => 'En realidad desea borrar esta presentación?',
            ],
        ],
        'list' => [
            'slideshows' => 'Administrar presentación',
        ],
        'form' => [
            'slideshows' => [
                'title' => 'Presentación',
                'create' => 'Crear presentación',
                'update' => 'Actualizar presentación',
                'flashCreate' => 'La presentación ha sido creada satisfactoriamente',
                'flashUpdate' => 'La presentación ha sido actualizada satisfactoriamente',
                'flashDelete' => 'La presentación ha sido eliminada satisfactoriamente',
            ],
        ],
        'config' => [
            'relation' => [
                'label' => 'Diapositiva',
                'emptyMessage' => 'Esta presentación actualmente no tiene ninguna dispositiva adjunta.'
            ],
        ],
    ],
    'columns' => [
        'slideshow' => [
            'id' => 'Identificador',
            'name' => 'Nombre',
            'slides_count' => 'Número de diapositivas'
        ],
        'slide' => [
            'id' => 'Identificador',
            'name' => 'Nombre',
            'description' => 'Descripción',
            'link' => 'Enlace externo',
            'is_published' => 'Publicado?',
        ],
    ],
    'fields' => [
        'slideshow' => [
            'name' => 'Nombre',
        ],
        'slide' => [
            'name' => 'Nombre',
            'description' => 'Descripción',
            'link' => 'Enlace externo',
            'image' => 'Imagen',
            'unpublished_at' => 'Fin de publicación',
            'published_at' => 'Inicio de publicación',
            'is_published' => 'Publicado?',
        ],
    ],
];
