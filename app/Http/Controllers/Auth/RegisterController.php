<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //? this will open if your logged out not logged in
    public function __construct() {
        $this->middleware(['guest']);
    }

    //? this will display the register.blade.php
    public function index() {
        return view('auth.register');
    }

    //? this will store to model to database the user who signup or register
    public function store(Request $request) {
        //? validation
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        //? after validation we store user in db
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //? sign the user in
        auth()->attempt($request->only('email', 'password'));

        //?  after storing in db we redirect the user
        return redirect()->route('dashboard'); //! to be change with admin page
    }
}
