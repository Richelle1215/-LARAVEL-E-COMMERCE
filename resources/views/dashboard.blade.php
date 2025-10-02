@extends('layouts.admin')

{{-- Optional: Override the title in the browser tab --}}
@section('title', 'Admin Dashboard Home')

{{-- Optional: Define the Header content (used in the x-slot:header) --}}
@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Administrator Panel') }}
    </h2>
@endsection

{{-- The main content goes here, next to the sidebar --}}
@section('content')
    
    <h3 class="text-2xl font-bold mb-4">Dashboard Overview</h3>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <div class="bg-indigo-100 p-6 rounded-lg shadow-md border-l-4 border-indigo-500">
            <p class="text-sm text-gray-600">Total Users</p>
            <p class="text-3xl font-bold text-indigo-800">1,234</p>
        </div>
        
        <div class="bg-green-100 p-6 rounded-lg shadow-md border-l-4 border-green-500">
            <p class="text-sm text-gray-600">New Orders</p>
            <p class="text-3xl font-bold text-green-800">45</p>
        </div>

        <div class="bg-yellow-100 p-6 rounded-lg shadow-md border-l-4 border-yellow-500">
            <p class="text-sm text-gray-600">Pending Issues</p>
            <p class="text-3xl font-bold text-yellow-800">12</p>
        </div>

    </div>

    <h3 class="text-xl font-bold mt-8 mb-4">Recent Activity</h3>
    <p>This area can hold recent logs, tables, or charts.</p>

@endsection