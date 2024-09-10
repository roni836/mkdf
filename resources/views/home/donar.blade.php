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

    {{-- <div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg p-8 mt-5">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Our Recent Donors</h2>
    <div class="space-y-4">
        <!-- Donor Card -->
        <div class="flex items-center bg-gray-50 p-4 rounded-lg shadow-sm">
            <img class="w-16 h-16 rounded-full object-cover mr-4" src="https://via.placeholder.com/100" alt="Donor Photo">
            <div class="flex-1">
                <h3 class="text-xl font-semibold text-gray-800">John Doe</h3>
                <p class="text-gray-600">1234 Elm Street, Springfield</p>
            </div>
            <div class="text-right">
                <p class="text-lg font-bold text-green-600">$100</p>
            </div>
        </div>
        
        <!-- Repeat Donor Card as needed -->
        <div class="flex items-center bg-gray-50 p-4 rounded-lg shadow-sm">
            <img class="w-16 h-16 rounded-full object-cover mr-4" src="https://via.placeholder.com/100" alt="Donor Photo">
            <div class="flex-1">
                <h3 class="text-xl font-semibold text-gray-800">Jane Smith</h3>
                <p class="text-gray-600">5678 Oak Avenue, Metropolis</p>
            </div>
            <div class="text-right">
                <p class="text-lg font-bold text-green-600">$250</p>
            </div>
        </div>
        
        <!-- More donor cards can be added here -->
    </div>
</div> --}}

    <div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg p-8 mt-5 mb-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Recent Donors</h2>

        <!-- Search Box -->
        <div class="mb-6">
            <input type="text" id="search" placeholder="Search donors..."
                class="search-box w-full px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500" />
        </div>

        <!-- Donor List -->
        <div id="donor-list" class="space-y-4" id="callingData">
            <!-- Donor Card -->
            <div class="donor-card flex items-center bg-gray-50 p-4 rounded-lg shadow-sm">
                <img class="w-16 h-16 rounded-full object-cover mr-4" src="https://via.placeholder.com/100"
                    alt="Donor Photo">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold text-gray-800">John Doe</h3>
                    <p class="text-gray-600">1234 Elm Street, Springfield</p>
                    <p class="text-gray-500 text-sm">August 7, 2024 - 3:15 PM</p>
                </div>
                <div class="text-right">
                    <p class="text-lg font-bold text-green-600">Rs. 100</p>
                </div>
            </div>

            <!-- Repeat Donor Card as needed -->
            <div class="donor-card flex items-center bg-gray-50 p-4 rounded-lg shadow-sm">
                <img class="w-16 h-16 rounded-full object-cover mr-4" src="https://via.placeholder.com/100"
                    alt="Donor Photo">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold text-gray-800">Jane Smith</h3>
                    <p class="text-gray-600">5678 Oak Avenue, Metropolis</p>
                    <p class="text-gray-500 text-sm">August 6, 2024 - 10:45 AM</p>
                </div>
                <div class="text-right">
                    <p class="text-lg font-bold text-green-600">Rs. 250</p>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        document.getElementById('search').addEventListener('input', function() {
            const query = this.value.toLowerCase();
            const donorCards = document.querySelectorAll('.donor-card');

            donorCards.forEach(card => {
                const name = card.querySelector('h3').textContent.toLowerCase();
                const address = card.querySelector('p').textContent.toLowerCase();

                if (name.includes(query) || address.includes(query)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script> --}}

    {{-- <script>
        $(document).ready(function() {
            let sortOrder = 'asc'; // Default sort order

            let callingData = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('donation.index') }}",
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

                         <div class="donor-card flex items-center bg-gray-50 p-4 rounded-lg shadow-sm">
                            <img class="w-16 h-16 rounded-full object-cover mr-4" src="https://via.placeholder.com/100"
                                    alt="Donor Photo">
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-gray-800">${data.name}</h3>
                                <p class="text-gray-600">${data.address}</p>
                                <p class="text-gray-500 text-sm">${formattedDate}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-green-600">${data.amount}</p>
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
    </script> --}}

    {{-- <script>
        $(document).ready(function() {
            // Function to fetch and display donation data
            let callingData = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('donation.index') }}",
                    success: function(response) {
                        let table = $("#callingData");
                        table.empty();
                        let data = response.data;
    
                        // Display data without sorting
                        data.forEach((data) => {
                            const createdAt = new Date(data.created_at);
                            const options = {
                                day: '2-digit',
                                month: 'short',
                                year: 'numeric'
                            };
                            const formattedDate = createdAt.toLocaleDateString('en-US', options);
    
                            table.append(`
                                <div class="donor-card flex items-center bg-gray-50 p-4 rounded-lg shadow-sm">
                                    <img class="w-16 h-16 rounded-full object-cover mr-4" src="https://via.placeholder.com/100"
                                        alt="Donor Photo">
                                    <div class="flex-1">
                                        <h3 class="text-xl font-semibold text-gray-800">${data.name}</h3>
                                        <p class="text-gray-600">${data.address}</p>
                                        <p class="text-gray-500 text-sm">${formattedDate}</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-lg font-bold text-green-600">${data.amount}</p>
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
    
            // Initial data fetch
            callingData();
        });
    </script> --}}

    <script>
        $(document).ready(function() {
            // Function to fetch and display appointment
            let callingData = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('donation.index') }}",
                    success: function(response) {
                        let table = $("#callingData");
                        table.empty();
                        let data = response.data;

                        // Update appointment count
                        let len = data.length;
                        $("#counting").html(len);

                        data.forEach((data,key) => {
                            table.append(`
                                <tr class="mt-5">
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${key + 1}</td> 
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.name}</td> 
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.mobile}</td> 
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.donating_for}</td> 
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.address}</td> 
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.show_data ? `<p class='text-white bg-green-600 p-1 rounded-md' >Show</p>` : `<p class='text-white bg-yellow-300 p-1 rounded-md' >Hide</p>` }</td>
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.isverified ? `<p class='text-white bg-blue-600 p-1 rounded-md' >Verified</p>` : `<p class='text-white bg-orange-500 p-1 rounded-md' >Not Verified</p>` }</td>

                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">
                                        <button class=" py-1 px-2 editBtn "data-id='${data.id}'><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></button>
                                    </td>
                                </tr>    
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }

            callingData();
        });
    </script>
    
@endsection
