@extends('admin.admin')  

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded" alt="{{ $product->name }}" style="max-height: 400px; object-fit: cover;">
            @else
                <img src="{{ asset('images/default-product.jpg') }}" class="img-fluid rounded" alt="No Image" style="max-height: 400px; object-fit: cover;">
            @endif
        </div>
        <div class="col-md-6">
            <h1>{{ $product->name ?? 'Unknown Product' }}</h1>
            
            {{-- Category with null check --}}
            @if($product->category)
                <p class="text-muted">Category: <a href="{{ route('products.index', ['category_id' => $product->category->id]) }}">{{ $product->category->name }}</a></p>
            @else
                <p class="text-muted">Category: <span class="text-warning">Uncategorized</span></p>
            @endif
            
            <h3 class="text-success">${{ number_format($product->price ?? 0, 2) }}</h3>
            
            <div class="mb-3">
                <strong>Stock Availability:</strong> 
                @if(($product->stock ?? 0) > 0)
                    <span class="text-success">In Stock ({{ $product->stock }} items)</span>
                @else
                    <span class="text-danger">Out of Stock</span>
                @endif
            </div>
            
            <div class="mb-3">
                <strong>Status:</strong> 
                <span class="badge bg-{{ ($product->status ?? false) ? 'success' : 'secondary' }}">
                    {{ ($product->status ?? false) ? 'Active' : 'Inactive' }}
                </span>
            </div>
            
            <hr>
            
            <h4>Description</h4>
            <p>{!! nl2br(e($product->description ?? '')) !!}</p>
            
            <!-- Optional: Add to Cart or Buy Now buttons (extend as needed) -->
            @if(($product->stock ?? 0) > 0)
                <div class="mt-4">
                    <a href="#" class="btn btn-primary btn-lg">Add to Cart</a>
                    <a href="#" class="btn btn-success btn-lg ms-2">Buy Now</a>
                </div>
            @endif
            
            <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Products</a>
        </div>
    </div>
    
    <!-- Optional: Related Products Section -->
    <div class="row mt-5">
        <div class="col-12">
            <h3>Related Products</h3>
            @if($product->category)
                <div class="row">
                    @php
                        $relatedProducts = $product->category->products()->where('status', true)->where('id', '!=', $product->id)->take(4)->get();
                    @endphp
                    @forelse($relatedProducts as $related)
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                @if($related->image)
                                    <img src="{{ asset('storage/' . $related->image) }}" class="card-img-top" alt="{{ $related->name }}" style="height: 150px; object-fit: cover;">
                                @endif
                                <div class="card-body">
                                    <h6 class="card-title">{{ $related->name }}</h6>
                                    <p class="fw-bold">${{ number_format($related->price, 2) }}</p>
                                    <a href="{{ route('products.show', $related->slug) }}" class="btn btn-sm btn-outline-primary">View</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p>No related products available.</p>
                        </div>
                    @endforelse
                </div>
            @else
                <div class="col-12">
                    <p class="text-muted">No category assigned, so no related products available.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection