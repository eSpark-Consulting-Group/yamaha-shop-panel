<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Prefecture;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (app('auth')->user()->cart->products_count === 0) {
            return \redirect()->route('cart');
        }

        $cart = app('auth')->user()->cart;


        $cart->load('products', 'products.manufacturer', 'products.model', 'products.media');

        $prefectures = Prefecture::all();

        return Inertia::render('Checkout/Show', [
            'title' => "Checkout",
            'cart' => $cart,
            'prefectures' => $prefectures
        ]);
    }
}
