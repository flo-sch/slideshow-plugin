<?php return [
    'plugin' => [
        'name' => 'Слайд-шоу',
        'description' => 'Плагин для создания и отображения Twitter Bootstrap carousel с дополнительным контентом.',
    ],
    'navigation' => [
        'label' => 'Слайд-шоу',
        'sideMenu' => [
            'slideshows' => 'Слайд-шоу',
            'slides' => 'Слайды',
        ],
    ],
    'permissions' => [
        'tab' => 'Слайд-шоу',
        'manage' => 'Управлять Слайд-шоу',
    ],
    'components' => [
        'slideshow' => [
            'name' => 'Слайд-шоу',
            'description' => 'Показать a Слайд-шоу.',
            'properties' => [
                'id' => [
                    'title' => 'Слайд-шоу',
                    'description' => 'Это значение может быть изменено в зависимости от идентификатора, используемого в URL этой страницы. Смотри инструкцию по плагину для подробностей.',
                    'placeholder' => 'Выбрать Слайд-шоу',
                ],
                'number_of_slide' => [
                    'title' => 'Лимит слайдов',
                    'description' => 'Максимальное количество отображаемых слайдов',
                    'placeholder' => '5',
                ],
            ],
        ],
    ],
    'controller' => [
        'view' => [
            'slideshows' => [
                'new' => 'Создать Слайд-шоу',
                'breadcrumb_label' => 'Слайд-шоу',
                'return' => 'Вернуться к списку слайд-шоу',
                'creating' => 'Создание Слайд-шоу...',
                'delete_confirmation' => 'Вы действительно хотите удалить этот Слайд-шоу?',
            ],
        ],
        'list' => [
            'slideshows' => 'Управлять Слайд-шоу',
        ],
        'form' => [
            'slideshows' => [
                'title' => 'Слайд-шоу',
                'create' => 'Создать Слайд-шоу',
                'update' => 'Обновить Слайд-шоу',
                'flashCreate' => 'Слайд-шоу успешно создан',
                'flashUpdate' => 'Слайд-шоу успешно обновлен',
                'flashDelete' => 'Слайд-шоу успешно удален',
            ],
        ],
        'config' => [
            'relation' => [
                'label' => 'Слайда Слайд-шоу',
                'emptyMessage' => 'У этого слайд-шоу нет прикрепленных слайдов.'
            ],
        ],
    ],
    'columns' => [
        'slideshow' => [
            'id' => 'ID',
            'name' => 'Имя',
            'slides_count' => 'Количество слайдов'
        ],
        'slide' => [
            'id' => 'ID',
            'name' => 'Имя',
            'description' => 'Описание',
            'link' => 'Ссылка',
            'is_published' => 'Опубликованный?',
        ],
    ],
    'fields' => [
        'slideshow' => [
            'name' => 'Имя',
        ],
        'slide' => [
            'name' => 'Имя',
            'description' => 'Описание',
            'link' => 'Ссылка',
            'image' => 'Изображение',
            'unpublished_at' => 'Конец публикации',
            'published_at' => 'Начало публикации',
            'is_published' => 'Опубликованный?',
        ],
    ],
];
