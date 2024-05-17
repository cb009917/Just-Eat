<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Stripecontroller extends Controller
{
    public function checkout()
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([

            'line_items' => [[
                'price_data' => [
                    'currency' => 'lkr',
                    'product_data' => [
                        'name' => 'T-shirt',
                    ],
                    'unit_amount' => 20000,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('/summery'),
            'cancel_url' => route('/subscription'),
        ]);
    }
}
