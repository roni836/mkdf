@extends('home.homeBase')
@section('content')

<div class="max-w-3xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg h-96">
    <!-- Parent Node -->
    <div class="text-center mb-6">
        <div class="inline-block px-6 py-3 bg-blue-600 text-white rounded-full shadow-lg">
            <h2 class="font-bold text-lg">Social</h2>
        </div>
    </div>

    <!-- Vertical Connecting Line from Parent Node -->
    <div class="flex justify-center">
        <div class="h-20 w-1 bg-gray-400"></div>
    </div>

    <!-- Horizontal Connecting Line between Child Nodes -->
    <div class="flex justify-center ">
        <div class="w-full h-1 bg-gray-400 relative">
            <div class="absolute left-1/4 transform -translate-x-1/2">
                <div class="w-1 h-6 bg-gray-400"></div>
            </div>
            <div class="absolute left-2/4 transform -translate-x-1/2">
                <div class="w-1 h-6 bg-gray-400"></div>
            </div>
            <div class="absolute left-3/4 transform -translate-x-1/2">
                <div class="w-1 h-6 bg-gray-400"></div>
            </div>
        </div>
    </div>

    <!-- Child Nodes -->
    <div class="flex justify-between items-center mt-10">
        <!-- Social Pharmacy -->
        <div class="flex flex-col items-center">
            <div class="inline-block p-4 bg-green-500 text-white rounded-full shadow-lg">
                <h3 class="font-semibold text-md">Social Pharmacy</h3>
            </div>
        </div>

        <!-- Social Kitchen -->
        <div class="flex flex-col items-center">
            <div class="inline-block p-4 bg-yellow-500 text-white rounded-full shadow-lg">
                <h3 class="font-semibold text-md">Social Kitchen</h3>
            </div>
        </div>

        <!-- Social Books -->
        <div class="flex flex-col items-center">
            <div class="inline-block p-4 bg-red-500 text-white rounded-full shadow-lg">
                <h3 class="font-semibold text-md">Social Books</h3>
            </div>
        </div>
    </div>
</div>

@endsection