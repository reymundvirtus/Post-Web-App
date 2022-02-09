<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //? this will logout the user
    public function store() {

        auth()->logout();

        return redirect()->route('landing');
    }
}
