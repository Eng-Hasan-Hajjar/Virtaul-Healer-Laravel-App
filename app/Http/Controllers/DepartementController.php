<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Departement::latest()->paginate(5);

        return view('doctor.departements.index',compact('departements'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
