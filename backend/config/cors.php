<?php

return [
    'paths' => ['api/*'],

    'allowed_methods' => ['*'], // разрешаем все методы (GET, POST, PUT...)
    'allowed_origins' => ['*'], // фронтенд
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,
];

