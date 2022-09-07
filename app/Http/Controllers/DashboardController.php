<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function productsTable()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.dashboard', compact('products'));
    }

    public function editProduct($product)
    {
        $product = Product::findOrFail($product);

        $arr['product'] = $product;

        return view('admin.product.edit')->with($arr);
    }

    public function productUpdate(Request $request, $product)
    {
        $request->validate([
            'image'         =>  'required',
            'name'          =>  'required',
            'price'         =>  'required',
            'description'   =>  'required',
            'category_id'   =>  'required'
        ]);

        $product = Product::findOrFail($product);

        $image = $request->image;
        if ($image) {
            $imageName = $image->getClientOriginalName();
            $image->move('uploads/products/', $imageName);
            $formInput['image'] = $imageName;
        }

        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('dashboard')->with('success', 'Asset has been successfully Edited');
    }

    public function productDestroy($id)
    {
        Product::destroy($id);

        return redirect()->route('dashboard')->with('success', 'Asset has been successfully Deleted');
    }
}
