@extends('home.homeBase')
<style>
    /* Hide the modal initially */
    .hidden {
        display: none;
    }
</style>
@section('content')
    {{-- Carosel  --}}
    {{-- <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/sp-1.webp') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/sp-2.webp') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/sp-1.webp') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/sp-4.webp') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/sp-6.webp') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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

    <div class="max-w-7xl mx-auto mt-[8.5rem] mt-[8.5rem]">
        <h1 class="text-center text-3xl font-bold text-gray-800 mb-6">Our Story of Happiness through <span
                class="text-yellow-300">your support</span></h1>

        <div class="relative overflow-hidden">
            <!-- Carousel Wrapper -->
            <div id="carousel" class="flex transition-transform duration-500">

                <!-- View 1 (set of cards) -->
                <div class="grid grid-cols-4 gap-2 px-12 py-10">
                    <div class=" flex-shrink-0 p-4  ">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden h-[410px]">
                            <img src="{{ asset('images/sp-1.webp') }}" alt="Kothandaraman" class="h-48 w-full object-cover">
                            <div class="p-4 bg-yellow-300 h-full">
                                <h2 class="text-lg font-bold text-black">Kothandaraman, 66 years</h2>
                                <p class="text-black pt-2 text-sm">Used to work in Cuddalore district and suddenly lost
                                    vision in
                                    both of his eyes.</p>
                                <p class="text-red-500 font-semibold">On 27.06.2024</p>
                                <a href="#"
                                    class="text-blue-700 hover:text-blue-600 mt-4 inline-block view-details-btn">+ Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <div class=" flex-shrink-0 p-4">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden h-[410px]">
                            <img src="{{ asset('images/sp-2.webp') }}" alt="COVID19 Response"
                                class="h-48 w-full object-cover">
                            <div class="p-4 bg-yellow-300 h-full">
                                <h2 class="text-lg font-bold text-black">COVID19 Response</h2>
                                <p class="text-black pt-2 text-sm">With Elderly at a higher risk, our covid-19 response
                                    team ensures
                                    our elders are Essential Commodities Distribution.</p>
                                <p class="text-red-500 font-semibold">On 27.06.2024</p>
                                <a href="#" class="text-blue-700 hover:text-blue-600 mt-4 inline-block">+ Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <div class=" flex-shrink-0 p-4">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden  h-[410px]">
                            <img src="{{ asset('images/sp-3.webp') }}" alt="COVID19 Response"
                                class="h-48 w-full object-cover">
                            <div class="p-4 bg-yellow-300 h-full">
                                <h2 class="text-lg font-bold text-black">COVID19 Response</h2>
                                <p class="text-black pt-2 text-sm">With Elderly at a higher risk, our covid-19 response
                                    team ensures
                                    our elders are Essential Commodities Distribution.</p>
                                <p class="text-red-500 font-semibold">On 27.06.2024</p>
                                <a href="#" class="text-blue-700 hover:text-blue-600 mt-4 inline-block">+ Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class=" flex-shrink-0 p-4  ">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden h-[410px]">
                            <img src="{{ asset('images/sp-1.webp') }}" alt="Kothandaraman" class="h-48 w-full object-cover">
                            <div class="p-4 bg-yellow-300 h-full">
                                <h2 class="text-lg font-bold text-black">Kothandaraman, 66 years</h2>
                                <p class="text-black pt-2 text-sm">Used to work in Cuddalore district and suddenly lost
                                    vision in
                                    both of his eyes.</p>
                                <p class="text-red-500 font-semibold">On 27.06.2024</p>
                                <a href="#"
                                    class="text-blue-700 hover:text-blue-600 mt-4 inline-block view-details-btn">+ Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- pop up carosel  --}}

        <div id="popup-modal" class="hidden fixed z-20 inset-0 bg-black bg-opacity-50 flex justify-center items-center">
            <div class="bg-white p-6 shadow-lg max-w-xl w-full h-[650px] ">
                <button id="close-popup" class="rounded-lg duration-300 text-gray-500 float-right text-4xl"></button>
                <div id="default-carousel" class="relative w-full mt-4" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                <img src="{{ asset('images/sp-6.webp') }}" class="" alt="Image 1">
                                <p id="details-text" class="text-sm mt-4">
                                    This is where the details of MKDF will be displayed. Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit. Suscipit tempora architecto dolorem ipsam voluptatem excepturi aliquam
                                    cum, sapiente, ea
                                    voluptatum, ipsum accusantium ducimus labore nisi. Quod rerum blanditiis consequuntur
                                    asperiores.
                                </p>
                                <div class="flex justify-between mt-3">
                                    <p class="text-base text-green-700 font-semibold">By Abc Kumar</p>
                                    <button id="read-more" class="text-blue-500">Read more</button>
                                </div>
                            </div>
                        </div>
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                <img src="{{ asset('images/sp-4.webp') }}" class="" alt="Image 1">
                                <p id="details-text" class="text-sm mt-4">
                                    This is where the details of MKDF will be displayed. Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit. Suscipit tempora architecto dolorem ipsam voluptatem excepturi aliquam
                                    cum, sapiente, ea
                                    voluptatum, ipsum accusantium ducimus labore nisi. Quod rerum blanditiis consequuntur
                                    asperiores.
                                </p>
                                <div class="flex justify-between mt-3">
                                    <p class="text-base text-green-700 font-semibold">By Abc Kumar</p>
                                    <button id="read-more" class="text-blue-500">Read more</button>
                                </div>
                            </div>
                        </div>
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                <img src="{{ asset('images/sp-5.webp') }}" class="" alt="Image 1">
                                <p id="details-text" class="text-sm mt-4">
                                    This is where the details of MKDF will be displayed. Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit. Suscipit tempora architecto dolorem ipsam voluptatem excepturi aliquam
                                    cum, sapiente, ea
                                    voluptatum, ipsum accusantium ducimus labore nisi. Quod rerum blanditiis consequuntur
                                    asperiores.
                                </p>
                                <div class="flex justify-between mt-3">
                                    <p class="text-base text-green-700 font-semibold">By Abc Kumar</p>
                                    <button id="read-more" class="text-blue-500">Read more</button>
                                </div>
                            </div>
                        </div>
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                <img src="{{ asset('images/sp-3.webp') }}" class="" alt="Image 1">
                                <p id="details-text" class="text-sm mt-4">
                                    This is where the details of MKDF will be displayed. Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit. Suscipit tempora architecto dolorem ipsam voluptatem excepturi aliquam
                                    cum, sapiente, ea
                                    voluptatum, ipsum accusantium ducimus labore nisi. Quod rerum blanditiis consequuntur
                                    asperiores.
                                </p>
                                <div class="flex justify-between mt-3">
                                    <p class="text-base text-green-700 font-semibold">By Abc Kumar</p>
                                    <button id="read-more" class="text-blue-500">Read more</button>
                                </div>
                            </div>
                        </div>
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                <img src="{{ asset('images/sp-2.webp') }}" class="" alt="Image 1">
                                <p id="details-text" class="text-sm mt-4">
                                    This is where the details of MKDF will be displayed. Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit. Suscipit tempora architecto dolorem ipsam voluptatem excepturi aliquam
                                    cum, sapiente, ea
                                    voluptatum, ipsum accusantium ducimus labore nisi. Quod rerum blanditiis consequuntur
                                    asperiores.
                                </p>
                                <div class="flex justify-between mt-3">
                                    <p class="text-base text-green-700 font-semibold">By Abc Kumar</p>
                                    <button id="read-more" class="text-blue-500">Read more</button>
                                </div>
                            </div>
                        </div>
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                <img src="{{ asset('images/sp-4.webp') }}" class="" alt="Image 1">
                                <p id="details-text" class="text-sm mt-4">
                                    This is where the details of MKDF will be displayed. Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit. Suscipit tempora architecto dolorem ipsam voluptatem excepturi aliquam
                                    cum, sapiente, ea
                                    voluptatum, ipsum accusantium ducimus labore nisi. Quod rerum blanditiis consequuntur
                                    asperiores.
                                </p>
                                <div class="flex justify-between mt-3">
                                    <p class="text-base text-green-700 font-semibold">By Abc Kumar</p>
                                    <button id="read-more" class="text-blue-500">Read more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-yellow-400 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 bg-yellow-400 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="bg-gray-100 text-gray-800">
            <main class="container mx-auto px-6 py-12">
                <section class="mt-12 ">
                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3" id="callingData">
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class='text-center'>
                                <iframe width="100%" height="315"
                                    src="https://youtube.com/shorts/7DWmTPcfa3I?si=-ukoHuRyCcK_d3Je" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            {{-- <h3 class="mt-4 text-xl font-semibold text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, suscipit!</h3>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fuga iure dolorum. Possimus inventore dolores molestiae, ad quos magni velit ab enim reiciendis! Quis quas recusandae aliquid aliquam facere repellendus eos in placeat tempore eius saepe quidem sit inventore.</p> --}}
                            <a href="${video.link}" target="_blank" rel="noopener noreferrer"
                                class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class='text-center'>
                                <iframe width="100%" height="315"
                                    src="https://youtube.com/shorts/7DWmTPcfa3I?si=-ukoHuRyCcK_d3Je" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            {{-- <h3 class="mt-4 text-xl font-semibold text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, suscipit!</h3>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fuga iure dolorum. Possimus inventore dolores molestiae, ad quos magni velit ab enim reiciendis! Quis quas recusandae aliquid aliquam facere repellendus eos in placeat tempore eius saepe quidem sit inventore.</p> --}}
                            <a href="${video.link}" target="_blank" rel="noopener noreferrer"
                                class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class='text-center'>
                                <iframe width="100%" height="315"
                                    src="https://youtube.com/shorts/7DWmTPcfa3I?si=-ukoHuRyCcK_d3Je" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            {{-- <h3 class="mt-4 text-xl font-semibold text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, suscipit!</h3>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fuga iure dolorum. Possimus inventore dolores molestiae, ad quos magni velit ab enim reiciendis! Quis quas recusandae aliquid aliquam facere repellendus eos in placeat tempore eius saepe quidem sit inventore.</p> --}}
                            <a href="${video.link}" target="_blank" rel="noopener noreferrer"
                                class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class='text-center'>
                                <iframe width="100%" height="315"
                                    src="https://youtube.com/shorts/7DWmTPcfa3I?si=-ukoHuRyCcK_d3Je" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            {{-- <h3 class="mt-4 text-xl font-semibold text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, suscipit!</h3>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fuga iure dolorum. Possimus inventore dolores molestiae, ad quos magni velit ab enim reiciendis! Quis quas recusandae aliquid aliquam facere repellendus eos in placeat tempore eius saepe quidem sit inventore.</p> --}}
                            <a href="${video.link}" target="_blank" rel="noopener noreferrer"
                                class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class='text-center'>
                                <iframe width="100%" height="315"
                                    src="https://youtube.com/shorts/7DWmTPcfa3I?si=-ukoHuRyCcK_d3Je" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            {{-- <h3 class="mt-4 text-xl font-semibold text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, suscipit!</h3>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fuga iure dolorum. Possimus inventore dolores molestiae, ad quos magni velit ab enim reiciendis! Quis quas recusandae aliquid aliquam facere repellendus eos in placeat tempore eius saepe quidem sit inventore.</p> --}}
                            <a href="${video.link}" target="_blank" rel="noopener noreferrer"
                                class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class='text-center'>
                                <iframe width="100%" height="315"
                                    src="https://youtube.com/shorts/7DWmTPcfa3I?si=-ukoHuRyCcK_d3Je" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            {{-- <h3 class="mt-4 text-xl font-semibold text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, suscipit!</h3>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fuga iure dolorum. Possimus inventore dolores molestiae, ad quos magni velit ab enim reiciendis! Quis quas recusandae aliquid aliquam facere repellendus eos in placeat tempore eius saepe quidem sit inventore.</p> --}}
                            <a href="${video.link}" target="_blank" rel="noopener noreferrer"
                                class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                        </div>
                    </div>
                </section>
            </main>
        </div>

        <!-- Stats Section -->
        <section class="mb-20 bg-cover bg-center py-16"
            style="background-image: url('{{ asset('images/breadcrum-image.jpg') }}');">
            <div class="bg-black bg-opacity-50 py-8">
                <div class="grid grid-cols-4 gap-6 text-center text-white max-w-4xl mx-auto">
                    <div>
                        <h2 class="text-3xl font-bold">13</h2>
                        <p>Projects</p>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold">45</h2>
                        <p>Targets</p>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold">26</h2>
                        <p>Donations</p>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold">78</h2>
                        <p>Causes</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

        <script>
            $(document).ready(function() {
                // Function to fetch and display YouTube video data
                let fetchYouTubeData = () => {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('blog.index') }}", // Replace with your route to fetch YouTube video data
                        success: function(response) {
                            let card = $("#callingData");
                            card.empty();
                            let videos = response.data;
                            videos.forEach((video) => {
                                card.append(`
                            <div class="bg-white p-4 rounded-lg shadow-lg">
                                <div class='text-center'>
                                    <iframe width="100%" height="315" src="${getYouTubeEmbedUrl(video.link)}" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <h3 class="mt-4 text-xl font-semibold text-gray-900">${video.title}</h3>
                                <p class="mt-2 text-gray-600">${video.description}</p>
                                <a href="${video.link}" target="_blank" rel="noopener noreferrer" class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                            </div>
                        `);
                                console.log(getYouTubeEmbedUrl(video.link));
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                        }
                    });
                };

                // Function to get YouTube embed URL
                function getYouTubeEmbedUrl(link) {
                    let videoId = getYouTubeVideoId(link);
                    return `https://www.youtube.com/embed/${videoId}?autoplay=0&enablejsapi=1&controls=1&fs=1&rel=0&modestbranding=1&iv_load_policy=3`;
                }

                // Helper function to extract YouTube video ID
                function getYouTubeVideoId(url) {
                    if (url.includes('/shorts/')) {
                        // If URL contains '/shorts/', extract video ID from shorts link
                        let videoId = url.match(/\/shorts\/([a-zA-Z0-9_-]{11})/);
                        if (videoId) {
                            return videoId[1];
                        }
                    } else if (url.includes('youtu.be/')) {
                        // If URL contains 'youtu.be/', extract video ID from regular YouTube link
                        let videoId = url.match(/youtu\.be\/([a-zA-Z0-9_-]{11})/);
                        if (videoId) {
                            return videoId[1];
                        }
                    } else if (url.includes('/embed/')) {
                        // If URL contains '/embed/', extract video ID from embed link
                        let parts = url.split('/');
                        let videoId = parts[parts.length - 1];
                        return videoId;
                    } else {
                        // Default: extract video ID from regular YouTube link
                        let parts = url.split('/');
                        let videoId = parts[parts.length - 1];
                        return videoId;
                    }
                    return null; // Return null if no valid ID found
                }

                // Initial call to fetch YouTube data
                fetchYouTubeData();
            });
        </script>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const viewDetailsBtn = document.querySelector('.view-details-btn');
                const popupModal = document.getElementById('popup-modal');
                const closePopup = document.getElementById('close-popup');

                // Show the popup when the "View Details" button is clicked
                viewDetailsBtn.addEventListener('click', function() {
                    popupModal.classList.remove('hidden');
                });

                // Close the popup when the "Close" button is clicked
                closePopup.addEventListener('click', function() {
                    popupModal.classList.add('hidden');
                });

                // Close the popup when clicking outside the modal
                window.addEventListener('click', function(event) {
                    if (event.target === popupModal) {
                        popupModal.classList.add('hidden');
                    }
                });
            });
        </script>


        <script>
            // Toggle full text on "Read more" click
            document.getElementById('read-more').addEventListener('click', function() {
                const detailsText = document.getElementById('details-text');
                const readMoreButton = document.getElementById('read-more');

                if (detailsText.classList.contains('line-clamp-5')) {
                    detailsText.classList.remove('line-clamp-5');
                    readMoreButton.textContent = 'Read less';
                } else {
                    detailsText.classList.add('line-clamp-5');
                    readMoreButton.textContent = 'Read more';
                }
            });

            // Close the popup modal
            document.getElementById('close-popup').addEventListener('click', function() {
                document.getElementById('popup-modal').classList.add('hidden');
            });
        </script>

        <style>
            /* Tailwind's line-clamp classes can be added like this */
            .line-clamp-5 {
                display: -webkit-box;
                -webkit-line-clamp: 4;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        </style>
    @endsection
