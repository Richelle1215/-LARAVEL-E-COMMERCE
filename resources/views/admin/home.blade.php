@extends('layouts.admin')

{{-- 1. I-set ang title ng browser tab --}}
@section('title', 'MENDREA Admin Dashboard')

{{-- 2. I-fill ang 'header' section (Page Heading) --}}
@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Admin Panel') }}
    </h2>
@endsection

{{-- 3. I-fill ang 'content' section (Ang laman sa tabi ng sidebar) --}}
@section('content')
    
    <h3 class="text-2xl font-bold mb-6 text-gray-800">Dashboard Overview</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        
        <div class="p-5 bg-white border-l-4 border-indigo-500 rounded-lg shadow-md">
            <p class="text-sm font-medium text-gray-500">Total Users</p>
            <p class="text-3xl font-bold text-indigo-800 mt-1">1,234</p>
        </div>
        
        <div class="p-5 bg-white border-l-4 border-green-500 rounded-lg shadow-md">
            <p class="text-sm font-medium text-gray-500">New Orders (Today)</p>
            <p class="text-3xl font-bold text-green-800 mt-1">45</p>
        </div>

        <div class="p-5 bg-white border-l-4 border-yellow-500 rounded-lg shadow-md">
            <p class="text-sm font-medium text-gray-500">Monthly Revenue</p>
            <p class="text-3xl font-bold text-yellow-800 mt-1">$15,000</p>
        </div>

        <div class="p-5 bg-white border-l-4 border-red-500 rounded-lg shadow-md">
            <p class="text-sm font-medium text-gray-500">Pending Issues</p>
            <p class="text-3xl font-bold text-red-800 mt-1">12</p>
        </div>

    </div>

    <div class="bg-gray-50 p-6 rounded-lg shadow-inner">
        <h4 class="text-xl font-semibold mb-4 text-gray-700">Latest Product Sales</h4>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Amount</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">MENDREA T-Shirt Pro</td>
                    <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">5 Pcs</span></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600 font-bold">$125.00</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">Custom Mug Bundle</td>
                    <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">2 Sets</span></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600 font-bold">$70.00</td>
                </tr>
                 <tr>
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">Black Hoodie V2</td>
                    <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">1 Pc</span></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600 font-bold">$45.00</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection