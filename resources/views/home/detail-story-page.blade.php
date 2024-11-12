@extends('home.homeBase')
@section('content')
    <div class=" mx-10 p-4  mt-[8.5rem]">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-3">
                <h1 class="text-2xl font-bold text-gray-900 mb-6">
                    Kasiammal Case Story - Livelihoods


                </h1>
                <p class="mb-4">
                    Every day, eighty-year-old Kasiammal from Puducherry, can be found diligently making ‘agarbattis’ or ‘incense sticks’, which have helped transform her life. This art, her source of livelihood, has not only made her independent but has also improved the socio-economic condition of her family.
                </p>
                <p class="mb-4">
                    When it comes to used, torn, or broken (khandit) Hindu scriptures, we handle them with utmost
                    reverence. We organize collection drives and collaborate with local communities to ensure their
                    proper disposal. Our dedicated team ensures that these scriptures are respectfully cremated or
                    immersed in sacred rivers according to established traditions and customs.
                </p>

                <!-- Image and Second Paragraph -->
                <div class="grid grid-cols-1 gap-4 mb-6">
                    <img src="https://www.helpageindia.org/wp-content/uploads/2024/09/Kasiammal_Puducherry.jpg" alt="Religious Waste" class="w-full h-auto object-cover rounded shadow">
                    {{-- <p>
                        Year 2015, became a turning point in her life, when she came to know about HelpAge India, which had helped form an Elder-Self-Help-Group in her village and was empowering elderly women like her, making them self-reliant. She soon became one of the founding members of the ‘Jhansi-Rani-Elder-Self-Help-Group’, which has 15 other elderly women members. Today, she is part of HelpAge India’s Elder-Self-Help-Group family with over one lakh empowered elders across the country.
                    </p> --}}
                </div>

                <p class="mb-4">
                    However, life was not always so easy for Kasiammal, a mother to four daughters and a son, all married now. Her husband, a daily wage earner, died in 2019. Kasiammal worked as a contractual cook for thirty years in a government school before voluntarily retiring at the age of sixty-five, as it was getting physically difficult for her to continue. She wished to retire and enjoy her golden years, but her family’s financial situation demanded that she continue working to support her sons, daughter-in-law, and grandchildren. Today, she is financing her grandson’s education and is even saving money to buy a smartphone for him. Her son has been working in a local factory as a daily wage, but does not earn enough to feed his wife, mother, and son.
                </p>
            </div>

            <!-- Sidebar (Widgets/Links) -->
            <div class="lg:col-span-1 space-y-4">
                <a href="#" class="block p-4 bg-white shadow hover:bg-gray-50 rounded transition duration-150">
                    <div class="flex items-center space-x-4">
                        <img src="/images/sid5.webp" alt="Icon 1" class="w-12 h-12 object-cover rounded">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900">Spiritual Unity: Empowering Dharma Seekers
                            </h2>
                        </div>
                    </div>
                </a>
                <a href="#" class="block p-4 bg-white shadow hover:bg-gray-50 rounded transition duration-150">
                    <div class="flex items-center space-x-4">
                        <img src="/images/sid4.webp" alt="Icon 2" class="w-12 h-12 object-cover rounded">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900">Empowering Spiritual Communities</h2>
                        </div>
                    </div>
                </a>
                <a href="#" class="block p-4 bg-white shadow hover:bg-gray-50 rounded transition duration-150">
                    <div class="flex items-center space-x-4">
                        <img src="/images/sid3.webp" alt="Icon 3" class="w-12 h-12 object-cover rounded">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900">Empowering General Hindus</h2>
                        </div>
                    </div>
                </a>
                <a href="#" class="block p-4 bg-white shadow hover:bg-gray-50 rounded transition duration-150">
                    <div class="flex items-center space-x-4">
                        <img src="/images/sid2.webp" alt="Icon 4" class="w-12 h-12 object-cover rounded">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900">Global Support for Persecuted Hindus</h2>
                        </div>
                    </div>
                </a>
                <a href="#" class="block p-4 bg-white shadow hover:bg-gray-50 rounded transition duration-150">
                    <div class="flex items-center space-x-4">
                        <img src="/images/sid.webp" alt="Icon 5" class="w-12 h-12 object-cover rounded">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900">Restoring Self-Respect and Empowerment</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
