<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class MarketController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function market()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(12);
        return view('pages.market')->with(['allproducts' => $products]);
    }

    public function product()
    {
        $products = Product::paginate(20);
        return view('admin.product.viewproduct')->with(['allproducts' => $products]);
    }

    public function viewproduct($id)
    {
        $products = Product::with('discussions')->where('id', $id)->get();
        return view('admin.product.viewproduct', compact('products'));
    }
}
