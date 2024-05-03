<?php

return [
    'manifest' => public_path('build/.vite/manifest.json'),
    'dev_server' => [
        'url' => env('VITE_DEV_SERVER_URL', 'http://localhost:3000'),
    ],
];
