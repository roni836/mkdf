@extends('home.homeBase')
@section('content')


<div class=" py-8 max-w-full md:mx-14 mt-[8.5rem] ">
    <!-- Content Area -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Main Content -->
        <div class="lg:col-span-3">
            <h1 class="text-2xl font-bold text-gray-900 mb-6">
                At <span class="text-purple-600">Hindu Samman Foundation</span>, we are committed to the respectful
                disposal of religious wastes.
            </h1>
            <p class="mb-4">
                We understand the sanctity and significance of Hindu scriptures, photos of Devi Devatas, and
                festival-related items. Our aim is to protect their sanctity while raising awareness among the
                general masses about the importance of proper disposal.
            </p>
            <p class="mb-4">
                When it comes to used, torn, or broken (khandit) Hindu scriptures, we handle them with utmost
                reverence. We organize collection drives and collaborate with local communities to ensure their
                proper disposal. Our dedicated team ensures that these scriptures are respectfully cremated or
                immersed in sacred rivers according to established traditions and customs.
            </p>

            <!-- Image and Second Paragraph -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <img src="/images/hin1.webp" alt="Religious Waste" class="w-full h-auto object-cover rounded shadow">
                <p>
                    Similarly, we address the issue of photos of Devi Devatas and other divine beings that are often
                    found discarded in inappropriate places. We educate people about the significance of these
                    images and the need for their proper disposal. We encourage individuals to bring such photos to
                    us, and we ensure they are respectfully immersed or disposed of in a designated manner.
                </p>
            </div>

            <p class="mb-4">
                During festivals, we actively promote responsible waste management. We raise awareness among
                devotees about the proper disposal of festival-related items, such as decorations, flowers, and
                offerings. We collaborate with local authorities to set up designated collection points and
                facilitate their proper disposal through environmentally friendly methods.
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
    <div class="bg-white mt-20">
        <h2 class="text-2xl font-bold mb-6 px-10 py-12">SHORT STORY BEHIND MKDF FOUNDATION</h2>
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
                <p class="mb-4">Perhaps this is a penalty he has to pay for being born in a third world country. Yes,
                    when
                    Arjunuday was only one hour old he had a price tag on his life. If parents paid the price, they can have
                    him, if not he has to go back to where he came from.</p>
                <p class="mb-4">Tulika and Rahul went through phases of self-pity, denial, mutual accusations and anger
                    towards the society, which was indifferent to their problems.</p>
                <p class="mb-4">After 9 correction surgeries and 11 hospital stays, Now Arjunuday is just another child
                    of
                    his age but he cannot have voluntary bowel movements and requires an artificial mechanism to empty his
                    colon, a daily enema.</p>
                <p class="mb-4">Today, Rahul runs the foundation with the help of a dedicated team and Tulika continues
                    her job to support the family.</p>
            </div>
        </div>
    </div>
</div>




@endsection