@extends('home.homeBase')
@section('content')
    <div class="py-8 max-w-full md:mx-14 mt-[8.5rem]">
        <!-- Content Area -->
        <div class="max-w-7xl mx-auto">
            <h1 class="text-center text-3xl font-bold text-gray-800 mb-6">Our Story of Happiness through <span
                    class="text-yellow-300">your support</span></h1>

            <div class="relative overflow-hidden">
                <!-- Carousel Wrapper -->
                <div id="carousel" class="flex transition-transform duration-500">
                    <!-- View 1 (set of cards) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 py-10">
                        <div class="flex-shrink-0 md:pb-5  text-center bg-white border border-gray-400 hover:border-b-4 hover:border-b-teal-500">
                            <div class=" overflow-hidden">
                                <img src="{{ asset('images/sp-1.webp') }}" alt="Kothandaraman"
                                    class="h-48 w-full object-cover rounded-lg rounded-t-lg hover:scale-110 transition-transform duration-300">
                                <div class="p-4  h-full">
                                    <h2 class="text-lg font-bold text-black">Kothandaraman, 66 years</h2>
                                    <p class="text-black pt-2 text-sm">Used to work in Cuddalore district and suddenly lost
                                        vision in both of his eyes.</p>
                                    <p class="text-red-500 font-semibold">On 27.06.2024</p>
                                </div>
                                
                            </div>
                            <a href="#" class="text-blue-700 rounded-lg mt-4 inline-block px-2 py-1  border border-gray-400 hover:bg-gray-800 hover:text-white">+ Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
