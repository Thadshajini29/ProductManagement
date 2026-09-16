<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('Products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'sku' => 'required',
            'category' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required'
        ]);
        Product::create([
            'name' => $request->productname,
            'sku' => $request->sku,
            'category' => $request->category,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,

        ]);

        return redirect()
            ->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::findOrFail($id);

        return view('Products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::findOrFail($id);

        return view('Products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'name' => 'required',
            'sku' => 'required',
            'category' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required'
        ]);
        $products = Product::findOrFail($id);

        Product::update([
            'name' => $request->productname,
            'sku' => $request->sku,
            'category' => $request->category,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,

        ]);

        return redirect()
            ->route('products.index')
            ->with('success', 'Product Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Product::findOrFail($id);
        $products->delete();

        return redirect()
            ->route('Products.index')
            ->with('success', 'Products deleted successfully.');
    }
}
