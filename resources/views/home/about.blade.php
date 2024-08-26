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
    <div class="max-w-7xl mx-auto  mt-[8.5rem]">
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

                <!-- View 2 (set of cards) -->
                {{-- <div class="flex flex-nowrap">
                <!-- Add more cards for the second view -->
                <div class="w-1/3 flex-shrink-0 p-4">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/sp-4.webp') }}" alt="Image 4" class="h-48 w-full object-cover">
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-800">Another Response</h2>
                            <p class="text-gray-600 mt-2">Description for the fourth card.</p>
                            <a href="#" class="text-blue-500 mt-4 inline-block">+ Read More</a>
                        </div>
                    </div>
                </div>

                <div class="w-1/3 flex-shrink-0 p-4">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/sp-5.webp') }}" alt="Image 5" class="h-48 w-full object-cover">
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-800">More Response</h2>
                            <p class="text-gray-600 mt-2">Description for the fifth card.</p>
                            <a href="#" class="text-blue-500 mt-4 inline-block">+ Read More</a>
                        </div>
                    </div>
                </div>

                <div class="w-1/3 flex-shrink-0 p-4">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/sp-6.webp') }}" alt="Image 6" class="h-48 w-full object-cover">
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-800">Yet Another Response</h2>
                            <p class="text-gray-600 mt-2">Description for the sixth card.</p>
                            <a href="#" class="text-blue-500 mt-4 inline-block">+ Read More</a>
                        </div>
                    </div>
                </div>
            </div> --}}

            </div>

            {{-- <!-- Previous Button -->
        <button id="prev"
            class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-red-600 text-white p-2 rounded-full">
            &#10094;
        </button>

        <!-- Next Button -->
        <button id="next"
            class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-red-600 text-white p-2 rounded-full">
            &#10095;
        </button> --}}
        </div>
    </div>

    <div class="max-w-6xl mx-auto bg-white p-10 rounded-lg shadow-lg mt-20 mb-20">
        <h2 class="text-2xl font-bold mb-4">FAQ Answered by Rahul Verma, Founder, Uday Foundation</h2>

        <div class="faq-item border-b border-gray-300 py-4">
            <div class="faq-question text-lg p-2 font-medium text-blue-600">
                <span class="mr-4">+</span>Please articulate the core idea of your work?
            </div>
            <div class="faq-answer mt-2 text-gray-700">
                The core idea of our work is to...
            </div>
        </div>

        <div class="faq-item border-b border-gray-300 py-4">
            <div class="faq-question text-lg p-2 font-medium text-blue-600">
                <span class="mr-4">+</span>What is the main social problem this idea is attempting to solve? What is the
                impact of the problem and why does it persist?
            </div>
            <div class="faq-answer mt-2 text-gray-700">
                The main social problem we are addressing is...
            </div>
        </div>

        <div class="faq-item border-b border-gray-300 py-4">
            <div class="faq-question text-lg p-2 font-medium text-blue-600">
                <span class="mr-4">+</span>What is the scale of the impact of your work to date?
            </div>
            <div class="faq-answer mt-2 text-gray-700">
                The scale of our impact to date includes...
            </div>
        </div>

        <div class="faq-item border-b border-gray-300 py-4">
            <div class="faq-question text-lg p-2 font-medium text-blue-600">
                <span class="mr-4">+</span>Why are you personally dedicated to the issue?
            </div>
            <div class="faq-answer mt-2 text-gray-700">
                I am personally dedicated to this issue because...
            </div>
        </div>

    </div>

    <div class="bg-white mt-20">
        <h2 class="text-2xl font-bold mb-6 px-10 py-12">SHORT STORY BEHIND UDAY FOUNDATION</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="text-left px-10">
                <p class="mb-4">Sometimes when you are dealing with a serious problem you watch the world wandering
                    happily
                    by and want to either a) cry b) <em>drown your sorrows</em> c) <em>say some rude words</em> or d)
                    <em>all of the above</em>, because it seems you are the only one in this sorry situation. Well, you are
                    not. Although there will be ups and downs you will come out the other side.
                </p>
                <p class="mb-4">In 2006 Arjunuday was born as a sibling to a healthy sister Lavanya. Tulika and Rahul
                    Verma
                    planned a second baby to give company to their daughter. It was a full term pregnancy without any
                    complications.</p>
                <p class="mb-4">The minute Arjunuday was born, the doctors found multiple congenital defects that
                    shattered
                    the dreams of the parents. They were devastated and could not understand why they were being punished in
                    this way. They had no choice but to accept the inevitable reality and decided to give him the best
                    possible medical care.</p>
            </div>
            <div class="text-left px-10">
                <p class="mb-4">Perhaps this is a penalty he has to pay for being born in a third world country. Yes, when
                    Arjunuday was only one hour old he had a price tag on his life. If parents paid the price, they can have
                    him, if not he has to go back to where he came from.</p>
                <p class="mb-4">Tulika and Rahul went through phases of self-pity, denial, mutual accusations and anger
                    towards the society, which was indifferent to their problems.</p>
                <p class="mb-4">After 9 correction surgeries and 11 hospital stays, Now Arjunuday is just another child of
                    his age but he cannot have voluntary bowel movements and requires an artificial mechanism to empty his
                    colon, a daily enema.</p>
                <p class="mb-4">Today, Rahul runs the foundation with the help of a dedicated team and Tulika continues
                    her job to support the family.</p>
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
