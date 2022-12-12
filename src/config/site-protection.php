<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Passwords For Laravel Site Protection
    |--------------------------------------------------------------------------
    |
    | 
    | 
    |
    */

    'passwords' => env('SITE_PROTECTION_PASSWORDS'),

    /*
    |--------------------------------------------------------------------------
    | Except certain paths
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'except_paths' => env('SITE_PROTECTION_EXCEPT_PATHS'),

    /*
    |--------------------------------------------------------------------------
    | Protect only specific paths
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'protected_only_paths' => env('SITE_PROTECTION_PROTECTED_ONLY_PATHS'),

    /*
    |--------------------------------------------------------------------------
    | Simple path to a CSS file
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'css_file_uri' => env('SITE_PROTECTION_CSS_FILE_URI'),

    /*
    |--------------------------------------------------------------------------
    | Simple path to a Logo file
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'logo_file' => env('SITE_PROTECTION_LOGO_PATH', 'https://github.com/DrkMode/.github/blob/master/docs/images/drkmode.svg?raw=true'),
];
