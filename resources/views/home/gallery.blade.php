@extends('home.homeBase')
<style>
    /* Hide the modal initially */
    .hidden {
        display: none;
    }
</style>
@section('content')
    <!-- Header Section -->
    {{-- <section class="text-center py-16 bg-white">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold mb-4">Hello. Our company has been present for over 20 years in the world.</h1>
            <p class="text-2xl">We make the best to help everyone.</p>
        </div>
    </section> --}}

    <!-- Team Section -->
    {{-- <section class="flex justify-center space-x-4 py-10">
    <div class="text-center">
        <img class="w-48 h-48 rounded-full object-cover" src="https://via.placeholder.com/150" alt="Phoebe Allen">
        <h2 class="text-lg font-bold mt-4">Phoebe Allen</h2>
        <p class="text-gray-500">Organizer</p>
    </div>
    <div class="text-center">
        <img class="w-48 h-48 rounded-full object-cover" src="https://via.placeholder.com/150" alt="Christina Lewis">
        <h2 class="text-lg font-bold mt-4">Christina Lewis</h2>
        <p class="text-gray-500">Coordinator</p>
    </div>
</section> --}}

<div class="max-w-7xl mx-auto mt-10">
    <h1 class="text-center text-3xl font-bold text-gray-800 mb-6">Our Story of Happiness through <span
            class="text-yellow-500">your support</span></h1>

    <div class="relative overflow-hidden">
        <!-- Carousel Wrapper -->
        <div id="carousel" class="flex transition-transform duration-500">

            <!-- View 1 (set of cards) -->
            <div  class="grid grid-cols-4 gap-2 px-12 py-10">
                <div class=" flex-shrink-0 p-4  ">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden h-[410px]">
                        <img src="{{ asset('images/sp-1.webp') }}" alt="Kothandaraman" class="h-48 w-full object-cover">
                        <div class="p-4 bg-yellow-500 h-full">
                            <h2 class="text-lg font-bold text-black">Kothandaraman, 66 years</h2>
                            <p class="text-black pt-2 text-sm">Used to work in Cuddalore district and suddenly lost vision in
                                both of his eyes.</p>
                            <p class="text-red-500 font-semibold">On 27.06.2024</p>
                            <a href="#" class="text-blue-700 hover:text-blue-600 mt-4 inline-block view-details-btn">+ Read
                                More</a>
                        </div>
                    </div>
                </div>

                <div class=" flex-shrink-0 p-4">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden h-[410px]">
                        <img src="{{ asset('images/sp-2.webp') }}" alt="COVID19 Response"
                            class="h-48 w-full object-cover">
                        <div class="p-4 bg-yellow-500 h-full">
                            <h2 class="text-lg font-bold text-black">COVID19 Response</h2>
                            <p class="text-black pt-2 text-sm">With Elderly at a higher risk, our covid-19 response team ensures
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
                        <div class="p-4 bg-yellow-500 h-full">
                            <h2 class="text-lg font-bold text-black">COVID19 Response</h2>
                            <p class="text-black pt-2 text-sm">With Elderly at a higher risk, our covid-19 response team ensures
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
                        <div class="p-4 bg-yellow-500 h-full">
                            <h2 class="text-lg font-bold text-black">Kothandaraman, 66 years</h2>
                            <p class="text-black pt-2 text-sm">Used to work in Cuddalore district and suddenly lost vision in
                                both of his eyes.</p>
                            <p class="text-red-500 font-semibold">On 27.06.2024</p>
                            <a href="#" class="text-blue-700 hover:text-blue-600 mt-4 inline-block view-details-btn">+ Read
                                More</a>
                        </div>
                    </div>
                </div>

                <div class=" flex-shrink-0 p-4">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden h-[410px]">
                        <img src="{{ asset('images/sp-2.webp') }}" alt="COVID19 Response"
                            class="h-48 w-full object-cover">
                        <div class="p-4 bg-yellow-500 h-full">
                            <h2 class="text-lg font-bold text-black">COVID19 Response</h2>
                            <p class="text-black pt-2 text-sm">With Elderly at a higher risk, our covid-19 response team ensures
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
                        <div class="p-4 bg-yellow-500 h-full">
                            <h2 class="text-lg font-bold text-black">COVID19 Response</h2>
                            <p class="text-black pt-2 text-sm">With Elderly at a higher risk, our covid-19 response team ensures
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
                        <div class="p-4 bg-yellow-500 h-full">
                            <h2 class="text-lg font-bold text-black">Kothandaraman, 66 years</h2>
                            <p class="text-black pt-2 text-sm">Used to work in Cuddalore district and suddenly lost vision in
                                both of his eyes.</p>
                            <p class="text-red-500 font-semibold">On 27.06.2024</p>
                            <a href="#" class="text-blue-700 hover:text-blue-600 mt-4 inline-block view-details-btn">+ Read
                                More</a>
                        </div>
                    </div>
                </div>

                <div class=" flex-shrink-0 p-4">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden h-[410px]">
                        <img src="{{ asset('images/sp-2.webp') }}" alt="COVID19 Response"
                            class="h-48 w-full object-cover">
                        <div class="p-4 bg-yellow-500 h-full">
                            <h2 class="text-lg font-bold text-black">COVID19 Response</h2>
                            <p class="text-black pt-2 text-sm">With Elderly at a higher risk, our covid-19 response team ensures
                                our elders are Essential Commodities Distribution.</p>
                                <p class="text-red-500 font-semibold">On 27.06.2024</p>
                            <a href="#" class="text-blue-700 hover:text-blue-600 mt-4 inline-block">+ Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

    <!-- Gallery Image Section -->
    <section class="grid grid-cols-5 gap-2 px-12 py-10">
        <div class="group relative">
            <img class="w-full object-cover h-56" src="images/don3.webp" />
            <div
                class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-black bg-opacity-50 opacity-0 group-hover:h-full group-hover:opacity-100 duration-500">
                <h1 class="text-2xl text-white">Date: 21.05.2024</h1>
                <button class="mt-5 px-4 py-1 rounded-lg bg-amber-400 hover:bg-amber-600 duration-300 view-details-btn">View
                    Details</button>
            </div>
        </div>

        <!-- Popup Modal -->
        <div id="popup-modal" class="hidden fixed z-20 inset-0 bg-black bg-opacity-50 flex justify-center items-center ">
            <div class="bg-white pl-6 pb-6 pr-2  shadow-lg max-w-md w-full h-[500px]  overflow-y-scroll">
                <button id="close-popup"
                    class=" rounded-lg duration-300 text-gray-500 float-right text-4xl">&times;</button>
                {{-- <h2 class="text-xl font-bold mb-4">Viewing Details </h2> --}}
                <a href="images/don3.webp" target="_blank" class="inline-block w-full object-cover h-60">
                    <img src="images/don3.webp" class="w-full object-cover h-60" alt="Form Thumbnail">
                </a>
                {{-- <img class="w-full object-cover h-60" src="images/don3.webp" /> --}}
                <p id="details-text" class="text-sm line-clamp-5 overflow-hidden mt-4">
                    This is where the details of MKDF will be displayed. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Suscipit tempora architecto dolorem ipsam voluptatem excepturi aliquam cum, sapiente, ea
                    voluptatum, ipsum accusantium ducimus labore nisi. Quod rerum blanditiis consequuntur asperiores maiores
                    eius nobis delectus molestias esse, labore harum, voluptatem ea. Nemo quia earum repellat accusamus
                    accusantium! Nulla optio tempora similique tempore quae vitae quo vero, ea nam mollitia fugiat commodi
                    adipisci nemo rerum doloremque, est ullam deserunt iusto fugit blanditiis iste, molestiae sequi? Ipsa
                    eius adipisci facere illum neque fugit repudiandae doloribus porro totam accusamus ratione itaque, sint
                    impedit temporibus corporis iure, rerum sequi dolores laboriosam reprehenderit quibusdam. Quas, numquam!
                </p>
                <div class="down flex justify-between mt-3">
                    <p class="text-base text-green-700 font-semibold">By Abc Kumar</p>
                    <button id="read-more" class="text-blue-500">Read more</button>
                </div>
            </div>
        </div>


        <div class="group relative">
            <img class="w-full object-cover h-56" src="images/don4.webp" />
            <div
                class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-black bg-opacity-50 opacity-0 group-hover:h-full group-hover:opacity-100 duration-500">
                <h1 class="text-2xl text-white">MKDF</h1>
                <button class="mt-5 px-4 py-1 rounded-lg bg-amber-400 hover:bg-amber-600 duration-300 view-details-btn">View
                    Details</button>
            </div>
        </div>

        <!-- Popup Modal -->
        <div id="popup-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center ">
            <div class="bg-white pl-6 pb-6 pr-2  shadow-lg max-w-md w-full h-[500px]  overflow-y-scroll">
                <button id="close-popup"
                    class=" rounded-lg duration-300 text-gray-500 float-right text-4xl">&times;</button>
                {{-- <h2 class="text-xl font-bold mb-4">Viewing Details </h2> --}}
                <img class="w-full object-cover h-60" src="images/don4.webp" />
                <p id="details-text" class="text-sm line-clamp-5 overflow-hidden mt-4">
                    This is where the details of MKDF will be displayed. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Suscipit tempora architecto dolorem ipsam voluptatem excepturi aliquam cum, sapiente, ea
                    voluptatum, ipsum accusantium ducimus labore nisi. Quod rerum blanditiis consequuntur asperiores maiores
                    eius nobis delectus molestias esse, labore harum, voluptatem ea. Nemo quia earum repellat accusamus
                    accusantium! Nulla optio tempora similique tempore quae vitae quo vero, ea nam mollitia fugiat commodi
                    adipisci nemo rerum doloremque, est ullam deserunt iusto fugit blanditiis iste, molestiae sequi? Ipsa
                    eius adipisci facere illum neque fugit repudiandae doloribus porro totam accusamus ratione itaque, sint
                    impedit temporibus corporis iure, rerum sequi dolores laboriosam reprehenderit quibusdam. Quas, numquam!
                </p>
                <div class="down flex justify-between mt-3">
                    <p class="text-base text-green-700 font-semibold">By Abc Kumar</p>
                    <button id="read-more" class="text-blue-500">Read more</button>
                </div>
            </div>
        </div>
        <div class="group relative">
            <img class="w-full object-cover h-56" src="images/don3.webp" />
            <div
                class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-black bg-opacity-50 opacity-0 group-hover:h-full group-hover:opacity-100 duration-500">
                <h1 class="text-2xl text-white">MKDF</h1>
                <button class="mt-5 px-4 py-1 rounded-lg bg-amber-400 hover:bg-amber-600 duration-300 view-details-btn">View
                    Details</button>
            </div>
        </div>

        <!-- Popup Modal -->
        <div id="popup-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center ">
            <div class="bg-white pl-6 pb-6 pr-2  shadow-lg max-w-md w-full h-[500px]  overflow-y-scroll">
                <button id="close-popup"
                    class=" rounded-lg duration-300 text-gray-500 float-right text-4xl">&times;</button>
                {{-- <h2 class="text-xl font-bold mb-4">Viewing Details </h2> --}}
                <img class="w-full object-cover h-60" src="images/don5.webp" />
                <p id="details-text" class="text-sm line-clamp-5 overflow-hidden mt-4">
                    This is where the details of MKDF will be displayed. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Suscipit tempora architecto dolorem ipsam voluptatem excepturi aliquam cum, sapiente, ea
                    voluptatum, ipsum accusantium ducimus labore nisi. Quod rerum blanditiis consequuntur asperiores maiores
                    eius nobis delectus molestias esse, labore harum, voluptatem ea. Nemo quia earum repellat accusamus
                    accusantium! Nulla optio tempora similique tempore quae vitae quo vero, ea nam mollitia fugiat commodi
                    adipisci nemo rerum doloremque, est ullam deserunt iusto fugit blanditiis iste, molestiae sequi? Ipsa
                    eius adipisci facere illum neque fugit repudiandae doloribus porro totam accusamus ratione itaque, sint
                    impedit temporibus corporis iure, rerum sequi dolores laboriosam reprehenderit quibusdam. Quas, numquam!
                </p>
                <div class="down flex justify-between mt-3">
                    <p class="text-base text-green-700 font-semibold">By Abc Kumar</p>
                    <button id="read-more" class="text-blue-500">Read more</button>
                </div>
            </div>
        </div>
        <div class="group relative">
            <img class="w-full object-cover h-56" src="images/don6.webp" />
            <div
                class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-black bg-opacity-50 opacity-0 group-hover:h-full group-hover:opacity-100 duration-500">
                <h1 class="text-2xl text-white">MKDF</h1>
                <button class="mt-5 px-4 py-1 rounded-lg bg-amber-400 hover:bg-amber-600 duration-300 view-details-btn">View
                    Details</button>
            </div>
        </div>

        <!-- Popup Modal -->
        <div id="popup-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center ">
            <div class="bg-white pl-6 pb-6 pr-2  shadow-lg max-w-md w-full h-[500px]  overflow-y-scroll">
                <button id="close-popup"
                    class=" rounded-lg duration-300 text-gray-500 float-right text-4xl">&times;</button>
                {{-- <h2 class="text-xl font-bold mb-4">Viewing Details </h2> --}}
                <img class="w-full object-cover h-60" src="images/don3.webp" />
                <p id="details-text" class="text-sm line-clamp-5 overflow-hidden mt-4">
                    This is where the details of MKDF will be displayed. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Suscipit tempora architecto dolorem ipsam voluptatem excepturi aliquam cum, sapiente, ea
                    voluptatum, ipsum accusantium ducimus labore nisi. Quod rerum blanditiis consequuntur asperiores maiores
                    eius nobis delectus molestias esse, labore harum, voluptatem ea. Nemo quia earum repellat accusamus
                    accusantium! Nulla optio tempora similique tempore quae vitae quo vero, ea nam mollitia fugiat commodi
                    adipisci nemo rerum doloremque, est ullam deserunt iusto fugit blanditiis iste, molestiae sequi? Ipsa
                    eius adipisci facere illum neque fugit repudiandae doloribus porro totam accusamus ratione itaque, sint
                    impedit temporibus corporis iure, rerum sequi dolores laboriosam reprehenderit quibusdam. Quas, numquam!
                </p>
                <div class="down flex justify-between mt-3">
                    <p class="text-base text-green-700 font-semibold">By Abc Kumar</p>
                    <button id="read-more" class="text-blue-500">Read more</button>
                </div>
            </div>
        </div>
        <div class="group relative">
            <img class="w-full object-cover h-56" src="images/don7.webp" />
            <div
                class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-black bg-opacity-50 opacity-0 group-hover:h-full group-hover:opacity-100 duration-500">
                <h1 class="text-2xl text-white">MKDF</h1>
                <button class="mt-5 px-4 py-1 rounded-lg bg-amber-400 hover:bg-amber-600 duration-300 view-details-btn">View
                    Details</button>
            </div>
        </div>

        <!-- Popup Modal -->
        <div id="popup-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center ">
            <div class="bg-white pl-6 pb-6 pr-2  shadow-lg max-w-md w-full h-[500px]  overflow-y-scroll">
                <button id="close-popup"
                    class=" rounded-lg duration-300 text-gray-500 float-right text-4xl">&times;</button>
                {{-- <h2 class="text-xl font-bold mb-4">Viewing Details </h2> --}}
                <img class="w-full object-cover h-60" src="images/don3.webp" />
                <p id="details-text" class="text-sm line-clamp-5 overflow-hidden mt-4">
                    This is where the details of MKDF will be displayed. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Suscipit tempora architecto dolorem ipsam voluptatem excepturi aliquam cum, sapiente, ea
                    voluptatum, ipsum accusantium ducimus labore nisi. Quod rerum blanditiis consequuntur asperiores maiores
                    eius nobis delectus molestias esse, labore harum, voluptatem ea. Nemo quia earum repellat accusamus
                    accusantium! Nulla optio tempora similique tempore quae vitae quo vero, ea nam mollitia fugiat commodi
                    adipisci nemo rerum doloremque, est ullam deserunt iusto fugit blanditiis iste, molestiae sequi? Ipsa
                    eius adipisci facere illum neque fugit repudiandae doloribus porro totam accusamus ratione itaque, sint
                    impedit temporibus corporis iure, rerum sequi dolores laboriosam reprehenderit quibusdam. Quas, numquam!
                </p>
                <div class="down flex justify-between mt-3">
                    <p class="text-base text-green-700 font-semibold">By Abc Kumar</p>
                    <button id="read-more" class="text-blue-500">Read more</button>
                </div>
            </div>
        </div>
        <div class="group relative">
            <img class="w-full object-cover h-56" src="images/don9.webp" />
            <div
                class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-black bg-opacity-50 opacity-0 group-hover:h-full group-hover:opacity-100 duration-500">
                <h1 class="text-2xl text-white">MKDF</h1>
                <button
                    class="mt-5 px-4 py-1 rounded-lg bg-amber-400 hover:bg-amber-600 duration-300 view-details-btn">View
                    Details</button>
            </div>
        </div>
        <div class="group relative">
            <img class="w-full object-cover h-56" src="images/don10.webp" />
            <div
                class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-black bg-opacity-50 opacity-0 group-hover:h-full group-hover:opacity-100 duration-500">
                <h1 class="text-2xl text-white">MKDF</h1>
                <button
                    class="mt-5 px-4 py-1 rounded-lg bg-amber-400 hover:bg-amber-600 duration-300 view-details-btn">View
                    Details</button>
            </div>
        </div>
        <div class="group relative">
            <img class="w-full object-cover h-56" src="images/don11.webp" />
            <div
                class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-black bg-opacity-50 opacity-0 group-hover:h-full group-hover:opacity-100 duration-500">
                <h1 class="text-2xl text-white">MKDF</h1>
                <button
                    class="mt-5 px-4 py-1 rounded-lg bg-amber-400 hover:bg-amber-600 duration-300 view-details-btn">View
                    Details</button>
            </div>
        </div>
        <div class="group relative">
            <img class="w-full object-cover h-56" src="images/don1.webp" />
            <div
                class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-black bg-opacity-50 opacity-0 group-hover:h-full group-hover:opacity-100 duration-500">
                <h1 class="text-2xl text-white">MKDF</h1>
                <button
                    class="mt-5 px-4 py-1 rounded-lg bg-amber-400 hover:bg-amber-600 duration-300 view-details-btn">View
                    Details</button>
            </div>
        </div>
        <div class="group relative">
            <img class="w-full object-cover h-56" src="images/don2.webp" />
            <div
                class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-black bg-opacity-50 opacity-0 group-hover:h-full group-hover:opacity-100 duration-500">
                <h1 class="text-2xl text-white">MKDF</h1>
                <button
                    class="mt-5 px-4 py-1 rounded-lg bg-amber-400 hover:bg-amber-600 duration-300 view-details-btn">View
                    Details</button>
            </div>
        </div>


    </section>






    <div class="bg-gray-100 text-gray-800">
        <main class="container mx-auto px-6 py-12">
            {{-- <section class="text-center">
            <h2 class="text-4xl font-semibold text-gray-900">Our Gallery</h2>
            <p class="mt-4 text-lg text-gray-600">Explore our latest articles.
            </p>
        </section> --}}

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
