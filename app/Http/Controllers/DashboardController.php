<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalUsers = User::count();
        
        return view('dashboard', compact('totalProducts', 'totalUsers'));
    }
}
