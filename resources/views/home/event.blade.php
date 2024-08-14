@extends('home.homeBase')
@section('content')


{{-- <div class="relative">
    <img src="{{ asset('images/breadcrum-image.jpg') }}" alt="Background" class="w-full h-80 object-cover">
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <h1 class="text-white text-4xl font-bold">Our Events</h1>
    </div>
</div> --}}


<div class="container mx-auto py-8">
    <h2 class="text-3xl font-bold text-center mb-4">Come to our events for more info</h2>
    <p class="text-center text-gray-500 mb-8">
        Donec pellentesque nunc sed neque congue, ut lobortis odio sollicitudin.
        Curabitur orci orci, maximus nec sodales vitae, tristique.
    </p>
    
    <!-- Event Section -->
    <div class="bg-blue-900 text-white p-4 mb-8">
        <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold">EVENTS</h3>
            {{-- <h3 class="text-lg font-semibold">IN DETAILS</h3> --}}
            <div>
                <button class="text-white bg-blue-700 px-3 py-1 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v10M12 7v10m4-10v10M5 12h14" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Events List -->
    <div class="bg-white shadow-md rounded-lg">
        <!-- Event Item -->
        <div class="flex p-4 border-b border-gray-200">
            <img src="{{ asset('images/pimg2.jpg') }}" alt="Event 1" class="w-24 h-24 rounded-lg mr-4">
            <div class="flex-1">
                <h4 class="text-xl font-bold mb-1">Live testimonials</h4>
                <p class="text-gray-500 mb-2">01 May 2025</p>
                <p class="text-gray-600">
                    Nulla molestie et nisi nec scelerisque. Mauris felis erat, sodales in pellentesque sit amet, elementum ac mi. Nulla volutpat id lorem id tempor.
                </p>
            </div>
            <div class="self-center">
                <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">VIEW DETAILS</button>
            </div>
        </div>

        <!-- Event Item -->
        <div class="flex p-4 border-b border-gray-200">
            <img src="{{ asset('images/pimg.jpg') }}" alt="Event 2" class="w-24 h-24 rounded-lg mr-4">
            <div class="flex-1">
                <h4 class="text-xl font-bold mb-1">Presentation</h4>
                <p class="text-gray-500 mb-2">29 May 2025</p>
                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, risus ac hendrerit consectetur, elit nisl luctus est, sit amet vehicula ligula diam sit amet risus.
                </p>
            </div>
            <div class="self-center">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">VIEW DETAILS</button>
            </div>
        </div>

        <!-- Event Item -->
        <div class="flex p-4">
            <img src="{{ asset('images/pimg2.jpg') }}" alt="Event 3" class="w-24 h-24 rounded-lg mr-4">
            <div class="flex-1">
                <h4 class="text-xl font-bold mb-1">Funds research</h4>
                <p class="text-gray-500 mb-2">15 May 2025</p>
                <p class="text-gray-600">
                    Fusce lacinia sodales gravida. Pellentesque pellentesque tristique bibendum. Morbi sagittis porttitor congue.
                </p>
            </div>
            <div class="self-center">
                <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">VIEW DETAILS</button>
            </div>
        </div>
        <!-- Event Item -->
        <div class="flex p-4 border-b border-gray-200">
            <img src="{{ asset('images/pimg2.jpg') }}" alt="Event 1" class="w-24 h-24 rounded-lg mr-4">
            <div class="flex-1">
                <h4 class="text-xl font-bold mb-1">Live testimonials</h4>
                <p class="text-gray-500 mb-2">01 May 2025</p>
                <p class="text-gray-600">
                    Nulla molestie et nisi nec scelerisque. Mauris felis erat, sodales in pellentesque sit amet, elementum ac mi. Nulla volutpat id lorem id tempor.
                </p>
            </div>
            <div class="self-center">
                <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">VIEW DETAILS</button>
            </div>
        </div>

        <!-- Event Item -->
        <div class="flex p-4 border-b border-gray-200">
            <img src="{{ asset('images/pimg.jpg') }}" alt="Event 2" class="w-24 h-24 rounded-lg mr-4">
            <div class="flex-1">
                <h4 class="text-xl font-bold mb-1">Presentation</h4>
                <p class="text-gray-500 mb-2">29 May 2025</p>
                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, risus ac hendrerit consectetur, elit nisl luctus est, sit amet vehicula ligula diam sit amet risus.
                </p>
            </div>
            <div class="self-center">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">VIEW DETAILS</button>
            </div>
        </div>

        <!-- Event Item -->
        <div class="flex p-4">
            <img src="{{ asset('images/pimg2.jpg') }}" alt="Event 3" class="w-24 h-24 rounded-lg mr-4">
            <div class="flex-1">
                <h4 class="text-xl font-bold mb-1">Funds research</h4>
                <p class="text-gray-500 mb-2">15 May 2025</p>
                <p class="text-gray-600">
                    Fusce lacinia sodales gravida. Pellentesque pellentesque tristique bibendum. Morbi sagittis porttitor congue.
                </p>
            </div>
            <div class="self-center">
                <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">VIEW DETAILS</button>
            </div>
        </div>
        <!-- Event Item -->
        <div class="flex p-4 border-b border-gray-200">
            <img src="{{ asset('images/pimg2.jpg') }}" alt="Event 1" class="w-24 h-24 rounded-lg mr-4">
            <div class="flex-1">
                <h4 class="text-xl font-bold mb-1">Live testimonials</h4>
                <p class="text-gray-500 mb-2">01 May 2025</p>
                <p class="text-gray-600">
                    Nulla molestie et nisi nec scelerisque. Mauris felis erat, sodales in pellentesque sit amet, elementum ac mi. Nulla volutpat id lorem id tempor.
                </p>
            </div>
            <div class="self-center">
                <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">VIEW DETAILS</button>
            </div>
        </div>

        <!-- Event Item -->
        <div class="flex p-4 border-b border-gray-200">
            <img src="{{ asset('images/pimg.jpg') }}" alt="Event 2" class="w-24 h-24 rounded-lg mr-4">
            <div class="flex-1">
                <h4 class="text-xl font-bold mb-1">Presentation</h4>
                <p class="text-gray-500 mb-2">29 May 2025</p>
                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, risus ac hendrerit consectetur, elit nisl luctus est, sit amet vehicula ligula diam sit amet risus.
                </p>
            </div>
            <div class="self-center">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">VIEW DETAILS</button>
            </div>
        </div>

        <!-- Event Item -->
        <div class="flex p-4">
            <img src="{{ asset('images/pimg2.jpg') }}" alt="Event 3" class="w-24 h-24 rounded-lg mr-4">
            <div class="flex-1">
                <h4 class="text-xl font-bold mb-1">Funds research</h4>
                <p class="text-gray-500 mb-2">15 May 2025</p>
                <p class="text-gray-600">
                    Fusce lacinia sodales gravida. Pellentesque pellentesque tristique bibendum. Morbi sagittis porttitor congue.
                </p>
            </div>
            <div class="self-center">
                <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">VIEW DETAILS</button>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container mx-auto py-8">
    <div class="flex items-center justify-between mb-6">
        <input type="text" placeholder="Search for events" class="border border-gray-300 rounded-lg px-4 py-2 w-full max-w-xs focus:outline-none focus:border-gray-500">
        <button class="bg-teal-500 text-white px-4 py-2 rounded-lg ml-4 hover:bg-teal-600">
            Find Events
        </button>
        <div class="ml-4 flex items-center space-x-2">
            <button class="text-black font-semibold">List</button>
            <button class="text-gray-400">Month</button>
            <button class="text-gray-400">Day</button>
        </div>
    </div>

    <div class="flex items-center justify-between mb-4">
        <button class="text-black bg-gray-100 px-4 py-2 rounded-lg">Today</button>
        <h2 class="text-2xl font-semibold">Now onwards</h2>
        <div class="flex items-center space-x-4">
            <span class="text-gray-500">May 2025</span>
            <button class="text-gray-500 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6 flex mb-6">
        <div class="flex flex-col items-center justify-center bg-gray-800 text-white w-16 h-16 rounded-lg mr-4">
            <span class="text-xs font-semibold">THU</span>
            <span class="text-2xl font-bold">1</span>
        </div>
        <div class="flex-1">
            <h3 class="text-xl font-bold mb-2">Live testimonials</h3>
            <p class="text-gray-500 mb-4">MAY 1, 2025 @ 8:00 AM - 5:00 PM</p>
            <p class="text-gray-600">
                Nulla molestie et nisi nec scelerisque. Mauris felis erat, sodales in pellentesque sit amet, elementum ac mi.
                Nulla volutpat id lorem id tempor. Aliquam sed dolor velit. Morbi lobortis nulla eu.
            </p>
            <button class="bg-teal-500 text-white px-4 py-2 rounded mt-4 hover:bg-teal-600">
                $100
            </button>
        </div>
        <div class="ml-6">
            <img src="{{ asset('images/pimg2.jpg') }}" alt="Event Image" class="w-40 h-32 object-cover rounded-lg">
        </div>
    </div>
</div> --}}


@endsection