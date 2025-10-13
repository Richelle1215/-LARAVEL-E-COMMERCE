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
    
    /* Style for the header link and cancel button (Outline style) */
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
</style>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add New Category</h1>
    {{-- Nagbago: Ginawang dusty rose outline --}}
    <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-dusty-rose">Back to List</a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Category</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            
            {{-- Nagbago: Ginawang dusty rose button --}}
            <button type="submit" class="btn btn-dusty-rose">Create Category</button>
            
            {{-- Nagbago: Ginawang dusty rose outline para sa "Cancel" --}}
            <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-dusty-rose ms-2">Cancel</a>
        </form>
    </div>
</div>
@endsection