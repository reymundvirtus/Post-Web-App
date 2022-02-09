<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //? display the register page when your not loggedin
    public function __construct() {

        $this->middleware(['guest']);
    }

    //? displaying the login page
    public function index() {

        return view('auth.login');
    }

    //? this will validate the user from login page and once it is correct it sign the user and redirect to dasboard page
    public function store(Request $request) {
        //? validation
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //? sign the user in
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login details');
        }

        //? redirect after sign in
        return redirect()->route('dashboard'); //! to be change with admin page
    }
}