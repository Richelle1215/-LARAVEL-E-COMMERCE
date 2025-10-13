@extends('admin.admin')

@section('content')
    <style>
        /* Base for the entire card container */
        .dashboard-container {
            max-width: 800px; 
            margin: 50px auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1); 
            border: 1px solid #e5e7eb; 
        }

        /* Styles for the nav buttons row - Hiding the nav bar */
        .nav-buttons-bar {
            display: none; 
        }

        /* Content Area Styles */
        .content-area {
            padding: 20px;
            padding-top: 20px; 
        }

        h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #1f2937;
            border-bottom: none;
            padding-bottom: 0;
        }
        
        .section {
            display: none;
        }
        .section.active {
            display: block;
        }

        /* ========================================
        NEW DESIGN: DUSTY ROSE/BROWNISH-RED ADD BUTTON
        (Inspired by the "Discover Coats" button)
        ========================================
        */
        .add-btn {
            /* Dusty Rose / Brownish-Red color from the image (e.g., #99645b) */
            background-color: #99645b; 
            color: white; /* White text for contrast */
            border: none; /* No border for a solid look */
            padding: 8px 16px; 
            cursor: pointer;
            border-radius: 4px; 
            margin-bottom: 20px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s, transform 0.1s;
            font-size: 14px;
            font-weight: 600; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
        }
        .add-btn:hover {
            background-color: #7f5148; /* Slightly darker shade on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        .add-btn:active {
            transform: translateY(1px); /* Slight press effect */
        }

        /* Table Styles (Retained) */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 0;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: none;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }
        th {
            background-color: white;
            color: #1f2937;
            font-weight: 600;
            text-transform: none;
            font-size: 1em;
        }
        tr:nth-child(even) {
            background-color: #f9fafb;
        }
        tr:last-child td {
            border-bottom: none;
        }

        /* Action Buttons (Edit/Delete) - Retained (You might want to change these too, but keeping them neutral for now) */
        .action-btn {
            padding: 4px 8px;
            cursor: pointer;
            border-radius: 4px;
            margin-right: 5px;
            text-decoration: none;
            display: inline-block;
            font-size: 0.85em;
            border: 1px solid #d1d5db;
        }

        .edit-btn {
            background-color: #f3f4f6;
            color: #1f2937;
        }
        .edit-btn:hover {
            background-color: #e5e7eb;
        }

        .delete-btn {
            background-color: #f3f4f6;
            color: #1f2937;
        }
        .delete-btn:hover {
            background-color: #e5e7eb;
        }

        /* Ensure form display is inline */
        form {
            display: inline;
        }

        /* Product image styling */
        .product-image {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 4px;
        }
    </style>

    <div class="dashboard-container">
        
        <div class="nav-buttons-bar">
        </div>

        <div class="content-area">
            
            {{-- PRODUCTS SECTION: FULL FUNCTIONALITY --}}
            <div id="products" class="section active">
                <h2>Manage Products</h2>
                
                {{-- ADD NEW PRODUCT BUTTON (DUSTY ROSE DESIGN) --}}
                <a href="{{ route('admin.products.create') }}" class="add-btn">Add New Product</a>
                
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products ?? [] as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    @if($product->image_path)
                                        <img src="{{ Storage::url($product->image_path) }}" alt="{{ $product->name }} image" class="product-image">
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name ?? 'Uncategorized' }}</td>
                                <td>${{ number_format($product->price, 2) }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="action-btn edit-btn">Edit</a>
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="action-btn delete-btn">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No products found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection