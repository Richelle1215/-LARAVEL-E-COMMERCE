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

        /* Styles for the single heading/button row - Hidden since only one section remains */
        .nav-buttons-bar {
            display: none;
        }

        /* Content Area Styles */
        .content-area {
            padding: 20px;
            padding-top: 20px; /* Adjusted padding since nav is hidden */
        }

        h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #1f2937;
            border-bottom: none;
            padding-bottom: 0;
        }
        
        .section.active {
            display: block;
        }

        /* ========================================
        DUSTY ROSE ADD BUTTON DESIGN
        (Inspired by the "View Details" button from the image)
        ========================================
        */
        .add-btn {
            /* Dusty Rose / Brownish-Red color (e.g., #99645b) */
            background-color: #99645b; 
            color: white; /* White text for contrast */
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 4px;
            margin-bottom: 20px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s, transform 0.1s, box-shadow 0.3s;
            font-size: 14px;
            font-weight: 600; /* Bolder text */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .add-btn:hover {
            background-color: #7f5148; /* Slightly darker shade on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        .add-btn:active {
            transform: translateY(1px); /* Slight press effect */
        }

        /* Table Styles */
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
        /* Simple white and light gray row alternating */
        tr:nth-child(even) {
            background-color: #f9fafb;
        }
        tr:last-child td {
            border-bottom: none;
        }

        /* Action Buttons (Edit/Delete) - Neutral color retained for standard actions */
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

        .edit-btn, .delete-btn {
            background-color: #f3f4f6;
            color: #1f2937;
        }
        .edit-btn:hover, .delete-btn:hover {
            background-color: #e5e7eb;
        }

        /* Ensure form display is inline */
        form {
            display: inline;
        }
    </style>

    <div class="dashboard-container">
        <div class="content-area">
            
            {{-- CATEGORIES SECTION: FULL FUNCTIONALITY --}}
            <div id="categories" class="section active">
                <h2>Manage Categories</h2>
                
                {{-- ADD NEW CATEGORY BUTTON with Dusty Rose design --}}
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
        </div>
    </div>

    {{-- Script block removed as it is not needed --}}
@endsection