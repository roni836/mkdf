@extends('home.homeBase')
@section('content')
    <div class="relative  mt-[8.5rem]">
        <!-- Background Image -->
        <img src="{{ asset('images/breadcrum-image.jpg') }}" alt="Background" class="w-full h-80 object-cover">

        <!-- Overlay with Text -->
        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <h1 class="text-white text-4xl font-bold">What We Do</h1>
        </div>
    </div>


    <div class="max-w-3xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg h-96 ">
        <!-- Parent Node -->
        <div class="text-center mb-6">
            <div
                class="inline-block px-6 py-3 bg-blue-600 hover:bg-blue-700 cursor-pointer text-white rounded-full shadow-lg">
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
                <div
                    class="inline-block p-4 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-lg cursor-pointer">
                    <h3 class="font-semibold text-md">Social Pharmacy</h3>
                </div>
            </div>

            <!-- Social Kitchen -->
            <div class="flex flex-col items-center">
                <div
                    class="inline-block p-4 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full shadow-lg cursor-pointer">
                    <h3 class="font-semibold text-md">Social Kitchen</h3>
                </div>
            </div>

            <!-- Social Books -->
            <div class="flex flex-col items-center">
                <div class="inline-block p-4 bg-red-500 hover:bg-red-600 text-white rounded-full shadow-lg cursor-pointer">
                    <h3 class="font-semibold text-md">Social Books</h3>
                </div>
            </div>
        </div>
    </div>
    <section class="py-12 bg-gray-100 mb-10">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Stories of Change</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-4 bg-white rounded shadow">
                    <img src="{{ asset('images/don10.webp') }}" alt="Debasmita" class="rounded mb-4">
                    <h3 class="text-xl font-bold">Debasmita</h3>
                    <p class="text-lg">In the slum where I live, many parents are worried about their children's education.
                    </p>
                    <a href="#" class="text-blue-500 hover:underline">Read more ></a>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <img src="{{ asset('images/don10.webp') }}" alt="Lavanaya" class="rounded mb-4">
                    <h3 class="text-xl font-bold">Lavanaya</h3>
                    <p class="text-lg">Some people say I am unlucky. My father went away when I was born, and later my
                        mother died in an accident.</p>
                    <a href="#" class="text-blue-500 hover:underline">Read more ></a>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <img src="{{ asset('images/don10.webp') }}" alt="Neha" class="rounded mb-4">
                    <h3 class="text-xl font-bold">Neha</h3>
                    <p class="text-lg">My father used to sell vegetables, but during the pandemic everything closed down.
                    </p>
                    <a href="#" class="text-blue-500 hover:underline">Read more ></a>
                </div>
            </div>
        </div>
    </section>
@endsection
