@extends('home.homeBase')
@section('content')
    {{-- <div class="relative">
    <img src="{{ asset('images/breadcrum-image.jpg') }}" alt="Background" class="w-full h-80 object-cover">
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <h1 class="text-white text-4xl font-bold">Our Events</h1>
    </div>
</div> --}}


    <div class="container mx-auto py-8  mt-[8.5rem]">
        <h2 class="text-3xl font-bold text-center mb-4">Come to our events for more info</h2>
        <p class="text-center text-gray-500 mb-8">
            Donec pellentesque nunc sed neque congue, ut lobortis odio sollicitudin.
            Curabitur orci orci, maximus nec sodales vitae, tristique.
        </p>

        <!-- Event Section -->
        <div class="bg-blue-900 text-white p-4 mb-8">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold">EVENTS</h3>

                <div class="flex items-center">
                    <!-- Search Box -->
                    <input type="text" id="searchEvent" placeholder="Search events here..."
                        class="px-2 py-1 rounded text-black mr-4">

                    <!-- Sort Dropdown -->
                </div>
                {{-- <select id="sortEvents" class="px-2 py-1 rounded text-black">
                    <option value="asc">Sort by Date (Ascending)</option>
                    <option value="desc">Sort by Date (Descending)</option>
                </select> --}}
                <button id="sortButton" title="Sort Your Data" class="text-white bg-blue-700 px-3 py-1 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7v10M12 7v10m4-10v10M5 12h14" />
                    </svg>
                </button>

            </div>
        </div>

        <!-- Events List -->
        <div class="bg-white shadow-md rounded-lg" id="callingData">
            <!-- Event Item -->
            <div class="flex p-4 border-b border-gray-200">
                <img src="{{ asset('images/pimg2.jpg') }}" alt="Event 1" class="w-24 h-24 rounded-lg mr-4">
                <div class="flex-1">
                    <h4 class="text-xl font-bold mb-1">Live testimonials</h4>
                    <p class="text-gray-500 mb-2">01 May 2025</p>
                    <p class="text-gray-600">
                        Nulla molestie et nisi nec scelerisque. Mauris felis erat, sodales in pellentesque sit amet,
                        elementum ac mi. Nulla volutpat id lorem id temp.
                    </p>
                </div>
                <div class="self-center">
                    <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">VIEW DETAILS</button>
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


    <script>
        $(document).ready(function() {
            let sortOrder = 'asc'; // Default sort order

            let callingData = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('event.index') }}",
                    success: function(response) {
                        let table = $("#callingData");
                        table.empty();
                        let data = response.data;

                        // Sort the data based on the current sortOrder
                        data.sort((a, b) => {
                            let dateA = new Date(a.created_at);
                            let dateB = new Date(b.created_at);
                            return sortOrder === 'asc' ? dateA - dateB : dateB - dateA;
                        });

                        let searchQuery = $('#searchEvent').val().toLowerCase();
                        data = data.filter(event => event.title.toLowerCase().includes(searchQuery));

                        data.forEach((data, key) => {
                            const createdAt = new Date(data.created_at);
                            const options = {
                                day: '2-digit',
                                month: 'short',
                                year: 'numeric'
                            };
                            const formattedDate = createdAt.toLocaleDateString('en-US',
                                options);

                            table.append(`
                        <div class="flex p-4 border-b border-gray-200">
                            <img src="/gallery/image/${data.image}" alt="${data.title}" class="w-24 h-24 rounded-lg mr-4">
                            <div class="flex-1">
                                <h4 class="text-xl font-bold mb-1">${data.title}</h4>
                                <p class="text-gray-500 mb-2">${formattedDate}</p>
                                <p class="text-gray-600">
                                    ${data.description}
                                </p>
                            </div>
                        </div>
                    `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            };

            // Handle sort button click
            $('#sortButton').click(function() {
                // Toggle sortOrder between 'asc' and 'desc'
                sortOrder = sortOrder === 'asc' ? 'desc' : 'asc';

                // Fetch and display the sorted data
                callingData();
            });

            // Initial data fetch
            callingData();
        });
    </script>
@endsection
