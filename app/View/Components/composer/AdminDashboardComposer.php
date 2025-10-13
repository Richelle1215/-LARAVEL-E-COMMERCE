<?php

namespace App\View\Composers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;

class AdminDashboardComposer
{
    public function compose(View $view)
    {
        $categories = Category::latest()->paginate(10);
        $products = Product::with('category')->latest()->paginate(10);

        // Pass both variables to the view
        $view->with(compact('categories', 'products'));
    }
}