<?php
$token = bin2hex(random_bytes(16));
return [
    
    //? Deafault Information
    'default' => 'F12Bae07Hur1982',
    'token' => $token,

    //? Application Information
    'routes_folder' => env('ROUTES_FOLDER','/app/routes'),
    'view_engine' => 'default',
    'session_storage' => env('SESSION_STORAGE', 'native'),
    'app_name' => env('APP_NAME', 'Fast PHP API'),
    'app_env' => env('APP_ENV', 'dev'),
    'app_url' => env('APP_URL', 'localhost:8000'),

    //? Personal Information
    'user_name' => env('USER_NAME','Your Name'),
    'user_email' => env('USER_EMAIL','your_email@mail.com'),
];
