<?php

return [
    'terrain_photo' => [
        'file-name-pattern' => '{{original}}-{{terrain_id}}-{{date}}.{{extension}}',
        'max-size' => 5 * 1024,
        'allowed-extensions' => 'bmp,gif,jpeg,jpg,png',
        'path' => str_replace('\\', '/', public_path()) . '/uploads/terrain/{{terrain_id}}/',
        'id_name' => 'terrain_id',
    ],
];