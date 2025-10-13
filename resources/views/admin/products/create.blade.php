@extends('admin.admin')

@section('content')
<style>
    /* Custom Dusty Rose Button Styling */
    .btn-dusty-rose {
        /* Dusty Rose / Brownish-Red color (#99645b) */
        background-color: #99645b; 
        color: white; 
        border: none;
        transition: background-color 0.3s, transform 0.1s, box-shadow 0.3s;
        font-weight: 600;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .btn-dusty-rose:hover {
        background-color: #7f5148; /* Slightly darker shade on hover */
        color: white; /* Keep text white on hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }
    .btn-dusty-rose:active {
        transform: translateY(1px); /* Slight press effect */
        background-color: #7f5148;
    }
    
    /* Style for the Cancel/Back button (Outline style) */
    .btn-outline-dusty-rose {
        color: #99645b; 
        border-color: #99645b; 
        background-color: transparent;
        transition: all 0.3s;
        font-weight: 600;
    }
    .btn-outline-dusty-rose:hover {
        color: white;
        background-color: #99645b; 
        border-color: #99645b; 
    }

    /* Card styling for cleaner form presentation */
    .form-card {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }
</style>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Product</h1>
        {{-- Added Back button for navigation consistency --}}
        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-dusty-rose">Back to List</a>
    </div>

    <div class="card form-card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Changed form-group to mb-3 for Bootstrap 5 spacing --}}
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3" required>{{ old('description') }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" step="0.01" class="form-control" value="{{ old('price') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number" name="stock" class="form-control" value="{{ old('stock') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    {{-- Added form-control-file class for file input (Bootstrap 4/5 compatibility) --}}
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select name="category_id" class="form-control" required>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                {{-- Nagbago: Ginawang dusty rose button --}}
                <button type="submit" class="btn btn-dusty-rose">Save Product</button>
                
                {{-- Added Cancel button for user convenience (uses outline style) --}}
                <a href="{{ route('admin.products.index') }}" class="btn btn-outline-dusty-rose ms-2">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection