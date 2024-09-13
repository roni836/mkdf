@extends('home.homeBase')
@section('content')
    <div class=" mx-10 p-4  mt-[8.5rem]">
        <!-- Header -->
        {{-- <header class="flex items-center justify-between bg-yellow-50 p-4 rounded">
            <div class="flex items-center">
                <img src="/images/tem1." alt="Logo"  height="100px">
                <h1 class="text-xl font-bold text-red-600 ml-4">Renovate Ancient Temples to Protect Sanatana Dharma</h1>
            </div>
            <div>
                <button class="bg-red-500 text-white px-4 py-2 rounded shadow">
                    Donate Now
                </button>
            </div>
        </header> --}}

        <!-- Main Container -->
        

        <!-- Main Content -->


        <div id="controls-carousel" class="relative w-full z-0" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
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
        </div>

        {{-- <div class="flex mt-6">
            <div class="w-1/2">
                <div class="relative">
                    <img src="/images/tem1.webp" alt="Ancient Temples" class="w-full rounded shadow">
                    <div class="absolute bottom-0 left-0 bg-red-600 text-white p-4 w-full text-center">
                        <span class="font-bold text-lg">Donate Now</span> to rebuild our Perishing Ancient Temples
                    </div>
                </div>
            </div>

            <div class="w-1/2 pl-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4"> Renovate Ancient Temples to Protect Sanatana Dharma.
                    Donate to preserve our Sacred Religious Heritage </h2>
                <p class="text-gray-600">Event: Save Ancient Temples</p>
                <p class="text-red-500 mt-2">Bookings Closing in <span class="font-bold">3 months</span></p>
                <div class="mt-4">
                    <button class="bg-orange-500 text-white px-4 py-2 rounded shadow">
                        Book Now
                    </button>
                </div>
            </div>
        </div> --}}

        <div class="bg-gray-50 py-10">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold mb-4">Hindu Samman Foundation</h1>
                <p class="text-lg text-gray-600">
                    Welcome to <span class="font-semibold">Hindu Samman Foundation</span>, a place where compassion meets
                    purpose and where the welfare of people of Indian origin is at the heart of everything we do. We invite
                    you to embark on a transformative journey with us as we work tirelessly to create a brighter future for
                    all.
                </p>
            </div>
            <div class="flex flex-wrap justify-center gap-4">
                <div class="bg-white shadow-lg p-6 rounded-md text-center w-56">
                    <h2 class="text-red-600 font-bold text-xl mb-2">Swabhiman</h2>
                    <p class="text-gray-600">To protect and invest in their self-esteem</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-md text-center w-56">
                    <h2 class="text-red-600 font-bold text-xl mb-2">Parakram</h2>
                    <p class="text-gray-600">To be gallant and courageous.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-md text-center w-56">
                    <h2 class="text-red-600 font-bold text-xl mb-2">Parishram</h2>
                    <p class="text-gray-600">To be hardworking and persevering.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-md text-center w-56">
                    <h2 class="text-red-600 font-bold text-xl mb-2">Samriddhi</h2>
                    <p class="text-gray-600">To strive for prosperity.</p>
                </div>
            </div>
        </div>


        <div class="bg-white py-10">
            <div class="text-center mb-4">
                <h2 class="text-2xl font-bold">Chitra Sakhi Mandir,</h2>
                <p class="text-lg text-gray-600">Gaon Chiksoli, Barsana</p>
            </div>
            <div class="flex justify-center items-start">
                <!-- Before Section -->
                <div class="w-1/2 p-2">
                    <div class="relative">
                        <div class="absolute top-0 left-0 w-full bg-red-700 text-white text-center py-1">
                            BEFORE
                        </div>
                        <img src="/images/tem3.jpg" alt="Before Image" class="w-full mt-8">
                    </div>
                </div>
                <!-- After Section -->
                <div class="w-1/2 p-2">
                    <div class="relative">
                        <div class="absolute top-0 left-0 w-full bg-red-700 text-white text-center py-1">
                            AFTER
                        </div>
                        <img src="/images/tem2.jpg" alt="After Image" class="w-full mt-8">
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-8 mx-auto">
            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-semibold text-center mb-12">3 Ways You Can Help Restore Temples & Protect
                Dharma</h2>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Card 1 -->
                <div class="bg-gray-800 text-gray-200 p-8 rounded-lg shadow-lg text-center">
                    <h3 class="text-2xl font-bold mb-4">Step 1. Donate</h3>
                    <p class="mb-6">Show your support by making a one-time or recurring donation. Behind Every Temple is
                        an officially recognized 501c3 Non-Profit Organization.</p>
                    <button class="bg-yellow-400 text-gray-900 font-semibold py-2 px-4 rounded-full">Donate Now</button>
                </div>

                <!-- Card 2 -->
                <div class="bg-gray-800 text-gray-200 p-8 rounded-lg shadow-lg text-center">
                    <h3 class="text-2xl font-bold mb-4">Step 2. Shop</h3>
                    <p class="mb-6">Purchase all your pooja supplies, malas, murtis, and more through our online store.
                        100% of all profits go to renovating ancient temples in Tamil Nadu.</p>
                    <button class="bg-yellow-400 text-gray-900 font-semibold py-2 px-4 rounded-full">Shop Now</button>
                </div>

                <!-- Card 3 -->
                <div class="bg-gray-800 text-gray-200 p-8 rounded-lg shadow-lg text-center">
                    <h3 class="text-2xl font-bold mb-4">Step 3. Subscribe & Share</h3>
                    <p class="mb-6">Subscribe to our mailing list and stay informed on the latest updates on the temple
                        renovations. And please share our content across social media.</p>
                    <button class="bg-yellow-400 text-gray-900 font-semibold py-2 px-4 rounded-full">Sign Up</button>
                </div>

            </div>
        </div>


    </div>
@endsection
