@extends('home.homeBase')
@section('content')
    <style>
        .faq-item {
            cursor: pointer;
            color: blue;
        }

        .faq-answer {
            display: none;
        }

        .faq-item.active .faq-answer {
            display: block;
        }
    </style>

    {{-- <div class="relative">
    <!-- Background Image -->
    <img src="{{ asset('images/breadcrum-image.jpg') }}" alt="Background" class="w-full h-80 object-cover">

    <!-- Overlay with Text -->
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <h1 class="text-white text-4xl font-bold">About Us</h1>
    </div>
</div> --}}




    <!-- Carousel Container -->
    {{-- <div class="max-w-7xl mx-auto  mt-[8.5rem]">
        <h1 class="text-center text-3xl font-bold text-gray-800 mb-6">Our Story of Happiness through <span
                class="text-yellow-400">your support</span></h1>

        <div class="relative overflow-hidden">
            <!-- Carousel Wrapper -->
            <div id="carousel" class="flex transition-transform duration-500">

                <!-- View 1 (set of cards) -->
                <div class="flex flex-nowrap ">
                    <div class="w-1/3 flex-shrink-0 p-4  ">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden h-[420px]">
                            <img src="{{ asset('images/sp-1.webp') }}" alt="Kothandaraman" class="h-48 w-full object-cover">
                            <div class="p-6 bg-yellow-400 h-full">
                                <h2 class="text-xl font-bold text-black">Kothandaraman, 66 years</h2>
                                <p class="text-black pt-2">Used to work in Cuddalore district and suddenly lost vision in
                                    both of his eyes.</p>
                                <a href="#" class="text-blue-700 hover:text-blue-600 mt-4 inline-block">+ Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/3 flex-shrink-0 p-4">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden h-[420px]">
                            <img src="{{ asset('images/sp-2.webp') }}" alt="COVID19 Response"
                                class="h-48 w-full object-cover">
                            <div class="p-6 bg-yellow-400 h-full">
                                <h2 class="text-xl font-bold text-black">COVID19 Response</h2>
                                <p class="text-black pt-2">With Elderly at a higher risk, our covid-19 response team ensures
                                    our elders are Essential Commodities Distribution.</p>
                                <a href="#" class="text-blue-700 hover:text-blue-600 mt-4 inline-block">+ Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/3 flex-shrink-0 p-4">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden  h-[420px]">
                            <img src="{{ asset('images/sp-3.webp') }}" alt="COVID19 Response"
                                class="h-48 w-full object-cover">
                            <div class="p-6 bg-yellow-400 h-full">
                                <h2 class="text-xl font-bold text-black">COVID19 Response</h2>
                                <p class="text-black pt-2">With Elderly at a higher risk, our covid-19 response team ensures
                                    our elders are Essential Commodities Distribution.</p>
                                <a href="#" class="text-blue-700 hover:text-blue-600 mt-4 inline-block">+ Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div> --}}

    <section class="bg-blue-600 text-white py-16 mt-[7rem]">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold">About Our Company</h2>
            <p class="mt-4 text-lg">We are passionate about delivering the best services to our clients.</p>
        </div>
    </section>

    <!-- About Us Content -->
    <section class="py-12">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Company Info -->
            <div class="text-gray-700">
                <h3 class="text-3xl font-semibold mb-4">Who We Are</h3>
                <p class="text-lg mb-6">
                    We are a team of professionals dedicated to providing top-notch solutions. Our team combines technical
                    expertise with innovative ideas to deliver excellent results. Our mission is to help businesses grow and
                    achieve their goals by offering the best products and services.
                </p>
                <p class="text-lg">
                    With years of experience in the industry, we have built a reputation for delivering quality work and
                    outstanding customer service. We are here to make your vision a reality.
                </p>
            </div>

            <!-- Image -->
            <div class="flex justify-center items-center">
                <img src="https://via.placeholder.com/500x400" alt="About Us Image" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-semibold">Our Mission</h2>
                <p class="mt-4 text-lg max-w-2xl mx-auto text-gray-700">We aim to make a positive impact on society by
                    working towards the betterment of communities. Our mission is to empower individuals by providing them
                    with the tools, resources, and opportunities they need to thrive in a rapidly changing world.</p>
            </div>
            <div class="flex flex-col md:flex-row justify-around">
                <div class="bg-white shadow-lg rounded-lg p-6 m-4 max-w-xs md:max-w-sm">
                    <h3 class="text-xl font-bold mb-4">Community Support</h3>
                    <p class="text-gray-700">Providing assistance to underprivileged communities through education, health
                        services, and vocational training programs.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 m-4 max-w-xs md:max-w-sm">
                    <h3 class="text-xl font-bold mb-4">Environmental Sustainability</h3>
                    <p class="text-gray-700">Promoting sustainability initiatives to protect our environment and ensure a
                        healthier future for the coming generations.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 m-4 max-w-xs md:max-w-sm">
                    <h3 class="text-xl font-bold mb-4">Innovation & Growth</h3>
                    <p class="text-gray-700">Encouraging innovation and entrepreneurship to create new pathways for economic
                        development and social progress.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="bg-blue-50 py-12">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-semibold">Our Vision</h2>
                <p class="mt-4 text-lg max-w-2xl mx-auto text-gray-700">Our vision is to build a more equitable world where
                    everyone has access to the resources and opportunities they need to succeed. We strive to create
                    sustainable and inclusive communities where innovation, growth, and human potential can flourish.</p>
            </div>
            <div class="flex flex-col md:flex-row justify-around">
                <div class="bg-white shadow-lg rounded-lg p-6 m-4 max-w-xs md:max-w-sm">
                    <h3 class="text-xl font-bold mb-4">Empowerment</h3>
                    <p class="text-gray-700">Empowering individuals to take control of their future by giving them the
                        knowledge, skills, and confidence to succeed.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 m-4 max-w-xs md:max-w-sm">
                    <h3 class="text-xl font-bold mb-4">Inclusivity</h3>
                    <p class="text-gray-700">Fostering inclusive communities where diversity is celebrated, and everyone
                        feels valued and respected.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 m-4 max-w-xs md:max-w-sm">
                    <h3 class="text-xl font-bold mb-4">Sustainability</h3>
                    <p class="text-gray-700">Pursuing sustainable solutions that balance social, economic, and environmental
                        well-being for the long-term benefit of all.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-semibold text-gray-800 mb-12">Our Core Values</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-white rounded-lg shadow">
                    <h4 class="text-2xl font-semibold mb-4 text-blue-600">Integrity</h4>
                    <p>We uphold the highest standards of integrity in all our actions.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow">
                    <h4 class="text-2xl font-semibold mb-4 text-blue-600">Innovation</h4>
                    <p>We innovate and push boundaries to bring better solutions to our clients.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow">
                    <h4 class="text-2xl font-semibold mb-4 text-blue-600">Customer Focus</h4>
                    <p>We put our clients at the heart of everything we do.</p>
                </div>
            </div>
        </div>
    </section>



    <div class="max-w-7xl mx-auto bg-white p-10 rounded-lg shadow-lg mt-20 mb-20">
        <h2 class="text-2xl font-bold mb-4">FAQ Answered by Roni Saha, Founder, MKdf Foundation</h2>

        <div class="faq-item border-b border-gray-300 py-4">
            <div class="faq-question text-lg p-2 font-medium text-blue-600">
                <span class="mr-4">+</span>Please articulate the core idea of your work?
            </div>
            <div class="faq-answer ml-10 mt-2 text-gray-700">
                The core idea of our work is to...
            </div>
        </div>

        <div class="faq-item border-b border-gray-300 py-4">
            <div class="faq-question text-lg p-2 font-medium text-blue-600">
                <span class="mr-4">+</span>What is the main social problem this idea is attempting to solve? What is
                the
                impact of the problem and why does it persist?
            </div>
            <div class="faq-answer ml-10 mt-2 text-gray-700">
                The main social problem we are addressing is...
            </div>
        </div>

        <div class="faq-item border-b border-gray-300 py-4">
            <div class="faq-question text-lg p-2 font-medium text-blue-600">
                <span class="mr-4">+</span>What is the scale of the impact of your work to date?
            </div>
            <div class="faq-answer ml-10 mt-2 text-gray-700">
                The scale of our impact to date includes...
            </div>
        </div>

        <div class="faq-item border-b border-gray-300 py-4">
            <div class="faq-question text-lg p-2 font-medium text-blue-600">
                <span class="mr-4">+</span>Why are you personally dedicated to the issue?
            </div>
            <div class="faq-answer ml-10 mt-2 text-gray-700">
                I am personally dedicated to this issue because...
            </div>
        </div>

    </div>

    <script>
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });
    </script>
@endsection
