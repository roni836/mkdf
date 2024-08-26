@extends('home.homeBase')
@section('content')
    <!-- Hero Section -->
    <section class="relative  mt-[7.5rem] z-0">
        <img src="{{ asset('logo/cimg1.jpg') }}" alt="Hero Image" class="w-full h-[500px] object-cover">
        <div
            class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-4xl font-bold">Bringing Smiles Through Education & Empowerment</h1>
            <a href="#" class="mt-4 bg-green-500 text-white py-2 px-4 rounded">Know More</a>
        </div>
    </section>


    <div class="max-w-6xl mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="images/don1.webp" alt="Donate Dry Ration"
                    class="mx-auto mb-4 w-32 h-32 rounded-full object-cover">
                <h3 class="text-2xl font-bold text-blue-700">Donate Dry Ration</h3>
                <p class="text-base font-medium text-red-600 mt-2">Help the Needy: Donate Dry Ration Kits Including Wheat
                    Flour, Rice, Dal, Salt, Oil, Sugar, Chilli Powder, and More!</p>
                <a href="#" class="text-blue-500 font-semibold mt-2 block">Learn More</a>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="images/don2.webp" alt="Death Anniversary Food Donation"
                    class="mx-auto mb-4 w-32 h-32 rounded-full object-cover">
                <h3 class="text-2xl font-bold text-blue-700">Death Anniversary Food Donation</h3>
                <p class="text-base font-medium text-red-600 mt-2">Donate Food on a Death Anniversary: Meaningful
                    Remembrances for Your Loved Ones.</p>
                <a href="#" class="text-blue-500 font-semibold mt-2 block">Learn More</a>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="images/don3.webp" alt="Birthdays Food Donation"
                    class="mx-auto mb-4 w-32 h-32 rounded-full object-cover">
                <h3 class="text-2xl font-bold text-blue-700">Birthdays Food Donation</h3>
                <p class="text-base font-medium text-red-600 mt-2">Nourish Lives on Special Occasions: Celebrate Birthdays
                    and Make a Difference.</p>
                <a href="#" class="text-blue-500 font-semibold mt-2 block">Learn More</a>
            </div>

        </div>
    </div>

    <!-- Our Programmes Section -->
    <section class="container mx-auto my-12 px-12 mt-20">
        <h2 class="text-4xl font-bold text-center mb-8">Our Programmes</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="flex items-center">
                <img src="{{ asset('images/pimg.jpg') }}" alt="Education" class="w-20 h-20 mr-4 object-cover">
                <div><a href="">
                        <h3 class="text-3xl font-semibold hover:underline text-orange-400">Medicine</h3>
                    </a>
                    <p class="text-gray-700">Left over medicine to cure and holistic development.</p>
                </div>
            </div>
            <div class="flex items-center">
                <img src="{{ asset('images/pimg-1.jpg') }}" alt="Healthcare" class="w-20 h-20 mr-4 object-cover">
                <div>
                    <a href="">
                        <h3 class="text-3xl font-semibold hover:underline text-blue-400">Competitive Books</h3>
                    </a>
                    <p class="text-gray-700">Taking healthcare services to doorsteps of hard to reach communities</p>
                </div>
            </div>
            <div class="flex items-center">
                <img src="{{ asset('images/pimg2.jpg') }}" alt="Women Empowerment" class="w-20 h-20 mr-4 object-cover">
                <div>
                    <a href="">
                        <h3 class="text-3xl font-semibold hover:underline text-green-500">People Feeding</h3>
                    </a>
                    <p class="text-gray-700">Left over foods for donation support for underprivileged youth</p>
                </div>
            </div>
            <div class="flex items-center">
                <img src="{{ asset('images/pimg3.jpg') }}" alt="Livelihood" class="w-20 h-20 mr-4 object-cover">
                <div>
                    <a href="">
                        <h3 class="text-3xl font-semibold hover:underline text-yellow-400">Donation in Kind</h3>
                    </a>
                    <p class="text-gray-700">Skill training and placement support for underprivileged youth</p>
                </div>
            </div>
            <div class="flex items-center">
                <img src="{{ asset('images/pimg4.jpg') }}" alt="Empowering Grassroots" class="w-20 h-20 mr-4 object-cover">
                <div>
                    <a href="">
                        <h3 class="text-3xl font-semibold hover:underline text-pink-400">Donate Grocerine</h3>
                    </a>
                    <p class="text-gray-700">Helping community-based organizations become locally sustainable</p>
                </div>
            </div>
        </div>
    </section>


    <div class="max-w-6xl mx-auto py-12">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-8">OUR IMPACT</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="images/impact1.webp" alt="Icon 1" class="mx-auto mb-4 w-16 h-16">
                <h3 class="text-3xl font-bold text-pink-600">100K+</h3>
                <p class="text-lg font-semibold text-gray-700">Youth Volunteers Trained</p>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="images/impact2.webp" alt="Icon 2" class="mx-auto mb-4 w-16 h-16">
                <h3 class="text-3xl font-bold text-pink-600">22</h3>
                <p class="text-lg font-semibold text-gray-700">Social Innovations</p>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="images/impact3.webp" alt="Icon 3" class="mx-auto mb-4 w-16 h-16">
                <h3 class="text-3xl font-bold text-pink-600">2.5M+</h3>
                <p class="text-lg font-semibold text-gray-700">Beneficiaries Served</p>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="images/impact4.webp" alt="Icon 4" class="mx-auto mb-4 w-16 h-16">
                <h3 class="text-3xl font-bold text-pink-600">19</h3>
                <p class="text-lg font-semibold text-gray-700">Mega Events Organised</p>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="images/impact5.webp" alt="Icon 5" class="mx-auto mb-4 w-16 h-16">
                <h3 class="text-3xl font-bold text-pink-600">$4M+</h3>
                <p class="text-lg font-semibold text-gray-700">Financial Support Delivered</p>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="images/impact6.webp" alt="Icon 6" class="mx-auto mb-4 w-16 h-16">
                <h3 class="text-3xl font-bold text-pink-600">$75M+</h3>
                <p class="text-lg font-semibold text-gray-700">In Kind Support Delivered</p>
            </div>

        </div>
    </div>





    <!-- Sustainable Development Goals Section -->
    {{-- <section class="bg-white py-12 mt-32">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-8">Towards Achieving Sustainable Development Goals</h2>
        <div class="flex justify-center space-x-4 mt-20">
            <div class="bg-purple-200 p-4 rounded-full w-60">
                <h3 class="text-lg font-semibold">Good Health & Well Being</h3>
                <p>#3</p>
            </div>
            <div class="bg-pink-200 p-4 rounded-full w-60">
                <h3 class="text-lg font-semibold">Gender Equality</h3>
                <p>#5</p>
            </div>
            <div class="bg-yellow-200 p-4 rounded-full w-60">
                <h3 class="text-lg font-semibold">Quality Education</h3>
                <p>#4</p>
            </div>
            <div class="bg-green-200 p-4 rounded-full w-60">
                <h3 class="text-lg font-semibold">Decent Work & Economic Growth</h3>
                <p>#8</p>
            </div>
            <div class="bg-blue-200 p-4 rounded-full w-60">
                <h3 class="text-lg font-semibold">Reduced Inequalities</h3>
                <p>#10</p>
            </div>
            <div class="bg-green-500 p-4 rounded-full w-60">
                <h3 class="text-lg font-semibold">Partnerships for the Goals</h3>
                <p>#17</p>
            </div>
        </div>
    </div>
</section> --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-10">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/don6.webp" alt="Provide Food to Hungry" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Provide Food to Hungry</h2>
                <p class="text-gray-700 mb-4">With just Rs.550/- you can provide food to 50 persons.</p>
                <a href="/about-needy" class="text-red-500 font-semibold">Donate Now</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/don4.webp" alt="Donate Hygiene Kit" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Donate Hygiene Kit</h2>
                <p class="text-gray-700 mb-4">With just Rs.500/- you can provide a hygiene kit to a woman.</p>
                <a href="/about-needy" class="text-red-500 font-semibold">Donate Now</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/don7.webp" alt="Donate Educational Kit" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Donate Educational Kit</h2>
                <p class="text-gray-700 mb-4">With just Rs.750/- you can provide an educational kit to a child.</p>
                <a href="#" class="text-red-500 font-semibold">Donate Now</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/don8.webp" alt="Donate A Warm Blanket" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Donate A Warm Blanket</h2>
                <p class="text-gray-700 mb-4">With just Rs.400/- you can provide a blanket to a homeless.</p>
                <a href="#" class="text-red-500 font-semibold">Donate Now</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/don6.webp" alt="Provide Food to Hungry" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Provide Food to Hungry</h2>
                <p class="text-gray-700 mb-4">With just Rs.550/- you can provide food to 50 persons.</p>
                <a href="#" class="text-red-500 font-semibold">Donate Now</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/don4.webp" alt="Donate Hygiene Kit" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Donate Hygiene Kit</h2>
                <p class="text-gray-700 mb-4">With just Rs.500/- you can provide a hygiene kit to a woman.</p>
                <a href="#" class="text-red-500 font-semibold">Donate Now</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/don7.webp" alt="Donate Educational Kit" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Donate Educational Kit</h2>
                <p class="text-gray-700 mb-4">With just Rs.750/- you can provide an educational kit to a child.</p>
                <a href="#" class="text-red-500 font-semibold">Donate Now</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="images/don8.webp" alt="Donate A Warm Blanket" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Donate A Warm Blanket</h2>
                <p class="text-gray-700 mb-4">With just Rs.400/- you can provide a blanket to a homeless.</p>
                <a href="#" class="text-red-500 font-semibold">Donate Now</a>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-12 py-8">
        <h2 class="text-3xl font-bold text-center mb-4">Come to our events for more info</h2>
        <p class="text-center text-gray-500 mb-8">
            Donec pellentesque nunc sed neque congue, ut lobortis odio sollicitudin.
            Curabitur orci orci, maximus nec sodales vitae, tristique.
        </p>

        <!-- Event Section -->
        <div class="bg-blue-900 text-white p-4 mb-8">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold">EVENTS</h3>
                <h3 class="text-lg font-semibold uppercase">Upcoming Events</h3>
                <div>
                    <button class="text-white bg-blue-700 px-3 py-1 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7v10M12 7v10m4-10v10M5 12h14" />
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
                        Nulla molestie et nisi nec scelerisque. Mauris felis erat, sodales in pellentesque sit amet,
                        elementum ac mi. Nulla volutpat id lorem id tempor.
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, risus ac hendrerit
                        consectetur, elit nisl luctus est, sit amet vehicula ligula diam sit amet risus.
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
                        Fusce lacinia sodales gravida. Pellentesque pellentesque tristique bibendum. Morbi sagittis
                        porttitor congue.
                    </p>
                </div>
                <div class="self-center">
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">VIEW DETAILS</button>
                </div>
            </div>
            <!-- Event Item -->
        </div>
    </div>

    <div class="w-full mx-auto p-10 bg-green-100 px-20">
        <h1 class="text-3xl font-semibold text-blue-700 mb-6 text-center underline">Mkdf Foundation</h1>

        <div class="flex justify-center mb-6">
            <span class="bg-blue-700 text-white py-1 px-3 font-medium text-lg">Primary cause</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Food for Education -->
            <div class=" p-6 rounded-lg  border-blue-600">
                <h2 class="text-xl font-bold mb-4 text-blue-600 underline">1. Food for education (primary cause)</h2>
                <ul class="list-disc list-inside">
                    <li class="font-semibold">Core Mid Day Meal program</li>
                    <p class="text-sm mb-4 ml-5">Including kitchen facilities (vehicles, salaries, trainings etc.)</p>
                    <li class="font-semibold">Other supporting programs</li>
                    <ul class="list-disc list-inside pl-5 text-sm">
                        <li>ICDS: Anganwadi feeding program (children in formative age group 3-6Y)</li>
                        <li>Other meal programs: Milk distribution, breakfast feeding</li>
                        <li>Infrastructure: Minimal upgrades supplementing core MDM program</li>
                    </ul>
                </ul>
            </div>


            <div class="">
                <img src="{{ asset('images/social.png') }}" class="h-80 mx-auto" alt="">
            </div>

            <!-- Sustainability -->
            <div class="p-6 border-green-600">
                <h2 class="text-xl font-bold mb-4 text-green-600 underline">2. Sustainability (ancillary cause)</h2>
                <ul class="list-disc list-inside text-sm">
                    <li><span class="font-semibold">Energy:</span> Shift to renewable sources of energy</li>
                    <li><span class="font-semibold">Water:</span> Minimize non-cooking freshwater usage</li>
                    <li><span class="font-semibold">Waste:</span> Effective waste management</li>
                </ul>
            </div>

            <!-- Education beyond MDM -->
            {{-- <div class="p-6 border-orange-600">
            <h2 class="text-xl font-bold mb-4 text-orange-600 underline">3. Education beyond MDM (ancillary cause)</h2>
            <ul class="list-disc list-inside text-sm">
                <li><span class="font-semibold">Scholarship program:</span> Financial aid for government school children and MDM beneficiaries seeking higher education / specialized skills training</li>
            </ul>
        </div> --}}

        </div>
    </div>



    <!-- Support a Cause Section -->
    <section class="bg-white py-12">


        {{-- <div class="bg-[#2980b9] mt-10">
            <div class="max-w-4xl mx-auto  text-white p-16 rounded-lg ">
                <h2 class="text-4xl font-semibold text-center mb-10">Hear from our Biggest Contributors</h2>
                <!-- Slide 1 -->
                <div class="flex flex-col items-center font-light">
                    <div class="flex gap-5">
                        <img src="{{ asset('images/con1.png') }}" alt="Contributor" class="rounded-full mb-6">
                        <div class="flex flex-col">
                            <p class="text-base leading-relaxed">Hunger is not a natural disaster but man-made one to a
                                large
                                extent. Hence, I feel, it is our duty to make India hunger-free. It was pleasant to know
                                about the implementation of the Mid-Day Meal Programme by The Akshaya Patra Foundation.
                                The
                                modus operandi and functioning of this programme deeply touched my heart as I, at Galway
                                Foundation.</p>
                            <p class=" text-green-400 text-lg">Mr. Urmilesh Swami</p>
                            <p class="text-green-200 text-lg">Head - Galway Foundation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="bg-[#2980b9] mt-10">
            <div class="max-w-5xl mx-auto text-white px-16 py-10 rounded-lg relative">
                <h2 class="text-4xl font-semibold text-center mb-10 text-gray-300">Our Biggest Contributors</h2>

                <!-- Carousel Container -->
                <div class="relative">
                    <!-- Slide 1 -->
                    <div class="testimonial-slide flex flex-col items-center font-light">
                        <div class="flex gap-5">
                            <img src="{{ asset('images/con1.png') }}" alt="Contributor" class="rounded-full mb-6">
                            <div class="flex flex-col">
                                <p class="text-base leading-relaxed">Hunger is not a natural disaster but man-made one to a
                                    large
                                    extent. Hence, I feel, it is our duty to make India hunger-free. It was pleasant to know
                                    about the implementation of the Mid-Day Meal Programme by The Akshaya Patra Foundation.
                                    The modus operandi and functioning of this programme deeply touched my heart as I, at
                                    Galway
                                    Foundation.</p>
                                <p class="text-green-400 text-lg">Mr. Urmilesh Swami</p>
                                <p class="text-green-200 text-lg">Head - Galway Foundation</p>
                            </div>
                        </div>
                    </div>

                    <!-- S1lide 2 -->
                    <div class="testimonial-slide hidden flex flex-col items-center font-light">
                        <div class="flex gap-5">
                            <img src="{{ asset('images/con2.png') }}" alt="Contributor" class="rounded-full mb-6">
                            <div class="flex flex-col">
                                <p class="text-base leading-relaxed">The work done by The Akshaya Patra Foundation is
                                    lorem5
                                    nothing short of inspiring. Their commitment to providing meals to millions of children
                                    across India is a testament to the power of dedication and compassion. I'm proud to be
                                    associated with such a noble cause.</p>
                                <p class="text-green-400 text-lg">Ms. Anjali Menon</p>
                                <p class="text-green-200 text-lg">CEO - XYZ Foundation</p>
                            </div>
                        </div>
                    </div>

                </div>
                <button id="prevBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2  text-blue-900 p-2 ">
                    <i class="fa-solid fa-chevron-left fa-xl"></i>
                </button>
                <button id="nextBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2  text-blue-900 p-2 ">
                    <i class="fa-solid fa-chevron-right fa-xl"></i>
                </button>
            </div>

        </div>

        <div class="relative">
            <div class="container mx-auto px-4 py-8 mt-20 ">
                <h1 class="text-4xl font-bold text-center text-blue-900 mb-8">Latest Updates</h1>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Update 1 -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://www.akshayapatra.org/includefiles/news/News_Droupadi-Murmu_600x400_22.jpg"
                            alt="Update 1 Image" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <p class="text-blue-700 font-semibold">June, 4 2024</p>
                            <h2 class="text-xl font-bold text-gray-900 mb-2">Cargill and Akshaya Patra paint 1000
                                blackboards;
                                set new Asia record</h2>
                            <a href="#" class="text-blue-500 hover:underline">Read More</a>
                        </div>
                    </div>

                    <!-- Update 2 -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://www.akshayapatra.org/includefiles/news/News_Millets_600x400_111.jpg"
                            alt="Update 2 Image" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <p class="text-blue-700 font-semibold">April, 18 2024</p>
                            <h2 class="text-xl font-bold text-gray-900 mb-2">Akshaya Patra’s 4 Billion Meals Milestone
                                Commemorated at the UN Headquarters, New York</h2>
                            <a href="#" class="text-blue-500 hover:underline">Read More</a>
                        </div>
                    </div>

                    <!-- Update 3 -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://www.akshayapatra.org/includefiles/news/News_Millets_600x400_111.jpg"
                            alt="Update 3 Image" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <p class="text-blue-700 font-semibold">February, 19 2024</p>
                            <h2 class="text-xl font-bold text-gray-900 mb-2">Akshaya Patra’s 68th Kitchen Inaugurated in
                                Panvel, Maharashtra</h2>
                            <a href="#" class="text-blue-500 hover:underline">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            <button id="prevButton" class="absolute left-10 top-1/2 transform -translate-y-1/2  text-blue-900 p-2 ">
                <i class="fa-solid fa-chevron-left fa-xl"></i>
            </button>
            <button id="nextButton" class="absolute right-10 top-1/2 transform -translate-y-1/2  text-blue-900 p-2 ">
                <i class="fa-solid fa-chevron-right fa-xl"></i>
            </button>
        </div>


        {{-- <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Support a Cause</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold">Tayyari Kal Ki</h3>
                    <p class="text-gray-700">Our campaign ‘Tayyari Kal Ki’ aims at Training & Up Skilling the youth between
                        the age of 18-32 years for employment and empowering them with a secure livelihood.</p>
                    <a href="#" class="text-blue-500 hover:underline">know more ></a>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold">Health Cannot Wait</h3>
                    <p class="text-gray-700">Realising the need for accessible and quality healthcare for all, our campaign
                        ‘Health Cannot Wait’ aims at providing people from the under-privileged sections</p>
                    <a href="#" class="text-blue-500 hover:underline">know more ></a>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold">Shiksha Na Ruke</h3>
                    <p class="text-gray-700">Smile Foundation, through its ‘Shiksha Na Ruke’ initiative, has been helping
                        children from difficult circumstances get back to school and restart their lives</p>
                    <a href="#" class="text-blue-500 hover:underline">know more ></a>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold">She Can Fly</h3>
                    <p class="text-gray-700">Smile Foundation’s initiative ‘She Can Fly’ is an effort to enable, equip and
                        empower girl children with quality education, proper nutrition, good health</p>
                    <a href="#" class="text-blue-500 hover:underline">know more ></a>
                </div>
            </div>
        </div> --}}

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const slides = document.querySelectorAll('.testimonial-slide');
                let currentSlide = 0;

                function showSlide(index) {
                    slides.forEach((slide, i) => {
                        slide.classList.toggle('hidden', i !== index);
                    });
                }

                function nextSlide() {
                    currentSlide = (currentSlide + 1) % slides.length;
                    showSlide(currentSlide);
                }

                function prevSlide() {
                    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                    showSlide(currentSlide);
                }

                document.getElementById('nextBtn').addEventListener('click', nextSlide);
                document.getElementById('prevBtn').addEventListener('click', prevSlide);

                // Automatic sliding
                setInterval(nextSlide, 6000); // Slide every 5 seconds

                showSlide(currentSlide); // Initialize the first slide
            });
        </script>


    </section>
@endsection
