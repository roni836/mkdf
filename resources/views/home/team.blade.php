@extends('home.homeBase')
@section('content')
    {{-- <div class="relative  mt-[8.5rem]">
        <!-- Background Image -->
        <img src="{{ asset('images/breadcrum-image.jpg') }}" alt="Background" class="w-full h-80 object-cover">

        <!-- Overlay with Text -->
        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <h1 class="text-white text-4xl font-bold">What We Do</h1>
        </div>
    </div> --}}


    {{-- <div class="max-w-3xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg h-96 ">
        <!-- Parent Node -->
        <div class="text-center mb-6">
            <div
                class="inline-block px-6 py-3 bg-blue-600 hover:bg-blue-700 cursor-pointer text-white rounded-full shadow-lg">
                <h2 class="font-bold text-lg">Social</h2>
            </div>
        </div>

        <!-- Vertical Connecting Line from Parent Node -->
        <div class="flex justify-center">
            <div class="h-20 w-1 bg-gray-400"></div>
        </div>

        <!-- Horizontal Connecting Line between Child Nodes -->
        <div class="flex justify-center ">
            <div class="w-full h-1 bg-gray-400 relative">
                <div class="absolute left-1/4 transform -translate-x-1/2">
                    <div class="w-1 h-6 bg-gray-400"></div>
                </div>
                <div class="absolute left-2/4 transform -translate-x-1/2">
                    <div class="w-1 h-6 bg-gray-400"></div>
                </div>
                <div class="absolute left-3/4 transform -translate-x-1/2">
                    <div class="w-1 h-6 bg-gray-400"></div>
                </div>
            </div>
        </div>

        <!-- Child Nodes -->
        <div class="flex justify-between items-center mt-10">
            <!-- Social Pharmacy -->
            <div class="flex flex-col items-center">
                <div
                    class="inline-block p-4 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-lg cursor-pointer">
                    <h3 class="font-semibold text-md">Social Pharmacy</h3>
                </div>
            </div>

            <!-- Social Kitchen -->
            <div class="flex flex-col items-center">
                <div
                    class="inline-block p-4 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full shadow-lg cursor-pointer">
                    <h3 class="font-semibold text-md">Social Kitchen</h3>
                </div>
            </div>

            <!-- Social Books -->
            <div class="flex flex-col items-center">
                <div class="inline-block p-4 bg-red-500 hover:bg-red-600 text-white rounded-full shadow-lg cursor-pointer">
                    <h3 class="font-semibold text-md">Social Books</h3>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <section class="py-12 bg-gray-100 mb-10">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Stories of Change</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-4 bg-white rounded shadow">
                    <img src="{{ asset('images/don10.webp') }}" alt="Debasmita" class="rounded mb-4">
                    <h3 class="text-xl font-bold">Debasmita</h3>
                    <p class="text-lg">In the slum where I live, many parents are worried about their children's education.
                    </p>
                    <a href="#" class="text-blue-500 hover:underline">Read more ></a>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <img src="{{ asset('images/don10.webp') }}" alt="Lavanaya" class="rounded mb-4">
                    <h3 class="text-xl font-bold">Lavanaya</h3>
                    <p class="text-lg">Some people say I am unlucky. My father went away when I was born, and later my
                        mother died in an accident.</p>
                    <a href="#" class="text-blue-500 hover:underline">Read more ></a>
                </div>
                <div class="p-4 bg-white rounded shadow">
                    <img src="{{ asset('images/don10.webp') }}" alt="Neha" class="rounded mb-4">
                    <h3 class="text-xl font-bold">Neha</h3>
                    <p class="text-lg">My father used to sell vegetables, but during the pandemic everything closed down.
                    </p>
                    <a href="#" class="text-blue-500 hover:underline">Read more ></a>
                </div>
            </div>
        </div>
    </section> --}}
<!-- Hero Section -->
<section class="bg-green-600 text-white py-16 mt-[7rem]">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold">Meet Our Team</h2>
        <p class="mt-4 text-lg">The heart of our organization lies with our dedicated volunteers.</p>
    </div>
</section>

<!-- Volunteers Section -->
{{-- <section class="py-12">
    <div class="container mx-auto px-4">
        <h3 class="text-3xl font-semibold text-gray-800 text-center mb-12">Our Amazing Volunteers</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Volunteer 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img class="w-32 h-32 mx-auto rounded-full mb-4" src="https://via.placeholder.com/150" alt="Volunteer 1">
                <h4 class="text-xl font-semibold text-gray-800">Emily Johnson</h4>
                <p class="text-gray-600">Community Outreach Coordinator</p>
                <p class="mt-4 text-gray-700">Emily has been with us for over 3 years, dedicating her time to ensure every campaign reaches those in need.</p>
            </div>
            <!-- Volunteer 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img class="w-32 h-32 mx-auto rounded-full mb-4" src="https://via.placeholder.com/150" alt="Volunteer 2">
                <h4 class="text-xl font-semibold text-gray-800">Michael Lee</h4>
                <p class="text-gray-600">Event Coordinator</p>
                <p class="mt-4 text-gray-700">Michael's exceptional event management skills help us organize impactful programs that make a difference in the community.</p>
            </div>
            <!-- Volunteer 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img class="w-32 h-32 mx-auto rounded-full mb-4" src="https://via.placeholder.com/150" alt="Volunteer 3">
                <h4 class="text-xl font-semibold text-gray-800">Sarah Brown</h4>
                <p class="text-gray-600">Volunteer Mentor</p>
                <p class="mt-4 text-gray-700">Sarah supports and trains new volunteers, making sure they are ready to tackle our challenges and projects.</p>
            </div>
        </div>
    </div>
</section> --}}

<div class="bg-gray-100 py-10 mt-[5rem]">
    <div class="text-center">
        {{-- <h3 class="text-lg font-light uppercase text-gray-600 tracking-wider">Team</h3> --}}
        <h1 class="text-4xl font-extrabold mt-2 mb-4 dancing-script-text">" A team with whom we are growing "</h1>
        <p class="text-gray-600 mb-10 font-semibold mt-8">Our Mobile application developers use modern technology to create applications
            for Our Mobile application developers use modern technology to create applications.</p>
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

   <!-- Team Section -->
   <section class="py-16">
    <div class="container mx-auto px-4">
        <h3 class="text-3xl font-semibold text-gray-800 text-center mb-12">Meet the Volunteers</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Team Member -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img class="w-32 h-32 mx-auto rounded-full mb-4" src="https://via.placeholder.com/150"
                    alt="Team Member 1">
                <h4 class="text-xl font-semibold text-gray-800">John Doe</h4>
                <p class="text-gray-600">CEO & Founder</p>
            </div>
            <!-- Team Member -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img class="w-32 h-32 mx-auto rounded-full mb-4" src="https://via.placeholder.com/150"
                    alt="Team Member 2">
                <h4 class="text-xl font-semibold text-gray-800">Jane Smith</h4>
                <p class="text-gray-600">CTO</p>
            </div>
            <!-- Team Member -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img class="w-32 h-32 mx-auto rounded-full mb-4" src="https://via.placeholder.com/150"
                    alt="Team Member 3">
                <h4 class="text-xl font-semibold text-gray-800">Mark Johnson</h4>
                <p class="text-gray-600">Lead Developer</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
{{-- <section class="bg-green-600 text-white py-16">
    <div class="container mx-auto text-center">
        <h3 class="text-3xl font-semibold">Want to Join Our Team?</h3>
        <p class="mt-4 text-lg">Become a volunteer and make a positive impact on society.</p>
        <a href="#" class="mt-6 inline-block bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100">Apply Now</a>
    </div>
</section> --}}

   

    {{-- <div class="relative  mt-[8.5rem]">
        <!-- Background Image -->
        <img src="{{ asset('images/breadcrum-image.jpg') }}" alt="Background" class="w-full h-80 object-cover">

        <!-- Overlay with Text -->
        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <h1 class="text-white text-4xl font-bold">Our Work</h1>
        </div>
    </div> --}}

    <!-- What We Do Section -->
    {{-- <section class="py-12 bg-gray-200">
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
    </section> --}}

