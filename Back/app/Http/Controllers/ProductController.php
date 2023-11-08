<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        //Image Handling

        $base64_string = $request->photo;

        $data = base64_decode($base64_string);


        $fileName = $request->name."_photo".".png";

        //$request->name must be unique in databaase

        Storage::disk('local')->put($fileName, $data);

        // Save to database

        $data = $request->validated();

        $photoRoute = "https://filiptuliszkiewicz.com/photo/".$request->name;

        $data['photo'] = $photoRoute;
        $data['photosrc'] = $photoRoute;

        $product = Product::create($data);

        return $product;
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->edit($request->validated());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->remove();
        return $product;
    }

    public function localIndex() {
        $user = [
            'name' => 'Debil'
        ];

        $products = Product::all();

        $data = [
            'products' => $products,
            'user' => $user
        ];

        return view('products', ['test' => $data]);
    }

    public function localAddProduct()
    {
        return view('addProduct');
    }
}
