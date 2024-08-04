<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = products::all();
        return view('forms.product', compact('products')); //Compact stores the data and passes in views
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products = new products;
        $products->name =  $request->user;  //user is coming from name that we have given in form
        $products->price =  $request->price;
        $products->quantity = $request->quantity;

        $products->save(); 
        
        return redirect()->route('forms.product');
    }

    /**
     * Display the specified resource.
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(products $products)
    {
        //
    }
}
