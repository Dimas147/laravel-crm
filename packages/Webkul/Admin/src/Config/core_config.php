<?php

  return [
    [
      'key' => 'general',
      'name' => 'admin::app.configuration.general',
      'sort' => 1,
    ], [
      'key' => 'general.locale_settings',
      'name' => 'admin::app.configuration.locale-settings',
      'sort' => 1,
      'fields' => [
        [
          'name' => 'locale',
          'title' => 'admin::app.configuration.locale',
          'type' => 'select',
          'data_source' => 'Webkul\Core\Core@locales'
        ],
      ],
    ],

    [
      'key' => 'nova_poshta',
      'name' => 'Нова Пошта',
      'sort' => 1,
    ],

    [
      'key' => 'nova_poshta.settings',
      'name' => 'Налаштування інтеграції',
      'sort' => 1,
      'fields' => [
        [
          'name' => 'api_key',
          'title' => 'Api Ключ',
          'type' => 'text'
        ],
      ],
    ],
  ];