<?php return [
    'plugin' => [
        'name' => 'اسلایدر',
        'description' => 'اضافه کردن اسلایدر بوت استرپ',
    ],
    'navigation' => [
        'label' => 'اسلایدر',
        'sideMenu' => [
            'slideshows' => 'اسلایدرها',
            'slides' => 'اسلایدها',
        ],
    ],
    'permissions' => [
        'tab' => 'اسلایدر',
        'manage' => 'مدیریت اسلایدر',
    ],
    'components' => [
        'slideshow' => [
            'name' => 'اسلایدر',
            'description' => 'نمایش یک اسلایدر',
            'properties' => [
                'id' => [
                    'title' => 'ID',
                    'description' => 'این مقدار می تواند با توجه به شناسه استفاده شده در این صفحه تغییر کند. راهنمای افزونه را مطالعه فرمایید',
                    'placeholder' => 'اسنتخاب اسلایدر',
                ],
                'number_of_slide' => [
                    'title' => 'محدودیت اسلایدها',
                    'description' => 'بیشینه تعداد اسلاید ها برای نمایش',
                    'placeholder' => '5',
                ],
            ],
        ],
    ],
    'controller' => [
        'view' => [
            'slideshows' => [
                'new' => 'اسلایدر جدید',
                'breadcrumb_label' => 'اسلایدرها',
                'return' => 'بازگشت به لیست اسلایدرها',
                'creating' => 'درحال ساخت اسلایدر...',
                'delete_confirmation' => 'آیا از حذف این اسلایدر اطمینان دارید؟',
            ],
        ],
        'list' => [
            'slideshows' => 'مدیریت اسلایدرها',
        ],
        'form' => [
            'slideshows' => [
                'title' => 'اسلایدرها',
                'create' => 'ساخت اسلایدر',
                'update' => 'به روزرسانی اسلایدر',
                'flashCreate' => 'اسلایدر با موفیت ساخته شد',
                'flashUpdate' => 'اسلایدر با موفقیت به روز شد',
                'flashDelete' => 'اسلایدر با موفقیت حذف شد',
            ],
        ],
        'config' => [
            'relation' => [
                'label' => 'اسلاید',
                'emptyMessage' => 'این اسلایدر هیچ تصویری ندارد'
            ],
        ],
    ],
    'columns' => [
        'slideshow' => [
            'id' => 'ID',
            'name' => 'نام',
            'slides_count' => 'تعداد اسلایدها',
        ],
        'slide' => [
            'id' => 'ID',
            'name' => 'نام',
            'description' => 'توضیحات',
            'link' => 'لینک',
            'is_published' => 'نمایش داده شود؟',
        ],
    ],
    'fields' => [
        'slideshow' => [
            'name' => 'نام',
        ],
        'slide' => [
            'name' => 'نام',
            'description' => 'توضیحات',
            'link' => 'لینک',
            'image' => 'تصویر',
            'unpublished_at' => 'پایان ارسال جهت نمایش',
            'published_at' => 'شروع ارسال جهت نمایش',
            'is_published' => 'نمایش داده شود؟',
        ],
    ],
];
