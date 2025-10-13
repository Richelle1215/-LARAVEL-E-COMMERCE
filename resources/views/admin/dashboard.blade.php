@extends('Admin.admin')

@section('content')
    {{-- Main Heading --}}
    <h1 class="text-3xl font-extrabold text-gray-900 mb-6 flex items-center">
        Dashboard Overview 
        <span class="ml-2 text-indigo-500">🚀</span>
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        {{-- 1. Earnings (Monthly) Card --}}
        <div class="bg-white overflow-hidden shadow-lg rounded-xl transition duration-300 hover:shadow-2xl">
            <div class="p-5">
                <div class="flex items-start justify-between">
                    <div class="text-sm font-medium text-gray-500 uppercase tracking-wider">
                        Monthly Earnings
                    </div>
                    <div class="text-2xl text-indigo-500">
                        {{-- Icon for Calendar/Money --}}
                        <i class="fas fa-sack-dollar"></i> 
                    </div>
                </div>
                
                <div class="mt-4">
                    {{-- Placeholder for actual data --}}
                    <div class="text-3xl font-bold text-gray-900">
                        ${{ number_format($monthlyEarnings ?? 0, 0) }}
                    </div>
                    <p class="mt-1 text-sm text-gray-400">Total revenue this month</p>
                </div>
            </div>
        </div>

        {{-- 2. Total Orders Today Card --}}
        <div class="bg-white overflow-hidden shadow-lg rounded-xl transition duration-300 hover:shadow-2xl">
            <div class="p-5">
                <div class="flex items-start justify-between">
                    <div class="text-sm font-medium text-gray-500 uppercase tracking-wider">
                        Total Orders Today
                    </div>
                    <div class="text-2xl text-green-500">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                </div>
                
                <div class="mt-4">
                    {{-- Placeholder for actual data --}}
                    <div class="text-3xl font-bold text-gray-900">
                        {{ $totalOrdersToday ?? 0 }}
                    </div>
                    <p class="mt-1 text-sm text-gray-400">New transactions recorded</p>
                </div>
            </div>
        </div>
        
        {{-- 3. Low Stock Products Card --}}
        <div class="bg-white overflow-hidden shadow-lg rounded-xl transition duration-300 hover:shadow-2xl">
            <div class="p-5">
                <div class="flex items-start justify-between">
                    <div class="text-sm font-medium text-gray-500 uppercase tracking-wider">
                        Low Stock Alerts
                    </div>
                    <div class="text-2xl text-yellow-500">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                </div>
                
                <div class="mt-4">
                    <div class="text-3xl font-bold text-gray-900">
                        {{ $lowStockCount ?? 0 }}
                    </div>
                    <p class="mt-1 text-sm text-red-500">Action required now</p>
                </div>
                {{-- Optional: Re-add a simplified progress bar --}}
                <div class="w-full bg-gray-200 rounded-full h-1 mt-4">
                    <div class="bg-yellow-500 h-1 rounded-full" style="width: 50%"></div>
                </div>
            </div>
        </div>

        {{-- 4. New Customers Card --}}
        <div class="bg-white overflow-hidden shadow-lg rounded-xl transition duration-300 hover:shadow-2xl">
            <div class="p-5">
                <div class="flex items-start justify-between">
                    <div class="text-sm font-medium text-gray-500 uppercase tracking-wider">
                        New Customers (7 Days)
                    </div>
                    <div class="text-2xl text-red-500">
                        <i class="fas fa-users-line"></i>
                    </div>
                </div>
                
                <div class="mt-4">
                    {{-- Placeholder for actual data --}}
                    <div class="text-3xl font-bold text-gray-900">
                        {{ $newCustomersCount ?? 0 }}
                    </div>
                    <p class="mt-1 text-sm text-gray-400">Recently joined your community</p>
                </div>
            </div>
        </div>
        
    </div>

@endsection