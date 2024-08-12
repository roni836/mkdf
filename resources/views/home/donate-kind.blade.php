@extends('home.homeBase')
@section('content')


<div class="max-w-4xl mx-auto p-8 bg-white shadow-lg mt-4">
    <h2 class="text-2xl font-bold text-blue-700 mb-4">
        Donate Money to the Needy
    </h2>

    <!-- Personal Info -->
    <h3 class="text-lg font-semibold text-gray-700 mb-2">Personal Info</h3>
    <div class="grid grid-cols-2 gap-4 mb-6">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="first_name">First Name *</label>
            <input type="text" id="first_name" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="last_name">Last Name *</label>
            <input type="text" id="last_name" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="col-span-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email Address *</label>
            <input type="email" id="email" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="col-span-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone *</label>
            <input type="text" id="phone" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="col-span-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="pan_number">PAN Number</label>
            <input type="text" id="pan_number" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    <!-- Billing Details -->
    <h3 class="text-lg font-semibold text-gray-700 mb-2">Billing Details</h3>
    <div class="grid grid-cols-2 gap-4 mb-6">
        <div class="col-span-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="country">Country *</label>
            <select id="country" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
                <option>India</option>
            </select>
        </div>
        <div class="col-span-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address1">Address 1 *</label>
            <input type="text" id="address1" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="col-span-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address2">Address 2</label>
            <input type="text" id="address2" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="city">City *</label>
            <input type="text" id="city" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="state">State *</label>
            <select id="state" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
                <option>Delhi</option>
                <!-- Add more states as needed -->
            </select>
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="zip">Zip / Postal Code *</label>
            <input type="text" id="zip" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    <!-- Donation Total -->
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2">Total Donation :</label>
        <div class="flex items-center">
            <span class="text-lg font-semibold mr-2">₹</span>
            <input type="text" value="6,000.00" readonly class="border border-gray-300 rounded p-2 w-32 focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    <!-- Donate Button -->
    <div>
        <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
            Donate Now
        </button>
    </div>

    <!-- Disclaimer -->
    <p class="text-xs text-gray-500 mt-4">
        VERY IMPORTANT: As per the Indian Income Tax Department's rules, a donor is required to add their address and PAN number in case they wish to receive...
    </p>
</div>




@endsection