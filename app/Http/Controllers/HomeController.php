<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bestSellers = Product::with('category')
            ->active()
            ->bestSeller()
            ->take(6)
            ->get();
            
        $newProducts = Product::with('category')
            ->active()
            ->new()
            ->take(6)
            ->get();
            
        $categories = Category::where('is_active', true)->get();
        
        return view('home', compact('bestSellers', 'newProducts', 'categories'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
