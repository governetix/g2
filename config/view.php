<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems utilize a folder to store their templates. This
    | array contains the locations where your unique template folders will
    | be stored. You may add as many elements as you wish to this array.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, you are free to change this value if you
    | desire a different location for your compiled views.
    |
    */

    'compiled' => realpath(storage_path('framework/views')),

];