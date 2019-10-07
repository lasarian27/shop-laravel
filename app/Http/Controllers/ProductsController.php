<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create()
    {
        return view('product.index')->with([
            'name_page' => 'Add a product',
            'action' => 'product.create',
        ]);
    }

    public function store(Request $request, Product $product = null)
    {

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|max:2048'
        ]);


        $image = $request->file('image');
        $name = time() . '.' . $request['image']->getClientOriginalExtension();

        $destinationPath = public_path('/images');

        if (!empty($product)) {
            unlink($destinationPath . '/' . $product->image);
            $image->move($destinationPath, $name);
            Product::where('id', $product->id)
                ->update([
                    'title' => $request->get('title'),
                    'description' => $request->get('description'),
                    'price' => $request->get('price'),
                    'image' => $name
                ]);

        } else {
            $image->move($destinationPath, $name);
            Product::create([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'price' => $request->get('price'),
                'image' => $name
            ]);

        }

        return back()->with([
            'message' => 'success',
            'name_page' => 'Add a product',
            'action' => 'product.add',
        ]);
    }


    public function edit(Product $product)
    {

        $product = Product::find($product->id);

        return view('product.index')->with([
            'name_page' => 'Edit a product',
            'action' => 'product.store',
            'id' => $product->id,
            'title' => $product->title,
            'description' => $product->description,
            'price' => $product->price,
        ]);
    }

    public function products()
    {
        $products = Product::all();
        return view('products')->with(compact('products'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        unlink(public_path('/images') . '/' . $product->image);
        return back();
    }

}
