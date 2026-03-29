<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->type == 'admin') {
            return view('admin.dashboard');
        }

        // Default to standard user dashboard for 'user' type or any other
        return view('dashboard');
    }

    public function index()
    {
        $users = User::latest()->get();
        return view('users.index', compact('users'));
    }
}
