<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        // Count the total number of users
        $totalUsers = User::count();
        return view('admin.dashboard', compact('totalUsers'));
    }
}
