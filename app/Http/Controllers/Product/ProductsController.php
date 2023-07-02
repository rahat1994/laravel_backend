<?php

namespace App\Http\Controllers\Product;

use Illuminate\Routing\Controller as BaseController;
use Automattic\WooCommerce\Client;

class ProductsController extends BaseController
{

    public function index()
    {

        $woocommerce = new Client(
            'http://wordpress',
            'ck_5ad358c1a30083c4759da33c030cc0e616bc5920',
            'cs_917cc09108a5d01b2c4bcc1177f2a7f18fbbc1f4',
            [
                'version' => 'wc/v3',
                'oauth_only' => true,
            ]
        );

        $results = $woocommerce->get('products');

        dd($results);
    }
}
