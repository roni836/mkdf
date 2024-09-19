@extends('home.homeBase')
@section('content')
    <!-- Hero Section -->



    <div id="controls-carousel" class="relative w-full z-0" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96 md:mt-[8rem]" id="callingHeading">
            <!-- Item 1 -->
            {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class=" flex mt-6 absolute  w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <div class="w-1/2">
                        <div class="relative">
                            <img src="/images/tem1.webp" alt="Ancient Temples" class="w-full rounded shadow">
                            <div class="absolute bottom-0 left-0 bg-red-600 text-white p-4 w-full text-center">
                                <span class="font-bold text-lg">Donate Now</span> to rebuild our Perishing Ancient
                                Temples
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2 pl-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4"> Renovate Ancient Temples to Protect Sanatana
                            Dharma.
                            Donate to preserve our Sacred Religious Heritage </h2>
                        <p class="text-gray-600">Event: Save Ancient Temples</p>
                        <p class="text-red-500 mt-2">Bookings Closing in <span class="font-bold">3 months</span></p>
                        <div class="mt-4">
                            <button class="bg-orange-500 text-white px-4 py-2 rounded shadow">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>

                <div class=" flex mt-6 absolute  w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <div class="w-1/2">
                        <div class="relative">
                            <img src="/images/tem1.webp" alt="Ancient Temples" class="w-full rounded shadow">
                            <div class="absolute bottom-0 left-0 bg-red-600 text-white p-4 w-full text-center">
                                <span class="font-bold text-lg">Donate Now</span> to rebuild our Perishing Ancient
                                Temples
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2 pl-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4"> Renovate Ancient Temples to Protect Sanatana
                            Dharma.
                            Donate to preserve our Sacred Religious Heritage </h2>
                        <p class="text-gray-600">Event: Save Ancient Temples</p>
                        <p class="text-red-500 mt-2">Bookings Closing in <span class="font-bold">3 months</span></p>
                        <div class="mt-4">
                            <button class="bg-orange-500 text-white px-4 py-2 rounded shadow">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>

                <div class=" flex mt-6 absolute  w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <div class="w-1/2">
                        <div class="relative">
                            <img src="/images/tem1.webp" alt="Ancient Temples" class="w-full rounded shadow">
                            <div class="absolute bottom-0 left-0 bg-red-600 text-white p-4 w-full text-center">
                                <span class="font-bold text-lg">Donate Now</span> to rebuild our Perishing Ancient
                                Temples
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2 pl-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4"> Renovate Ancient Temples to Protect Sanatana
                            Dharma.
                            Donate to preserve our Sacred Religious Heritage </h2>
                        <p class="text-gray-600">Event: Save Ancient Temples</p>
                        <p class="text-red-500 mt-2">Bookings Closing in <span class="font-bold">3 months</span></p>
                        <div class="mt-4">
                            <button class="bg-orange-500 text-white px-4 py-2 rounded shadow">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>

                <div class=" flex mt-6 absolute  w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <div class="w-1/2">
                        <div class="relative">
                            <img src="/images/tem1.webp" alt="Ancient Temples" class="w-full rounded shadow">
                            <div class="absolute bottom-0 left-0 bg-red-600 text-white p-4 w-full text-center">
                                <span class="font-bold text-lg">Donate Now</span> to rebuild our Perishing Ancient
                                Temples
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2 pl-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4"> Renovate Ancient Temples to Protect Sanatana
                            Dharma.
                            Donate to preserve our Sacred Religious Heritage </h2>
                        <p class="text-gray-600">Event: Save Ancient Temples</p>
                        <p class="text-red-500 mt-2">Bookings Closing in <span class="font-bold">3 months</span></p>
                        <div class="mt-4">
                            <button class="bg-orange-500 text-white px-4 py-2 rounded shadow">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    {{-- <div id="controls-carousel" class="relative w-full z-0" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-96 overflow-hidden rounded-lg md:h-96 md:mt-[8rem]">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <section class=" absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <img src="{{ asset('logo/cimg1.jpg') }}" alt="Hero Image" class="w-full h-[500px] object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center text-white">
                        <h1 class="text-4xl font-bold">Bringing Smiles Through Education & Empowerment</h1>
                        <a href="#" class="mt-4 bg-green-500 text-white py-2 px-4 rounded">Know More</a>
                    </div>
                </section>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <section class=" z-0 absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <img src="{{ asset('logo/cimg1.jpg') }}" alt="Hero Image" class="w-full h-[500px] object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center text-white">
                        <h1 class="text-4xl font-bold">Bringing Smiles Through Education & Empowerment</h1>
                        <a href="#" class="mt-4 bg-green-500 text-white py-2 px-4 rounded">Know More</a>
                    </div>
                </section>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <section class=" z-0 absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <img src="{{ asset('logo/cimg1.jpg') }}" alt="Hero Image" class="w-full h-[500px] object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center text-white">
                        <h1 class="text-4xl font-bold">Bringing Smiles Through Education & Empowerment</h1>
                        <a href="#" class="mt-4 bg-green-500 text-white py-2 px-4 rounded">Know More</a>
                    </div>
                </section>
            </div>

        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div> --}}
    {{-- 
    <section class="relative  mt-[7.5rem] z-0">
        <img src="{{ asset('logo/cimg1.jpg') }}" alt="Hero Image" class="w-full h-[500px] object-cover">
        <div
            class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-4xl font-bold">Bringing Smiles Through Education & Empowerment</h1>
            <a href="#" class="mt-4 bg-green-500 text-white py-2 px-4 rounded">Know More</a>
        </div>
    </section> --}}


    <div class="max-w-6xl mx-auto py-12 mt-20">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-8 uppercase">OUR Programmes</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6" id="headingDonatingEvent">

            {{-- <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="images/don1.webp" alt="Donate Dry Ration"
                    class="mx-auto mb-4 w-32 h-32 rounded-full object-cover">
                <h3 class="text-2xl font-bold text-blue-700">Donate Dry Ration</h3>
                <p class="text-base font-medium text-red-600 mt-2">Help the Needy: Donate Dry Ration Kits Including Wheat
                    Flour, Rice, Dal, Salt, Oil, Sugar, Chilli Powder, and More!</p>
                <a href="#" class="text-blue-500 font-semibold mt-2 block" id="donating-event-btn">Donate Now</a>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="images/don2.webp" alt="Death Anniversary Food Donation"
                    class="mx-auto mb-4 w-32 h-32 rounded-full object-cover">
                <h3 class="text-2xl font-bold text-blue-700">Death Anniversary Food Donation</h3>
                <p class="text-base font-medium text-red-600 mt-2">Donate Food on a Death Anniversary: Meaningful
                    Remembrances for Your Loved Ones.</p>
                <a href="#" class="text-blue-500 font-semibold mt-2 block" id='donating-event-btn'>Donate Now</a>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="images/don3.webp" alt="Birthdays Food Donation"
                    class="mx-auto mb-4 w-32 h-32 rounded-full object-cover">
                <h3 class="text-2xl font-bold text-blue-700">Birthdays Food Donation</h3>
                <p class="text-base font-medium text-red-600 mt-2">Nourish Lives on Special Occasions: Celebrate Birthdays
                    and Make a Difference.</p>
                <a href="#" class="text-blue-500 font-semibold mt-2 block" id='donating-event-btn'>Donate Now</a>
            </div> --}}

        </div>
    </div>



    <!-- Popup Modal -->
    <div id="donating-event"
        class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 z-30 flex items-center justify-center modal">
        <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg w-full p-4">
            {{-- <div class="text-right">
                    <button id="closeModal" class="text-gray-500 text-4xl">&times;</button>
                </div> --}}
            <h2 id="modalTitle" class="text-lg text-center text-green-500 mb-4 font-semibold"></h2>
            <form id="addDonationData">
                <!-- Form fields -->
                {{-- <button class="absolute top-0 right-0 mt-2 mr-2 text-gray-500 hover:text-gray-700 text-xl"
                        onclick="closeForm()" type="button">
                        &times;
                    </button> --}}
                {{-- <h3 class="text-xl font-bold mb-4">Donation Form</h3> --}}
                <form id="addDonationData">

                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Food Type</label>
                        <select name="food_menu" id="food_menu"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="50">Puri Sabji 50/- per person</option>
                            <option value="30">Khechere 30/- per person</option>
                            <option value="40">Roti Sabji 40/- per person</option>
                            <option value="60">Chawal Daal Sabji 60/- per person</option>
                            <option value="">Other</option>
                        </select>
                        <div class="text-red-500 text-xs italic error-message" id="error-food-menu"></div>
                    </div>

                    <div class="mb-6 flex justify-between items-center">
                        <label class="flex items-center text-sm font-medium text-gray-700">
                            <span class="mr-3">Want to Add Sweets Rs.20/- extra per person</span>
                            <input type="checkbox" name="sweets" id="sweets" value="20"
                                class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        </label>
                    </div>

                    <div class="mb-6 flex items-center gap-8">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="no_of_person">No. of
                            Person :</label>
                        <input
                            class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-1/3"value='5'
                            min="5" name="no_of_person" id="no_of_person" type="number"
                            placeholder="No. of Person">
                        <div class="text-red-500 text-xs italic error-message" id="error-no-of-person"></div>
                    </div>
                    <input type="hidden" name="message" value="" id="message">

                    <div class="mb-6 flex items-center gap-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="amount">Donate Amount :</label>
                        <input
                            class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-1/3"
                            name="amount" id="amount" type="number" placeholder="Enter Amount" readonly>
                        <div class="text-red-500 text-xs italic error-message" id="error-amount"></div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="name" id="name" type="text" placeholder="Enter your name">
                        <div class="text-red-500 text-xs italic error-message" id="error-name"></div>
                    </div>
                    <input class="hidden" name="donating_for" id="donating_for" type="hidden" value="">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="mobile">Mobile</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="mobile" id="mobile" type="tel" placeholder="Enter your mobile number">
                        <div class="text-red-500 text-xs italic error-message" id="error-mobile"></div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="address" id="address" type="text" placeholder="Enter your address">
                        <div class="text-red-500 text-xs italic error-message" id="error-address"></div>
                    </div>
                    <div class="mb-4 flex justify-between items-center">
                        <label class="flex items-center text-sm font-medium text-gray-700">
                            <input type="checkbox" name="show_data" value='1'
                                class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            <span class="ml-2">Want to show your donation details publically</span>
                        </label>
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Submit
                        </button>
                        <button
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button" id="closeModal">
                            Close
                        </button>
                    </div>
                </form>
            </form>
        </div>
    </div>

    <!-- Our Programmes Section -->
    {{-- <section class="container mx-auto my-12 px-12 mt-20">
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
                <img src="{{ asset('images/pimg4.jpg') }}" alt="Empowering Grassroots"
                    class="w-20 h-20 mr-4 object-cover">
                <div>
                    <a href="">
                        <h3 class="text-3xl font-semibold hover:underline text-pink-400">Donate Grocerine</h3>
                    </a>
                    <p class="text-gray-700">Helping community-based organizations become locally sustainable</p>
                </div>
            </div>
        </div>
    </section> --}}


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
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">VIEW
                        DETAILS</button>
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
                                <p class="text-base leading-relaxed">Hunger is not a natural disaster but man-made one
                                    to a
                                    large
                                    extent. Hence, I feel, it is our duty to make India hunger-free. It was pleasant to
                                    know
                                    about the implementation of the Mid-Day Meal Programme by The Akshaya Patra
                                    Foundation.
                                    The modus operandi and functioning of this programme deeply touched my heart as I,
                                    at
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
                                    nothing short of inspiring. Their commitment to providing meals to millions of
                                    children
                                    across India is a testament to the power of dedication and compassion. I'm proud to
                                    be
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
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3" id="callingNewsData">
                    <!-- Update 1 -->
                    {{-- <a href="#" class="block">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <img src="https://www.akshayapatra.org/includefiles/news/News_Droupadi-Murmu_600x400_22.jpg"
                                alt="Update 1 Image" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <p class="text-blue-700 font-semibold">June 4, 2024</p>
                                <h2 class="text-xl font-bold text-gray-900 mb-2">Cargill and Akshaya Patra paint 1000 blackboards;
                                    set new Asia record</h2>
                                <span class="text-blue-500 hover:underline">Read More</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="block">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <img src="https://www.akshayapatra.org/includefiles/news/News_Droupadi-Murmu_600x400_22.jpg"
                                alt="Update 1 Image" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <p class="text-blue-700 font-semibold">June 4, 2024</p>
                                <h2 class="text-xl font-bold text-gray-900 mb-2">Cargill and Akshaya Patra paint 1000 blackboards;
                                    set new Asia record</h2>
                                <span class="text-blue-500 hover:underline">Read More</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="block">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <img src="https://www.akshayapatra.org/includefiles/news/News_Droupadi-Murmu_600x400_22.jpg"
                                alt="Update 1 Image" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <p class="text-blue-700 font-semibold">June 4, 2024</p>
                                <h2 class="text-xl font-bold text-gray-900 mb-2">Cargill and Akshaya Patra paint 1000 blackboards;
                                    set new Asia record</h2>
                                <span class="text-blue-500 hover:underline">Read More</span>
                            </div>
                        </div>
                    </a> --}}


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

        <script>
            $(document).ready(function() {
                // Function to fetch and display appointment
                let callingData = () => {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('heading-donating-event.index') }}",
                        success: function(response) {
                            let table = $("#headingDonatingEvent");
                            table.empty();
                            let data = response.data;

                            // Update appointment count
                            let len = data.length;
                            $("#counting").html(len);

                            data.forEach((data) => {
                                table.append(`
                            <div class="bg-white shadow-lg rounded-lg p-6 text-center" >
                                <img src="/donating-event/image/${data.image}" alt="${data.image}"
                                    class="mx-auto mb-4 w-32 h-32 rounded-full object-cover">
                                <h3 class="text-2xl font-bold text-blue-700">${data.title}</h3>
                                <p class="text-base font-medium text-red-600 mt-2">${data.description}.</p>
                                <a href="#" class="text-blue-500 font-semibold mt-2 block donate-btn" data-category="${data.message}">Donate Now</a>
                            </div>
                        `);
                            });

                            // Attach click event listeners to newly created donate buttons
                            $('.donate-btn').on('click', function(event) {
                                event.preventDefault();
                                const category = $(this).attr('data-category');
                                $('#modalTitle').text(
                                    `Donate on ${category} and become our member`);
                                $('#category').text(`Donate to: ${category}`);
                                $('#donating_for').val(`Donated on ${category}`);
                                $('#message').val(`Donating on ${category}`);
                                $('#donating-event').removeClass('hidden');
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                        }
                    });
                };

                // Call the data fetching function
                callingData();

                // Close the popup when the "Close" button is clicked
                $('#closeModal').on('click', function() {
                    $('#donating-event').addClass('hidden');
                });

                // Close the popup when clicking outside the modal
                $(window).on('click', function(event) {
                    if ($(event.target).is('#donating-event')) {
                        $('#donating-event').addClass('hidden');
                    }
                });

                // Insert donation details
                $(document).on('submit', '#addDonationData', function(e) {
                    e.preventDefault();
                    let formData = new FormData(this);

                    $.ajax({
                        type: "POST",
                        url: "{{ route('donation.store') }}",
                        data: formData,
                        dataType: "JSON",
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            swal("Success", response.message, "success");
                            $("#addDonationData").trigger("reset");
                            window.open("/", "_self");
                        },
                        error: function(xhr) {
                            $('.error-message').html('');
                            if (xhr.status === 422) {
                                var errors = xhr.responseJSON.errors;
                                $('.error-message').html(''); // Clear previous error messages
                                $.each(errors, function(key, value) {
                                    $('#error-' + key).html(value[0]).show();
                                });
                            } else {
                                alert('An error occurred. Please try again.');
                            }
                        }
                    });
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
                const foodMenu = document.getElementById('food_menu');
                const sweetsCheckbox = document.getElementById('sweets');
                const noOfPerson = document.getElementById('no_of_person');
                const amountInput = document.getElementById('amount');

                function calculateTotalAmount() {
                    const foodPrice = parseInt(foodMenu.value);
                    const sweetsPrice = sweetsCheckbox.checked ? parseInt(sweetsCheckbox.value) : 0;
                    const persons = parseInt(noOfPerson.value) || 0;

                    const totalAmount = (foodPrice + sweetsPrice) * persons;
                    amountInput.value = totalAmount;
                }

                foodMenu.addEventListener('change', calculateTotalAmount);
                sweetsCheckbox.addEventListener('change', calculateTotalAmount);
                noOfPerson.addEventListener('input', calculateTotalAmount);
            });
        </script>
        <script>
            $(document).ready(function() {
                // Function to fetch and display appointment
                let callingData = () => {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('news.home.all') }}",
                        success: function(response) {
                            let table = $("#callingNewsData");
                            table.empty();
                            let data = response.data;

                            let len = data.length;
                            $("#counting").html(len);

                            data.forEach((data, key) => {
                                // Format created date
                                let date = new Date(data.created_at);
                                let formattedDate = date.toLocaleDateString('en-US', {
                                    year: 'numeric',
                                    month: 'long',
                                    day: 'numeric'
                                });
                                table.append(`
                                 <a href="${data.link}" target='_blank' class="block">
                                    <div class="bg-white h-96 shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                                        <img src="/news/image/${data.image}"
                                            alt="${data.title}" class="w-full h-52 object-cover">
                                        <div class="p-4">
                                            <p class="text-blue-700 font-semibold">${formattedDate}</p>
                                            <h2 class="text-xl font-bold text-gray-900 mb-2">${data.title.substring(0, 100)}</h2>
                                            <span class="text-blue-500 hover:underline">Visit now</span>
                                        </div>
                                    </div>
                                </a>
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
          <script>
            $(document).ready(function() {
                // Function to fetch and display appointment
                let callingData = () => {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('home.heading.index') }}",
                        success: function(response) {
                            let table = $("#callingHeading");
                            table.empty();
                            let data = response.data;
                            data.forEach((data) => {
                                table.append(`
                                 <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <div class=" flex mt-6 absolute  w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                        <div class="w-1/2">
                                            <div class="relative">
                                                <img src="/heading/image/${data.image}" alt="${data.title}" class="w-full rounded shadow">
                                                <div class="absolute bottom-0 left-0 bg-red-600 text-white p-4 w-full text-center">
                                                    <span class="font-bold text-lg">Donate Now</span> to rebuild our Perishing Ancient
                                                    Temples
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-1/2 pl-6 mt-20">
                                            <h2 class="text-2xl font-bold text-gray-800 mb-4">${data.title} </h2>
                                            <p class="text-gray-600">${data.description}</p>
                                            <p class="text-red-500 mt-2">Bookings Closing in <span class="font-bold">${data.closing_date}</span></p>
                                            <div class="mt-4">
                                                <button class="bg-orange-500 text-white px-4 py-2 rounded shadow">
                                                    Donate Rs.${data.amount} Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    </section>
@endsection
