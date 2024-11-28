@extends('home.homeBase')
@section('content')
    {{-- <div class="relative  mt-[8.5rem]">
    <!-- Background Image -->
    <img src="{{ asset('images/breadcrum-image.jpg') }}" alt="Background" class="w-full h-80 object-cover">

    <!-- Overlay with Text -->
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <h1 class="text-white text-4xl font-bold">Thankful Donars</h1>
    </div>
</div> --}}


    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-8 mt-[9rem]">
        <h1 class="text-3xl font-semibold text-center text-green-600 mb-4">Thank You!</h1>
        <p class="text-lg text-gray-700 mb-4">Your generous donation has been received successfully. We are truly grateful
            for your support and commitment to our cause.</p>
        <p class="text-gray-600 mb-6">Your contribution will help us make a significant impact. We couldn’t do it without
            supporters like you.</p>
        <div class="text-center">
            <a href="/" class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700">Back to Home</a>
        </div>
    </div>

    <div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg p-8 mt-5 mb-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Recent Donors</h2>

        <!-- Search Box -->
        <div class="mb-6">
            <input type="text" id="search" placeholder="Search donors..."
                class="search-box w-full px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500" />
        </div>

        <!-- Donor List -->
        <div id="donor-list" class="space-y-4">
            <!-- Loading indicator -->
            <div id="loading" class="text-center text-gray-500">Loading...</div>
        </div>

        <div id="donor-list" class="space-y-4" id="callingData">
        </div>
    </div>

<script>
    $(document).ready(function() {
        let allDonors = []; // Array to store all donors for filtering

        // Function to fetch and display donor data
        let callingData = () => {
            $.ajax({
                type: "GET",
                url: "{{ route('donation.index') }}",
                beforeSend: function() {
                    $("#loading").show();
                },
                success: function(response) {
                    allDonors = response.data; // Store data for search functionality
                    displayDonors(allDonors);
                },
                complete: function() {
                    $("#loading").hide();
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    $("#donor-list").html('<p class="text-center text-red-500">An error occurred while fetching data. Please try again later.</p>');
                }
            });
        }

        // Function to display donors
        let displayDonors = (donors) => {
            let table = $("#donor-list");
            table.empty();
            
            if (donors.length === 0) {
                table.append('<p class="text-center text-gray-500">No donors found.</p>');
                return;
            }

            donors.forEach((data) => {
                const createdAt = new Date(data.created_at);
                const options = {
                    day: '2-digit',
                    month: 'short',
                    year: 'numeric'
                };
                const formattedDate = createdAt.toLocaleDateString('en-US', options);
                table.append(`
                    <div class="donor-card flex items-center bg-gray-50 p-4 rounded-lg shadow-sm">
                        <div class="generated-logo w-16 h-16 rounded-full mr-4 rounded-full w-20 h-20 flex items-center justify-center bg-gray-300 text-white font-bold text-xl">${data.name.charAt(0)}</div>

                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-800">${data.name}</h3>
                            <p class="text-gray-600">${data.address}</p>
                            <p class="text-gray-500 text-sm">${formattedDate}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-green-600">Rs. ${data.amount}</p>
                        </div>
                    </div>                            
                `);
            });
        }

        // Event listener for search input
        $('#search').on('input', function() {
            let query = $(this).val().toLowerCase();
            let filteredDonors = allDonors.filter(donor => 
                donor.name.toLowerCase().includes(query) ||
                donor.address.toLowerCase().includes(query)
            );
            displayDonors(filteredDonors);
        });

        callingData();
    });
</script>
    
@endsection
