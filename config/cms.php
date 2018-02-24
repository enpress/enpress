<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Authentication Keys and Salts
    |--------------------------------------------------------------------------
    |
    | These are required to be unique to ensure secure
    | default Wordpress authentication and form submission.
    |
    */

    'auth_key' => '',
    'secure_auth_key' => '',
    'logged_in_key' => '',
    'nonce_key' => '',
    'auth_salt' => '',
    'secure_auth_salt' => '',
    'logged_in_salt' => '',
    'nonce_salt' => '',

    /*
    |--------------------------------------------------------------------------
    | Wordpress Table Database Prefix
    |--------------------------------------------------------------------------
    |
    | This is required if no global MySQL database prefix is defined.
    |
    */
    'db_prefix' => 'wp_',

    /*
    |--------------------------------------------------------------------------
    | Wordpress Installation Directory
    |--------------------------------------------------------------------------
    |
    | Directory within public where Wordpress is installed.
    |
    */
    'directory' => 'cms',

    /*
    |--------------------------------------------------------------------------
    | Content Directory
    |--------------------------------------------------------------------------
    |
    | Directory within public where plugins and uploads will be contained.
    |
    */
    'content_directory' => 'content',

    /*
    |--------------------------------------------------------------------------
    | Object Cache
    |--------------------------------------------------------------------------
    */

    'object_cache' => [
        /*
         * Use Laravel Cache for persistence
         */
        'persistent' => true,

        /*
         * Cache Prefix
         */
        'prefix' => 'wp',

        /*
         * Default cache expiration in minutes
         */
        'expiration' => 1440,

        /*
         * Allow Wordpress flush functions to flush persistent cache
         */
        'allow_persistent_flush' => true,

        /*
         *  Wordpress data groups not to be persisted
         */
        'not_persisted' => [
            //
        ],
    ],

];