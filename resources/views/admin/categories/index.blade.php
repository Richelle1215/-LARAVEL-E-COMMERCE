@extends('admin.admin')

@section('content')
<style>
    /* Base for the entire card container */
    .dashboard-container {
        max-width: 800px; /* Adjusted max-width to match the look of the screenshot */
        margin: 50px auto;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1); /* Slightly stronger shadow */
        border: 1px solid #e5e7eb; /* Light border around the whole card */
    }

    /* Styles for the nav buttons row */
    .nav-buttons-bar {
        display: flex;
        justify-content: flex-start; /* Aligns to the left */
        margin-bottom: 20px;
        border-radius: 8px 8px 0 0;
        padding: 20px 20px 0 20px; /* Padding inside the container */
    }

    /* General style for nav buttons */
    .nav-btn {
        border: none;
        padding: 8px 16px; /* Smaller padding */
        font-size: 16px;
        cursor: pointer;
        border-radius: 4px; /* Slightly smaller rounded corners */
        transition: background-color 0.3s;
        box-shadow: none; /* Remove box shadow from buttons */
        margin-right: 10px; /* Space between buttons */
    }
    
    /* Active (Categories) button style */
    .nav-btn.categories-active {
        background-color: #38a169; /* Green color from image */
        color: white;
    }
    .nav-btn.categories-active:hover {
        background-color: #2f855a; /* Darker green on hover */
    }
    
    /* Inactive (Products) button style */
    .nav-btn.products-inactive {
        background-color: #3b82f6; /* Blue color from image */
        color: white;
    }
    .nav-btn.products-inactive:hover {
        background-color: #2563eb; /* Darker blue on hover */
    }

    /* Content Area Styles */
    .content-area {
        padding: 20px;
        padding-top: 0; /* Remove top padding since nav is inside and needs space */
    }

    h2 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 20px;
        color: #1f2937;
        /* The screenshot's H2 doesn't have a border */
        border-bottom: none;
        padding-bottom: 0;
    }
    
    .section {
        display: none;
    }
    .section.active {
        display: block;
    }

    /* Add New Category/Product button */
    .add-btn {
        background-color: #38a169; /* Green color for the Add button */
        color: white;
        border: none;
        padding: 8px 16px; /* Smaller padding */
        cursor: pointer;
        border-radius: 4px; /* Match button style */
        margin-bottom: 20px;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s;
        font-size: 14px;
    }
    .add-btn:hover {
        background-color: #2f855a;
    }

    /* Table Styles */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 0; /* Align right after the add button */
        border-radius: 4px;
        overflow: hidden;
        box-shadow: none; /* Remove table shadow to make it look simpler as in the image */
    }
    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #e5e7eb; /* Light gray line */
    }
    th {
        background-color: white; /* Header background white as in the image */
        color: #1f2937; /* Darker header text color */
        font-weight: 600;
        text-transform: none; /* No uppercase */
        font-size: 1em;
    }
    /* Simple white and light gray row alternating */
    tr:nth-child(even) {
        background-color: #f9fafb;
    }
    tr:last-child td {
        border-bottom: none;
    }

    /* Action Buttons (Edit/Delete) */
    .action-btn {
        padding: 4px 8px; /* Small padding */
        cursor: pointer;
        border-radius: 4px;
        margin-right: 5px;
        text-decoration: none;
        display: inline-block;
        font-size: 0.85em;
        border: 1px solid #d1d5db; /* Light gray border for all action buttons */
    }

    .edit-btn {
        background-color: #f3f4f6; /* Light gray background */
        color: #1f2937;
    }
    .edit-btn:hover {
        background-color: #e5e7eb;
    }

    .delete-btn {
        background-color: #f3f4f6; /* Light gray background */
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
        <button class="nav-btn categories-active" data-section="categories" onclick="showSection('categories', this, 'categories')">Categories</button>
        <button class="nav-btn products-inactive" data-section="products" onclick="showSection('products', this, 'products')">Products</button>
    </div>

    <div class="content-area">
        
        <div id="categories" class="section active">
            <h2>Manage Categories</h2>
            <a href="{{ route('admin.categories.create') }}" class="add-btn">Add New Category</a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories ?? [] as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description ?? 'N/A' }}</td>
                            <td>
                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="action-btn edit-btn">Edit</a>
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this category?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-btn delete-btn">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No categories found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div id="products" class="section">
            <h2>Manage Products</h2>
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

<script>
    /**
     * Toggles the active section and updates button styles.
     * @param {string} sectionName - The ID of the section to show ('categories' or 'products').
     * @param {HTMLElement} clickedButton - The button element that was clicked.
     * @param {string} buttonType - The type of button ('categories' or 'products') to determine styling.
     */
    function showSection(sectionName, clickedButton, buttonType) {
        // Hide all sections
        const sections = document.querySelectorAll('.section');
        sections.forEach(sec => sec.classList.remove('active'));

        // Update button styles
        const buttons = document.querySelectorAll('.nav-btn');
        buttons.forEach(btn => {
            btn.classList.remove('categories-active', 'products-inactive');
            const type = btn.getAttribute('data-section');
            if (type === sectionName) {
                // The clicked button is the active one
                btn.classList.add(`${type}-active`);
            } else {
                // The other button is the inactive one
                btn.classList.add(`${type}-inactive`);
            }
        });

        // Show selected section
        document.getElementById(sectionName).classList.add('active');
    }
</script>
@endsection