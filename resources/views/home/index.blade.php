@extends('home.homeBase')
@section('content')
  <!-- Hero Section -->
  <section class="relative">
    <img src="{{ asset('logo/cimg1.jpg') }}" alt="Hero Image" class="w-full h-[500px] object-cover">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center text-white">
        <h1 class="text-4xl font-bold">Bringing Smiles Through Education & Empowerment</h1>
        <a href="#" class="mt-4 bg-green-500 text-white py-2 px-4 rounded">Know More</a>
    </div>
</section>


<div class="max-w-6xl mx-auto py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <img src="images/don1.webp" alt="Donate Dry Ration" class="mx-auto mb-4 w-32 h-32 rounded-full object-cover">
            <h3 class="text-2xl font-bold text-blue-700">Donate Dry Ration</h3>
            <p class="text-base font-medium text-red-600 mt-2">Help the Needy: Donate Dry Ration Kits Including Wheat Flour, Rice, Dal, Salt, Oil, Sugar, Chilli Powder, and More!</p>
            <a href="#" class="text-blue-500 font-semibold mt-2 block">Learn More</a>
        </div>
        
        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <img src="images/don2.webp" alt="Death Anniversary Food Donation" class="mx-auto mb-4 w-32 h-32 rounded-full object-cover">
            <h3 class="text-2xl font-bold text-blue-700">Death Anniversary Food Donation</h3>
            <p class="text-base font-medium text-red-600 mt-2">Donate Food on a Death Anniversary: Meaningful Remembrances for Your Loved Ones.</p>
            <a href="#" class="text-blue-500 font-semibold mt-2 block">Learn More</a>
        </div>
        
        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <img src="images/don3.webp" alt="Birthdays Food Donation" class="mx-auto mb-4 w-32 h-32 rounded-full object-cover">
            <h3 class="text-2xl font-bold text-blue-700">Birthdays Food Donation</h3>
            <p class="text-base font-medium text-red-600 mt-2">Nourish Lives on Special Occasions: Celebrate Birthdays and Make a Difference.</p>
            <a href="#" class="text-blue-500 font-semibold mt-2 block">Learn More</a>
        </div>

    </div>
</div>

<!-- Our Programmes Section -->
<section class="container mx-auto my-12 px-4 mt-20">
    <h2 class="text-4xl font-bold text-center mb-8">Our Programmes</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="flex items-center">
            <img src="{{ asset('images/pimg.jpg') }}" alt="Education" class="w-20 h-20 mr-4 object-cover">
            <div><a href="">
                <h3 class="text-3xl font-semibold hover:underline text-orange-400">Medicine</h3></a>
                <p class="text-gray-700">Left over medicine to cure and holistic development.</p>
            </div>
        </div>
        <div class="flex items-center">
            <img src="{{ asset('images/pimg-1.jpg') }}" alt="Healthcare" class="w-20 h-20 mr-4 object-cover">
            <div>
                <a href=""><h3 class="text-3xl font-semibold hover:underline text-blue-400">Competitive Books</h3></a>
                <p class="text-gray-700">Taking healthcare services to doorsteps of hard to reach communities</p>
            </div>
        </div>
        <div class="flex items-center">
            <img src="{{ asset('images/pimg2.jpg') }}" alt="Women Empowerment" class="w-20 h-20 mr-4 object-cover">
            <div>
                <a href=""><h3 class="text-3xl font-semibold hover:underline text-green-500">People Feeding</h3></a>
                <p class="text-gray-700">Left over foods for donation support for underprivileged youth</p>
            </div>
        </div>
        <div class="flex items-center">
            <img src="{{ asset('images/pimg3.jpg') }}" alt="Livelihood" class="w-20 h-20 mr-4 object-cover">
            <div>
                <a href=""><h3 class="text-3xl font-semibold hover:underline text-yellow-400">Donation in Kind</h3></a>
                <p class="text-gray-700">Skill training and placement support for underprivileged youth</p>
            </div>
        </div>
        <div class="flex items-center">
            <img src="{{ asset('images/pimg4.jpg') }}" alt="Empowering Grassroots" class="w-20 h-20 mr-4 object-cover">
            <div>
                <a href=""><h3 class="text-3xl font-semibold hover:underline text-pink-400">Donate Grocerine</h3></a>
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

