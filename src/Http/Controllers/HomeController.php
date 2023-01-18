<?php

namespace Mahmoud\Woocommerge\Http\Controllers;

use App\Http\Controllers\Controller;
use Mahmoud\Woocommerge\Models\Woocommerge;

class HomeController extends Controller
{


    public function index()
    {

        // Create woocommerge record
        // $woo = Woocommerge::create([
        //     'name' => 'name in model'
        // ]);

        // return $woo;

        return config('woocommerge.very_secret_key');
    }
}
