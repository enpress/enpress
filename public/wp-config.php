<?php
/*----------------------------------------------------*/
// Commence Enpress
/*----------------------------------------------------*/

define('ENPRESS_START', microtime(true));

/*----------------------------------------------------*/
// Preload Wordpress Functions
/*----------------------------------------------------*/

require_once __DIR__.'/cms/wp-includes/l10n.php';

/*----------------------------------------------------*/
// Register Autoloader
/*----------------------------------------------------*/
require __DIR__.'/../vendor/autoload.php';


/*----------------------------------------------------*/
// Initiate App
/*----------------------------------------------------*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$kernel->initialize(
    $request = Illuminate\Http\Request::capture()
);

/*----------------------------------------------------*/
// Sets up WordPress vars and included files
/*----------------------------------------------------*/

$table_prefix = getWordpressPrefix();
require_once ABSPATH . 'wp-settings.php';