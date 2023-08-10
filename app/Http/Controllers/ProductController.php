<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public readonly products $product;
    public function __construct()
    {
        $this->product = new products();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seach = request('search');

        if($seach) {

            $product = products::where([
                ['nameProduct', 'like', '%'.$seach.'%']
            ])->get();

        } else {
            $product = $this->product->all();
        }
        return view('products', ['products' => $product, 'search' => $seach]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //var_dump('store product');
        $created = $this->product->create($request->except('_token', '_method'));
        if ($created) {
            return redirect()->back()->with('message', 'Successfully create');
        } else {
            return redirect()->back()->with('message', 'Erro');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(products $product)
    {
        return view('product_show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(products $product)
    {
        return view('product_edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->product->where('id', $id)->update($request->except('_token', '_method'));
        if ($updated) {
            return redirect()->back()->with('message', 'Successfully updated');
        } else {
            return redirect()->back()->with('message', 'Erro');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->product->where('id', $id)->delete();
        return redirect()->route('products.index');
    }
}
