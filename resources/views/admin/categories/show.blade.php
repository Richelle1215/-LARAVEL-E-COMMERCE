@extends('admin.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Category Details</h1>
    <div>
        <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning me-2">Edit</a>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Category: {{ $category->name }}</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <p><strong>ID:</strong> {{ $category->id }}</p>
                <p><strong>Name:</strong> {{ $category->name }}</p>
                <p><strong>Slug:</strong> {{ $category->slug }}</p>
                <p><strong>Description:</strong> {{ $category->description ?? 'N/A' }}</p>
                <p><strong>Status:</strong> 
                    <span class="badge bg-{{ $category->status ? 'success' : 'secondary' }}">
                        {{ $category->status ? 'Active' : 'Inactive' }}
                    </span>
                </p>
                <p><strong>Created:</strong> {{ $category->created_at->format('M d, Y H:i') }}</p>
                <p><strong>Updated:</strong> {{ $category->updated_at->format('M d, Y H:i') }}</p>
            </div>
        </div>
        
        <hr>
        
        <h5>Products in this Category ({{ $category->products()->count() }})</h5>
        @if($category->products->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr><th>Name</th><th>Price</th><th>Stock</th><th>Status</th></tr>
                </thead>
                <tbody>
                    @foreach($category->products as $product)
                    <tr>
                        <td><a href="{{ route('admin.products.show', $product) }}">{{ $product->name }}</a></td>
                        <td>${{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p class="text-muted">No products in this category yet.</p>
        @endif
    </div>
</div>
@endsection