{{-- 
    <div class="bg-blue-200 p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-10">
            <div class="bg-white shadow-md rounded-lg overflow-hidden ">
                <img src="images/don9.webp" alt="Help us to Provide Food to the Hungry" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Help us to Provide Food to the Hungry</h2>
                    <p class="text-gray-700 mb-4">Majority of the underprivileged patients admitted in Government hospitals
                        are those who come from nearby states are often poor, in several cases family members decide to stay
                        hungry to save money. Join the Uday Foundation to provide food to poor patients and their families
                        outside hospitals. With just Rs.550/- you can provide food to 50 people.</p>
                    <a href="#" class="text-red-500 font-semibold">Learn More</a>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="images/don10.webp" alt="Donate Hygiene and Dignity Kit for Women"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Donate Hygiene and Dignity Kit for Women</h2>
                    <p class="text-gray-700 mb-4">We at Uday Foundation have witnessed these struggles homeless women go
                        through with close quarters. While efforts are being taken to provide safe shelters to this section,
                        we cannot shy away from our responsibilities. Let us strive to improve the lives of homeless women
                        by creating a safe and secure environment for them.</p>
                    <a href="#" class="text-red-500 font-semibold">Learn More</a>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden ">
                <img src="images/don9.webp" alt="Help us to Provide Food to the Hungry" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Help us to Provide Food to the Hungry</h2>
                    <p class="text-gray-700 mb-4">Majority of the underprivileged patients admitted in Government hospitals
                        are those who come from nearby states are often poor, in several cases family members decide to stay
                        hungry to save money. Join the Uday Foundation to provide food to poor patients and their families
                        outside hospitals. With just Rs.550/- you can provide food to 50 people.</p>
                    <a href="#" class="text-red-500 font-semibold">Learn More</a>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="images/don10.webp" alt="Donate Hygiene and Dignity Kit for Women"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Donate Hygiene and Dignity Kit for Women</h2>
                    <p class="text-gray-700 mb-4">We at Uday Foundation have witnessed these struggles homeless women go
                        through with close quarters. While efforts are being taken to provide safe shelters to this section,
                        we cannot shy away from our responsibilities. Let us strive to improve the lives of homeless women
                        by creating a safe and secure environment for them.</p>
                    <a href="#" class="text-red-500 font-semibold">Learn More</a>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden ">
                <img src="images/don9.webp" alt="Help us to Provide Food to the Hungry" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Help us to Provide Food to the Hungry</h2>
                    <p class="text-gray-700 mb-4">Majority of the underprivileged patients admitted in Government hospitals
                        are those who come from nearby states are often poor, in several cases family members decide to stay
                        hungry to save money. Join the Uday Foundation to provide food to poor patients and their families
                        outside hospitals. With just Rs.550/- you can provide food to 50 people.</p>
                    <a href="#" class="text-red-500 font-semibold">Learn More</a>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="images/don10.webp" alt="Donate Hygiene and Dignity Kit for Women"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Donate Hygiene and Dignity Kit for Women</h2>
                    <p class="text-gray-700 mb-4">We at Uday Foundation have witnessed these struggles homeless women go
                        through with close quarters. While efforts are being taken to provide safe shelters to this section,
                        we cannot shy away from our responsibilities. Let us strive to improve the lives of homeless women
                        by creating a safe and secure environment for them.</p>
                    <a href="#" class="text-red-500 font-semibold">Learn More</a>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Why Education Section -->
    {{-- <section class="py-12 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Why Education</h2>
            <p class="text-lg mb-8">If we need to address healthcare, poverty, population control, unemployment and human rights, there’s no better way to start than providing education to children in need. Education not only empowers children to have a secure future but also helps them grow up as responsible national and global citizens. The Right to Education (RTE) Act which came into force in 2010 made education free and compulsory for all children in the age group of 6-14 years. But even a decade later, the learning curve has not been steady for many children in the country. The socio-economic conditions of parents and lack of proper learning in schools are hindrances which prevent many children from having education.</p>
        </div>
    </section> --}}



    <!-- Reach & Presence Section -->
    {{-- <section class="py-12 bg-white">
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
    </section> --}}

    <!-- Stories of Change Section -->
@endsection
