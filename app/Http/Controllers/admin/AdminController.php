<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
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

    public function users()
    {
        $users = User::paginate(5);
        return view('admin.dashboard')->with(['users' => $users]);
    }
}
