<?php

use Mahmoud\Woocommerge\Http\Controllers\HomeController;

/**
 * Routes of my package
 */

Route::get('/woocommerge', [HomeController::class, 'index']);
