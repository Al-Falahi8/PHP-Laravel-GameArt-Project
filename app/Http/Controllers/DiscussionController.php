<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Discussion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DiscussionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, $id)
    {
        // validation
        $request->validate([
            'body'  =>  'required|min:5|max:500'
        ]);

        $product = Product::where('id', $id)->firstOrFail();

        //Current User
        $userId = Auth::id();

        $discussion = new Discussion();
        $discussion->body = $request->body;
        $discussion->product()->associate($product);
        $discussion->user_id = $userId;

        $discussion->save();

        return redirect()->route('DetailProduct', $id)->with('success', 'Commet Has Been Added Successfully');
    }
}
