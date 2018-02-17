<?php

/*----------------------------------------------------*/
// Boot Wordpress
/*----------------------------------------------------*/

require dirname(__FILE__).'/cms/wp-blog-header.php';

/*----------------------------------------------------*/
// Process Request
/*----------------------------------------------------*/

$app = Illuminate\Foundation\Application::getInstance();

$kernel = $app[Illuminate\Contracts\Http\Kernel::class];

$response = $kernel->handleStored();

$response->send();

$kernel->terminateStored($response);