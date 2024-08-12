@extends('home.homeBase')
@section('content')


<div class="relative">
    <!-- Background Image -->
    <img src="{{ asset('images/breadcrum-image.jpg') }}" alt="Background" class="w-full h-80 object-cover">

    <!-- Overlay with Text -->
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <h1 class="text-white text-4xl font-bold">Thankful Donars</h1>
    </div>
</div>


<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-8 mt-10">
    <h1 class="text-3xl font-semibold text-center text-green-600 mb-4">Thank You!</h1>
    <p class="text-lg text-gray-700 mb-4">Your generous donation has been received successfully. We are truly grateful for your support and commitment to our cause.</p>
    <p class="text-gray-600 mb-6">Your contribution will help us make a significant impact. We couldn’t do it without supporters like you.</p>
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

<div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg p-8 mt-5">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Recent Donors</h2>
    
    <!-- Search Box -->
    <div class="mb-6">
        <input
            type="text"
            id="search"
            placeholder="Search donors..."
            class="search-box w-full px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500"
        />
    </div>
    
    <!-- Donor List -->
    <div id="donor-list" class="space-y-4">
        <!-- Donor Card -->
        <div class="donor-card flex items-center bg-gray-50 p-4 rounded-lg shadow-sm">
            <img class="w-16 h-16 rounded-full object-cover mr-4" src="https://via.placeholder.com/100" alt="Donor Photo">
            <div class="flex-1">
                <h3 class="text-xl font-semibold text-gray-800">John Doe</h3>
                <p class="text-gray-600">1234 Elm Street, Springfield</p>
                <p class="text-gray-500 text-sm">August 7, 2024 - 3:15 PM</p>
            </div>
            <div class="text-right">
                <p class="text-lg font-bold text-green-600">$100</p>
            </div>
        </div>
        
        <!-- Repeat Donor Card as needed -->
        <div class="donor-card flex items-center bg-gray-50 p-4 rounded-lg shadow-sm">
            <img class="w-16 h-16 rounded-full object-cover mr-4" src="https://via.placeholder.com/100" alt="Donor Photo">
            <div class="flex-1">
                <h3 class="text-xl font-semibold text-gray-800">Jane Smith</h3>
                <p class="text-gray-600">5678 Oak Avenue, Metropolis</p>
                <p class="text-gray-500 text-sm">August 6, 2024 - 10:45 AM</p>
            </div>
            <div class="text-right">
                <p class="text-lg font-bold text-green-600">$250</p>
            </div>
        </div>
        
        <!-- More donor cards can be added here -->
    </div>
</div>

<script>
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
</script>
@endsection