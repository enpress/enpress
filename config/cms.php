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

    'auth_key' => 'put your unique phrase here',
    'secure_auth_key' => 'put your unique phrase here',
    'logged_in_key' => 'put your unique phrase here',
    'nonce_key' => 'put your unique phrase here',
    'auth_salt' => 'put your unique phrase here',
    'secure_auth_salt' => 'put your unique phrase here',
    'logged_in_salt' => 'put your unique phrase here',
    'nonce_salt' => 'put your unique phrase here',

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

];