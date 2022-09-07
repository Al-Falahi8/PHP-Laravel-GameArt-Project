<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
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
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' =>  'required|min:4',
            'subject'  =>  'required|min:4',
            'email'     =>  'required|email',
            'message'   =>  'required|min:4'
        ]);

        // Send An Email

        Mail::to('mostafa_alfalahi@yahoo.com')->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Your E-Mail has been Send');
    }
}
