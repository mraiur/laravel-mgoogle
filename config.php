<?php
return [
    /**
    * More information at
    * @link http://google.mraiur.com
    */

    /**
    *    Email to impersonate
    */
    'EMAIL' => env('MGOOGLE_EMAIL', null),

    /**
    *    Path to private p12 file
    */
    'SERVER_PRIVATE_KEY' => base_path() . env('MGOOGLE_SERVER_PRIVATE_KEY', 'google-api-secret-key.p12'),

    'CLIENT_ID' => env('MGOOGLE_CLIENT_ID', null),
    'CLIENT_EMAIL' => env('MGOOGLE_CLIENT_EMAIL', null),

    'CLIENT_TYPE' => env('MGOOGLE_CLIENT_TYPE', 'server'),

    'PERMISSIONS' => env('MGOOGLE_PERMISSIONS', '')
];

