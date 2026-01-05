<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('category')->active();
        
        if ($request->has('category') && $request->category != '') {
            $query->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }
        
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }
        
        $products = $query->latest()->paginate(12);
        $categories = Category::where('is_active', true)->get();
        
        return view('products.index', compact('products', 'categories'));
    }

    public function show($slug)
    {
        $product = Product::with('category')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();
            
        $relatedProducts = Product::with('category')
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->active()
            ->take(4)
            ->get();
        
        return view('products.show', compact('product', 'relatedProducts'));
    }

    public function whatsapp($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $product->incrementWhatsAppClick();
        
        $whatsappNumber = Setting::get('whatsapp_number', '6285336573814');
        $whatsappNumber = preg_replace('/[^0-9]/', '', $whatsappNumber);
        
        $message = "Halo admin oymadear 👋\n";
        $message .= "Saya ingin memesan bucket\n\n";
        $message .= "📦 *Produk:* " . $product->name . "\n";
        $message .= "💰 *Harga:* " . $product->formatted_price . "\n";
        $message .= "🔗 *Link:* " . route('products.show', $product->slug) . "\n\n";
        $message .= "Mohon informasi lebih lanjut. Terima kasih!";
        
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text=" . urlencode($message);
        
        return redirect($whatsappUrl);
    }
}
