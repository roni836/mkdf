@extends('home.homeBase')
@section('content')


<div class="relative">
    <!-- Background Image -->
    <img src="{{ asset('images/breadcrum-image.jpg') }}" alt="Background" class="w-full h-80 object-cover">

    <!-- Overlay with Text -->
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <h1 class="text-white text-4xl font-bold">Our Work</h1>
    </div>
</div>

<!-- What We Do Section -->
<section class="py-12 bg-gray-200">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">What We Do</h2>
        <p class="text-lg mb-8">Smile Foundation’s flagship programme Mission Education works with the objective of empowering underprivileged children by providing education, nutrition, and wellness support. The programme is well aligned to the New Education Policy (2020), and the SDG Goal 4 (Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all). Mission Education works with children (3-18 years) living in difficult circumstances, children from poor families, differently abled children, disaster-struck children, abandoned and street children, and children living in tribal belts, remote villages and hard to reach areas.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/don9.webp') }}" alt="Education Icon" class="mb-4">
                <p>Bridge Course for Non-School Going Children</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/don9.webp') }}" alt="Remedial Icon" class="mb-4">
                <p>Remedial Education Support</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/don9.webp') }}" alt="Vocational Icon" class="mb-4">
                <p>Vocational Education</p>
            </div>
        </div>
    </div>
</section>


<div class="bg-blue-200 p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-10">
        <div class="bg-white shadow-md rounded-lg overflow-hidden ">
            <img src="images/don9.webp" alt="Help us to Provide Food to the Hungry" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Help us to Provide Food to the Hungry</h2>
                <p class="text-gray-700 mb-4">Majority of the underprivileged patients admitted in Government hospitals are those who come from nearby states are often poor, in several cases family members decide to stay hungry to save money. Join the Uday Foundation to provide food to poor patients and their families outside hospitals. With just Rs.550/- you can provide food to 50 people.</p>
                <a href="#" class="text-red-500 font-semibold">Learn More</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/don10.webp" alt="Donate Hygiene and Dignity Kit for Women" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Donate Hygiene and Dignity Kit for Women</h2>
                <p class="text-gray-700 mb-4">We at Uday Foundation have witnessed these struggles homeless women go through with close quarters. While efforts are being taken to provide safe shelters to this section, we cannot shy away from our responsibilities. Let us strive to improve the lives of homeless women by creating a safe and secure environment for them.</p>
                <a href="#" class="text-red-500 font-semibold">Learn More</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden ">
            <img src="images/don9.webp" alt="Help us to Provide Food to the Hungry" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Help us to Provide Food to the Hungry</h2>
                <p class="text-gray-700 mb-4">Majority of the underprivileged patients admitted in Government hospitals are those who come from nearby states are often poor, in several cases family members decide to stay hungry to save money. Join the Uday Foundation to provide food to poor patients and their families outside hospitals. With just Rs.550/- you can provide food to 50 people.</p>
                <a href="#" class="text-red-500 font-semibold">Learn More</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/don10.webp" alt="Donate Hygiene and Dignity Kit for Women" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Donate Hygiene and Dignity Kit for Women</h2>
                <p class="text-gray-700 mb-4">We at Uday Foundation have witnessed these struggles homeless women go through with close quarters. While efforts are being taken to provide safe shelters to this section, we cannot shy away from our responsibilities. Let us strive to improve the lives of homeless women by creating a safe and secure environment for them.</p>
                <a href="#" class="text-red-500 font-semibold">Learn More</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden ">
            <img src="images/don9.webp" alt="Help us to Provide Food to the Hungry" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Help us to Provide Food to the Hungry</h2>
                <p class="text-gray-700 mb-4">Majority of the underprivileged patients admitted in Government hospitals are those who come from nearby states are often poor, in several cases family members decide to stay hungry to save money. Join the Uday Foundation to provide food to poor patients and their families outside hospitals. With just Rs.550/- you can provide food to 50 people.</p>
                <a href="#" class="text-red-500 font-semibold">Learn More</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/don10.webp" alt="Donate Hygiene and Dignity Kit for Women" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Donate Hygiene and Dignity Kit for Women</h2>
                <p class="text-gray-700 mb-4">We at Uday Foundation have witnessed these struggles homeless women go through with close quarters. While efforts are being taken to provide safe shelters to this section, we cannot shy away from our responsibilities. Let us strive to improve the lives of homeless women by creating a safe and secure environment for them.</p>
                <a href="#" class="text-red-500 font-semibold">Learn More</a>
            </div>
        </div>
    </div>
</div>

<!-- Why Education Section -->
{{-- <section class="py-12 bg-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Why Education</h2>
        <p class="text-lg mb-8">If we need to address healthcare, poverty, population control, unemployment and human rights, there’s no better way to start than providing education to children in need. Education not only empowers children to have a secure future but also helps them grow up as responsible national and global citizens. The Right to Education (RTE) Act which came into force in 2010 made education free and compulsory for all children in the age group of 6-14 years. But even a decade later, the learning curve has not been steady for many children in the country. The socio-economic conditions of parents and lack of proper learning in schools are hindrances which prevent many children from having education.</p>
    </div>
</section> --}}



<!-- Reach & Presence Section -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Reach & Presence</h2>
        <div class="flex flex-wrap justify-center gap-8">
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/projects-icon.png') }}" alt="Projects Icon" class="mb-4">
                <p>261 projects</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/states-icon.png') }}" alt="States Icon" class="mb-4">
                <p>23 states</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/districts-icon.png') }}" alt="Districts Icon" class="mb-4">
                <p>12 Aspirational Districts</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/connect-icon.png') }}" alt="Connect Icon" class="mb-4">
                <p>8 Government Connect States</p>
            </div>
        </div>
    </div>
</section>

<!-- Stories of Change Section -->
<section class="py-12 bg-gray-200">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Stories of Change</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-4 bg-white rounded shadow">
                <img src="{{ asset('images/debasmita.jpg') }}" alt="Debasmita" class="rounded mb-4">
                <h3 class="text-xl font-bold">Debasmita</h3>
                <p class="text-lg">In the slum where I live, many parents are worried about their children's education.</p>
                <a href="#" class="text-blue-500 hover:underline">Read more ></a>
            </div>
            <div class="p-4 bg-white rounded shadow">
                <img src="{{ asset('images/lavanaya.jpg') }}" alt="Lavanaya" class="rounded mb-4">
                <h3 class="text-xl font-bold">Lavanaya</h3>
                <p class="text-lg">Some people say I am unlucky. My father went away when I was born, and later my mother died in an accident.</p>
                <a href="#" class="text-blue-500 hover:underline">Read more ></a>
            </div>
            <div class="p-4 bg-white rounded shadow">
                <img src="{{ asset('images/neha.jpg') }}" alt="Neha" class="rounded mb-4">
                <h3 class="text-xl font-bold">Neha</h3>
                <p class="text-lg">My father used to sell vegetables, but during the pandemic everything closed down.</p>
                <a href="#" class="text-blue-500 hover:underline">Read more ></a>
            </div>
        </div>
    </div>
</section>

@endsection