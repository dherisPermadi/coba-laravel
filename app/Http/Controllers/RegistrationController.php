<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration.index', [
            'title' => 'Registration',
            'active' => 'registration'
        ]);
    }

    public function store(Request $request)
    {
        $validated_registration = $request->validate([
            'name' => 'required|max:50',
            'username' => ['required', 'min:3', 'max:250', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:50'
        ]);

        // $validated_registration['password'] = bcrypt($validated_registration['password']);
        $validated_registration['password'] = Hash::make($validated_registration['password']);

        User::create($validated_registration);

        $request->session()->flash('success', 'Registration is successful! Please login');
        return redirect('/login');
    }
}