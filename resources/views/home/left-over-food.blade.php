@extends('home.homeBase')
@section('content')


<div class="relative">
    <!-- Background Image -->
    <img src="{{ asset('images/breadcrum-image.jpg') }}" alt="Background" class="w-full h-80 object-cover">

    <!-- Overlay with Text -->
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <h1 class="text-white text-4xl font-bold">Left Over Food</h1>
    </div>
</div>



<div class="max-w-6xl mx-auto py-12 ">
    <div class="bg-white shadow-lg rounded-lg flex flex-col md:flex-row h-[400px]">
        
        <!-- Image Section -->
        <div class="md:w-1/2 p-10 ">
            <img src="images/don3.webp" alt="Feeding the Hungry" class="w-full h-full object-cover rounded-l-lg">
        </div>
        
        <!-- Content Section -->
        <div class="md:w-1/2 p-6 flex flex-col justify-center">
            <h2 class="text-2xl md:text-2xl font-bold text-black mb-4">Feeding the Hungry: Donate Food and Support Uday Foundation, an NGO Making a Difference</h2>
            <p class="text-base md:text-base text-gray-700 mb-4">
                At Uday Foundation, our mission is to provide free and nutritious meals to underprivileged families of hospital patients and children. Support our cause by donating food to feed the hungry. Join our food drive and make a difference in the lives of those in need. Contribute to Uday Foundation, an NGO near you, and help give food to the poor and homeless. Together, we can create a positive impact on society.
            </p>
            <div>
                <a href="#" class="text-blue-500 font-semibold mr-4">Learn More</a>
                <a href="#" class="text-white bg-blue-500 font-semibold px-4 py-2 rounded">Donate Now</a>
            </div>
        </div>
        
    </div>
    <div class="bg-white shadow-lg rounded-lg flex flex-col md:flex-row h-[400px]">
        
        <!-- Image Section -->
        <div class="md:w-1/2 p-10 ">
            <img src="images/don3.webp" alt="Feeding the Hungry" class="w-full h-full object-cover rounded-l-lg">
        </div>
        
        <!-- Content Section -->
        <div class="md:w-1/2 p-6 flex flex-col justify-center">
            <h2 class="text-2xl md:text-2xl font-bold text-black mb-4">Feeding the Hungry: Donate Food and Support Uday Foundation, an NGO Making a Difference</h2>
            <p class="text-base md:text-base text-gray-700 mb-4">
                At Uday Foundation, our mission is to provide free and nutritious meals to underprivileged families of hospital patients and children. Support our cause by donating food to feed the hungry. Join our food drive and make a difference in the lives of those in need. Contribute to Uday Foundation, an NGO near you, and help give food to the poor and homeless. Together, we can create a positive impact on society.
            </p>
            <div>
                <a href="#" class="text-blue-500 font-semibold mr-4">Learn More</a>
                <a href="#" class="text-white bg-blue-500 font-semibold px-4 py-2 rounded">Donate Now</a>
            </div>
        </div>
        
    </div>
    <div class="bg-white shadow-lg rounded-lg flex flex-col md:flex-row h-[400px]">
        
        <!-- Image Section -->
        <div class="md:w-1/2 p-10 ">
            <img src="images/don3.webp" alt="Feeding the Hungry" class="w-full h-full object-cover rounded-l-lg">
        </div>
        
        <!-- Content Section -->
        <div class="md:w-1/2 p-6 flex flex-col justify-center">
            <h2 class="text-2xl md:text-2xl font-bold text-black mb-4">Feeding the Hungry: Donate Food and Support Uday Foundation, an NGO Making a Difference</h2>
            <p class="text-base md:text-base text-gray-700 mb-4">
                At Uday Foundation, our mission is to provide free and nutritious meals to underprivileged families of hospital patients and children. Support our cause by donating food to feed the hungry. Join our food drive and make a difference in the lives of those in need. Contribute to Uday Foundation, an NGO near you, and help give food to the poor and homeless. Together, we can create a positive impact on society.
            </p>
            <div>
                <a href="#" class="text-blue-500 font-semibold mr-4">Learn More</a>
                <a href="#" class="text-white bg-blue-500 font-semibold px-4 py-2 rounded">Donate Now</a>
            </div>
        </div>
        
    </div>
</div>
    
@endsection