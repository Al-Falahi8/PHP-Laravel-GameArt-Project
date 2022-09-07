<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Profile;

use Illuminate\Http\Request;
use App\Http\Requests\UserUpdate;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Contracts\Session\Session;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        return view('admin.profile.index', ['user' => Auth::user()]);
    }

    public function updateAvatar(Request $request)
    {
        $request->validate([
            'avatar'    =>  'required'
        ]);


        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('uploads/avatar/' . $fileName));

            $user = Auth::user();
            $user->avatar = $fileName;
            $user->save();

            return redirect()->route('userProfile')->with('success', 'Your Profile picture has been successfully updated');
        }
    }

    public function updateUserProfile(UserUpdate $request)
    {

        $user = Auth::user();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('userProfile', compact('user'))->with('success', 'Profile has been successfully Updated');
    }
}
