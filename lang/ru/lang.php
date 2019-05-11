<?php 
return [
    'plugin' => [
        'name' => 'Gutenberg',
        'description' => 'Визуальный редактор Gutenberg для OctoberCMS'
    ],
    'permission' => [
        'access_settings' => 'Управление настройками плагина'
    ],
    'settings' => [
        'menu_label' => 'Настройки Gutenberg',
        'menu_description' => 'Управление интеграциями, и т.д.',
        'tab' => [
            'integrations' => [
                'name' => 'Интеграции',
                'static_pages' => [
                    'name' => 'RainLab.StaticPages интеграция',
                    'comment' => 'Скоро.',
                ],
                'blog' => [
                    'name' => 'RainLab.Blog интеграция',
                    'comment' => 'Заменяет визуальный редактор, который используется в статьях на Gutenberg. 
                                  Важно! Все уже созданые посты, которые были созданны не через Gutenberg НЕ будеут работать. 
                                  Рекомендую вам не использовать замену визуального редактора в уже работающем проекте.'
                ],
                'good_news' => [
                    'name' => 'Lovata.GoodNews интеграция',
                    'comment' => 'Скоро.',
                ],
                'section_standard' => [
                    'name' => 'Стандартные плагины'
                ],
                'section_custom' => [
                    'name' => 'Сторонние плагины'
                ]
            ]
        ]
    ]
];