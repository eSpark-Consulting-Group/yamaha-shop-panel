<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShopController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $products = Product::latest()->with('manufacturer', 'model', 'media')->paginate();
        return Inertia::render('Shop', [
            'title'=> "商品一覧",
            'products' => $products
        ]);
    }
}
