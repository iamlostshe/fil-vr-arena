<?php

return [

    /* -----------------------------------------------------------------
     |  The default Model class.
     | -----------------------------------------------------------------
     */
    'model' => \App\Models\UrlAlias::class,

    /* -----------------------------------------------------------------
     |  Support localized aliases and redirects.
     | -----------------------------------------------------------------
     */
    'use_localization' => TRUE,

    'use_key_get_param_localization' => 'locale',

    /* -----------------------------------------------------------------
     |  Redirect code if visit systep path.
     |  301|302|false
     | -----------------------------------------------------------------
     */
    'redirect_for_system_path' => 301,

    /* -----------------------------------------------------------------
     | If empty - available all methods.
     | -----------------------------------------------------------------
     */
    'available_methods' => ['GET'],

    /* -----------------------------------------------------------------
     | Do not apply aliases for paths.
     | -----------------------------------------------------------------
     */
    'ignored_paths' => [
        'admin',
        'admin/*',
        'nova',
        'nova/*',
        'nova-api/*',
        '/skipped',
        '/admin',
        '/admin/*',
        '/_debugbar',
        '/_debugbar/*',
        '/nova',
        '/nova/*',
        '/nova-api/*',
        '/horizon',
        '/horizon/*',
        '/telescope',
        '/telescope/*',
        'filemanager',
        'filemanager/*',
        'filemanager-api',
        'filemanager-api/*',
        'vendor/*',
        '/storage/*',
        '/nova-vendor/*',
        'vendor',
        '*.js'
    ],
];
