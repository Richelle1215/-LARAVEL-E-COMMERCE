<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        $products = $query->latest()->paginate(12); // Grid view, 12 per page

        return view('products.index', compact('products', 'categories', 'request'));
    }

    public function show($slug)
    {
        $product = Product::with('category')->active()->where('slug', $slug)->firstOrFail();
        return view('products.show', compact('product'));
    }
}