<div class="max-w-6xl mx-auto py-12 ">
    <div class="bg-white shadow-lg rounded-lg flex flex-col md:flex-row h-[400px]">
        
        <!-- Image Section -->
        <div class="md:w-1/2 p-10 ">
            <img src="images/don3.webp" alt="Feeding the Hungry" class="w-full h-full object-cover rounded-l-lg">
        </div>
        
        <!-- Content Section -->
        <div class="md:w-1/2 p-6 flex flex-col justify-center">
            <h2 class="text-2xl md:text-2xl font-bold text-black mb-4">Feeding the Hungry: Donate Food and Support Uday Foundation, an NGO Making a Difference</h2>
            <p class="text-base md:text-base text-gray-700 mb-4">
                At Uday Foundation, our mission is to provide free and nutritious meals to underprivileged families of hospital patients and children. Support our cause by donating food to feed the hungry. Join our food drive and make a difference in the lives of those in need. Contribute to Uday Foundation, an NGO near you, and help give food to the poor and homeless. Together, we can create a positive impact on society.
            </p>
            <div>
                <a href="#" class="text-blue-500 font-semibold mr-4">Learn More</a>
                <a href="#" class="text-white bg-blue-500 font-semibold px-4 py-2 rounded">Donate Now</a>
            </div>
        </div>
        
    </div>
    <div class="bg-white shadow-lg rounded-lg flex flex-col md:flex-row h-[400px]">
        
        <!-- Image Section -->
        <div class="md:w-1/2 p-10 ">
            <img src="images/don3.webp" alt="Feeding the Hungry" class="w-full h-full object-cover rounded-l-lg">
        </div>
        
        <!-- Content Section -->
        <div class="md:w-1/2 p-6 flex flex-col justify-center">
            <h2 class="text-2xl md:text-2xl font-bold text-black mb-4">Feeding the Hungry: Donate Food and Support Uday Foundation, an NGO Making a Difference</h2>
            <p class="text-base md:text-base text-gray-700 mb-4">
                At Uday Foundation, our mission is to provide free and nutritious meals to underprivileged families of hospital patients and children. Support our cause by donating food to feed the hungry. Join our food drive and make a difference in the lives of those in need. Contribute to Uday Foundation, an NGO near you, and help give food to the poor and homeless. Together, we can create a positive impact on society.
            </p>
            <div>
                <a href="#" class="text-blue-500 font-semibold mr-4">Learn More</a>
                <a href="#" class="text-white bg-blue-500 font-semibold px-4 py-2 rounded">Donate Now</a>
            </div>
        </div>
        
    </div>
    <div class="bg-white shadow-lg rounded-lg flex flex-col md:flex-row h-[400px]">
        
        <!-- Image Section -->
        <div class="md:w-1/2 p-10 ">
            <img src="images/don3.webp" alt="Feeding the Hungry" class="w-full h-full object-cover rounded-l-lg">
        </div>
        
        <!-- Content Section -->
        <div class="md:w-1/2 p-6 flex flex-col justify-center">
            <h2 class="text-2xl md:text-2xl font-bold text-black mb-4">Feeding the Hungry: Donate Food and Support Uday Foundation, an NGO Making a Difference</h2>
            <p class="text-base md:text-base text-gray-700 mb-4">
                At Uday Foundation, our mission is to provide free and nutritious meals to underprivileged families of hospital patients and children. Support our cause by donating food to feed the hungry. Join our food drive and make a difference in the lives of those in need. Contribute to Uday Foundation, an NGO near you, and help give food to the poor and homeless. Together, we can create a positive impact on society.
            </p>
            <div>
                <a href="#" class="text-blue-500 font-semibold mr-4">Learn More</a>
                <a href="#" class="text-white bg-blue-500 font-semibold px-4 py-2 rounded">Donate Now</a>
            </div>
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

<!-- Support a Cause Section -->
<section class="bg-white py-12">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">Support a Cause</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-bold">Tayyari Kal Ki</h3>
                <p class="text-gray-700">Our campaign ‘Tayyari Kal Ki’ aims at Training & Up Skilling the youth between the age of 18-32 years for employment and empowering them with a secure livelihood.</p>
                <a href="#" class="text-blue-500 hover:underline">know more ></a>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-bold">Health Cannot Wait</h3>
                <p class="text-gray-700">Realising the need for accessible and quality healthcare for all, our campaign ‘Health Cannot Wait’ aims at providing people from the under-privileged sections</p>
                <a href="#" class="text-blue-500 hover:underline">know more ></a>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-bold">Shiksha Na Ruke</h3>
                <p class="text-gray-700">Smile Foundation, through its ‘Shiksha Na Ruke’ initiative, has been helping children from difficult circumstances get back to school and restart their lives</p>
                <a href="#" class="text-blue-500 hover:underline">know more ></a>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-bold">She Can Fly</h3>
                <p class="text-gray-700">Smile Foundation’s initiative ‘She Can Fly’ is an effort to enable, equip and empower girl children with quality education, proper nutrition, good health</p>
                <a href="#" class="text-blue-500 hover:underline">know more ></a>
            </div>
        </div>
    </div>
</section>




@endsection