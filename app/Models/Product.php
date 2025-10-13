<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    // Sa iyong app/Models/Product.php
protected $fillable = [
    'name',
    'description',
    'price',
    'stock',
    'category_id',
    'image', // Mahalaga ito para sa mass assignment
];
    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer',
        'status' => 'boolean', // Treat 'active' as true
    ];

      // In Product model
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
      // Scope for active products (used in related)
    public function scopeActive($query)
    {
        return $query->where('status', true); // Or where('status', 'active')
    }
}
