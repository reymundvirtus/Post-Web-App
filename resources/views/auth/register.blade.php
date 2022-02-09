@extends('layouts.base') <!-- this is extending in base.blade.php file. You can use slash(/) or dot(.) -->
@section('title')
    Signup
@endsection

@section('log')
    <li>
        <a class="p-3 text-white" href="{{ route('landing') }}">Home</a>
    </li>
    <li>
        <a class="p-3 text-white" href="{{ route('login') }}">Login</a>
    </li> 
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-indigo-600 shadow-lg shadow-indigo-900 p-6 rounded-lg mt-24">
            <div class="text-center mb-7 text-white font-bold text-xl">
                Sign Up
            </div>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Your name" class="bg-blue-200 border-2 w-full h-12 p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                    
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Username:</label>
                    <input type="text" name="username" id="username" placeholder="Username" class="bg-blue-200 border-2 w-full h-12 p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('username') }}">
                    
                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Your email" class="bg-blue-200 border-2 w-full h-12 p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('email') }}">
                    
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Your password" class="bg-blue-200 border-2 w-full h-12 p-4 rounded-lg @error('name') border-red-500 @enderror" value="">
                    
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Confirm Password:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" class="bg-blue-200 border-2 w-full h-12 p-4 rounded-lg @error('name') border-red-500 @enderror" value="">
                    
                    @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-pink-600 hover:shadow-xl duration-300 text-white px-4 py-3 rounded font-medium w-full">Signup</button>
                </div>
            </form>
        </div>
    </div>
@endsection