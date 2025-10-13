<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product; // Adjust to your model namespace
use Illuminate\Http\Request;
use App\Models\Category; // <-- Add this

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::with('category'); // Eager load for index too

        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        $products = $query->paginate(12); // Or get() for all
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        // 1. Fetch the data from the database
        $categories = Category::all();

        // 2. Pass the data to the view using compact()
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // 1. **Validation** (Highly Recommended)
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id', // Make sure categories table exists
            // ... other fields
        ]);

        // 2. **Data Persistence** (Save to the database)
        // Example:
        // Product::create($request->all());

        // 3. **Redirect** after successful save
        return redirect()->route('admin.products.index')
                         ->with('success', 'Product created successfully.');

        // NOTE: Adjust the redirect route name to match your actual route setup.
    }

    /**
     * Display the specified resource.
     * KEY FIX: Eager load category to avoid N+1 queries and null issues.
     */
    public function show(Product $product) // Or show($slug) if using slugs
    {
        // Model binding fetches by ID (or slug if customized).
        // with('category') ensures $product->category is loaded and not null (if exists).
        $product->load('category'); // Or Product::with('category')->findOrFail($id);

        // If category_id is null/invalid, $product->category will be null (handled in view).
        return view('products.show', compact('product'));
    }

    // Other methods (create, store, etc.) as needed...
}
