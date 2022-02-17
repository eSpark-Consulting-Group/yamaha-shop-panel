<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QuotationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Quotations/Index', [
            'title' => 'Quotations'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'company' => 'required|string',
            'lot' => 'required|string',
            'phone' => 'required|numeric',
            'zip' => 'required|numeric',
            'building' => 'required|string',
            'prefecture' => 'required|string',
            'municipality' => 'required|string',
            'person_in_charge' => 'required|string',
            'desired_delivery_to' => 'required|date',
            'desired_delivery_from' => 'required|date',
            'requester_name' => 'required|string',
            'requester_email' => 'required|string|email',
            'requester_phone' => 'required|numeric',
            'transmission_matter' => 'nullable|string',
        ]);

        $user = app('auth')->user();

        $user->load('cart', 'cart.products');

        $product_ids = $user->cart->products->map(fn ($product) => $product->id)->toArray();

        $quotation = Quotation::create(array_merge($attributes, ['user_id' => \auth()->id()]));

        $quotation->products()->attach($product_ids);

        $user->cart->products()->detach($product_ids);

        return \redirect()->route('quotations.show', $quotation)->with('flash', ['quotation_created' => $quotation->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function show(Quotation $quotation)
    {

        $quotation->load('products', 'products.media', 'products.manufacturer');

        return Inertia::render("Quotations/Show", [
            'title' => 'Quotation Details',
            'quotation' => $quotation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function edit(Quotation $quotation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quotation $quotation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quotation $quotation)
    {
        //
    }
}
