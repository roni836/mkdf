@extends('home.homeBase')
@section('content')


    <div class="relative">
        <!-- Background Image -->
        <img src="{{ asset('images/breadcrum-image.jpg') }}" alt="Background" class="w-full h-80 object-cover">

        <!-- Overlay with Text -->
        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <h1 class="text-white text-4xl font-bold">Time Contribution</h1>
        </div>
    </div>

    <!-- 4-Pronged Approach Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">4-Pronged Approach</h2>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-yellow-200 px-4 py-2 rounded">Improving Learning Outcomes</span>
                <span class="bg-green-200 px-4 py-2 rounded">Capacity Building of Teachers</span>
                <span class="bg-purple-200 px-4 py-2 rounded">Creating Enabling Learning Environment</span>
                <span class="bg-blue-200 px-4 py-2 rounded">Community Engagement</span>
            </div>
        </div>
    </section>

    <!-- Impact 2022-23 Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Impact 2022-23</h2>
            <div class="flex flex-wrap justify-center items-center gap-8">
                <div class="w-full md:w-1/3">
                    <img src="{{ asset('images/don10.webp') }}" alt="Impact Image" class="rounded mb-4">
                </div>
                <div class="w-full md:w-1/3 text-lg">
                    <p>120,000+ children received quality education</p>
                    <p>25,000+ children benefitted through infrastructure support</p>
                    <p>44,000+ girls received vocational training support</p>
                    <p>2000+ girls received scholarship support for higher studies</p>
                </div>
            </div>
        </div>
    </section>
@endsection
