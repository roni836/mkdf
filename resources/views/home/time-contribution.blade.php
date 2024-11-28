@extends('home.homeBase')
@section('content')


    <div class="relative  mt-[8.5rem]">
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
    {{-- <section class="py-12 bg-white">
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
    </section> --}}

    <div class="py-10 ">
        <div class="text-center">
            {{-- <h3 class="text-lg font-light uppercase text-gray-600 tracking-wider">Team</h3> --}}
            <h1 class="text-4xl font-extrabold mt-2 mb-4 dancing-script-text">" A team with whom we are growing "</h1>
            {{-- <p class="text-gray-600 mb-10 font-semibold mt-8">Our Mobile application developers use modern technology to create applications
                for Our Mobile application developers use modern technology to create applications.</p> --}}
        </div>
    
        <div class="grid grid-cols-5 gap-5 mx-20 mt-14">
            <!-- Team Member Card -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden border-b-8 border-b-blue-500">
                <div class="flex justify-center mt-12 bg-">
                    <img class="w-36 h-36 rounded-full border-4 border-blue-500" src="https://via.placeholder.com/200" alt="Deepak">
                </div>
                <div class="text-center px-6 pb-6">
                    <h2 class="text-xl font-semibold mt-4 ">Deepak</h2>
                    <p class="text-gray-500">UI Developer</p>
                    <div class="mt-8 flex justify-center space-x-4">
                        <a href="#" class="text-blue-500 w-10 h-10 rounded-full "><i class="fab fa-lg fa-facebook-f"></i></a>
                        <a href="#" class="text-blue-400 w-10 h-10 rounded-full "><i class="fab fa-lg fa-twitter"></i></a>
                        <a href="#" class="text-blue-700 w-10 h-10 rounded-full "><i class="fab fa-lg fa-linkedin-in"></i></a>
                        <a href="#" class="text-pink-500 w-10 h-10 rounded-full "><i class="fab fa-lg fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden border-b-8 border-b-blue-500">
                <div class="flex justify-center mt-12 bg-">
                    <img class="w-36 h-36 rounded-full border-4 border-blue-500" src="https://via.placeholder.com/200" alt="Deepak">
                </div>
                <div class="text-center px-6 pb-6">
                    <h2 class="text-xl font-semibold mt-4 ">Deepak</h2>
                    <p class="text-gray-500">UI Developer</p>
                    <div class="mt-8 flex justify-center space-x-4">
                        <a href="#" class="text-blue-500 w-10 h-10 rounded-full "><i class="fab fa-lg fa-facebook-f"></i></a>
                        <a href="#" class="text-blue-400 w-10 h-10 rounded-full "><i class="fab fa-lg fa-twitter"></i></a>
                        <a href="#" class="text-blue-700 w-10 h-10 rounded-full "><i class="fab fa-lg fa-linkedin-in"></i></a>
                        <a href="#" class="text-pink-500 w-10 h-10 rounded-full "><i class="fab fa-lg fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden border-b-8 border-b-blue-500">
                <div class="flex justify-center mt-12 bg-">
                    <img class="w-36 h-36 rounded-full border-4 border-blue-500" src="https://via.placeholder.com/200" alt="Deepak">
                </div>
                <div class="text-center px-6 pb-6">
                    <h2 class="text-xl font-semibold mt-4 ">Deepak</h2>
                    <p class="text-gray-500">UI Developer</p>
                    <div class="mt-8 flex justify-center space-x-4">
                        <a href="#" class="text-blue-500 w-10 h-10 rounded-full "><i class="fab fa-lg fa-facebook-f"></i></a>
                        <a href="#" class="text-blue-400 w-10 h-10 rounded-full "><i class="fab fa-lg fa-twitter"></i></a>
                        <a href="#" class="text-blue-700 w-10 h-10 rounded-full "><i class="fab fa-lg fa-linkedin-in"></i></a>
                        <a href="#" class="text-pink-500 w-10 h-10 rounded-full "><i class="fab fa-lg fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden border-b-8 border-b-blue-500">
                <div class="flex justify-center mt-12 bg-">
                    <img class="w-36 h-36 rounded-full border-4 border-blue-500" src="https://via.placeholder.com/200" alt="Deepak">
                </div>
                <div class="text-center px-6 pb-6">
                    <h2 class="text-xl font-semibold mt-4 ">Deepak</h2>
                    <p class="text-gray-500">UI Developer</p>
                    <div class="mt-8 flex justify-center space-x-4">
                        <a href="#" class="text-blue-500 w-10 h-10 rounded-full "><i class="fab fa-lg fa-facebook-f"></i></a>
                        <a href="#" class="text-blue-400 w-10 h-10 rounded-full "><i class="fab fa-lg fa-twitter"></i></a>
                        <a href="#" class="text-blue-700 w-10 h-10 rounded-full "><i class="fab fa-lg fa-linkedin-in"></i></a>
                        <a href="#" class="text-pink-500 w-10 h-10 rounded-full "><i class="fab fa-lg fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden border-b-8 border-b-blue-500">
                <div class="flex justify-center mt-12 bg-">
                    <img class="w-36 h-36 rounded-full border-4 border-blue-500" src="https://via.placeholder.com/200" alt="Deepak">
                </div>
                <div class="text-center px-6 pb-6">
                    <h2 class="text-xl font-semibold mt-4 ">Deepak</h2>
                    <p class="text-gray-500">UI Developer</p>
                    <div class="mt-8 flex justify-center space-x-4">
                        <a href="#" class="text-blue-500 w-10 h-10 rounded-full "><i class="fab fa-lg fa-facebook-f"></i></a>
                        <a href="#" class="text-blue-400 w-10 h-10 rounded-full "><i class="fab fa-lg fa-twitter"></i></a>
                        <a href="#" class="text-blue-700 w-10 h-10 rounded-full "><i class="fab fa-lg fa-linkedin-in"></i></a>
                        <a href="#" class="text-pink-500 w-10 h-10 rounded-full "><i class="fab fa-lg fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
