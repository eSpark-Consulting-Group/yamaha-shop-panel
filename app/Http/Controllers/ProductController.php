<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Product $product)
    {
        $product->load('tags', 'media', 'model', 'manufacturer');

        return Inertia::render('Products/Show', [
            'title' => "Product Details",
            'product' => $product
        ]);
    }
}
