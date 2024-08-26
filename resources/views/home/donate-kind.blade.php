@extends('home.homeBase')
@section('content')


{{-- <div class="max-w-4xl mx-auto p-8 bg-white shadow-lg mt-4">
    <h2 class="text-2xl font-bold text-blue-700 mb-4">
        Donate Money to the Needy
    </h2>

    <h3 class="text-lg font-semibold text-gray-700 mb-2">Personal Info</h3>
    <div class="grid grid-cols-2 gap-4 mb-6">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="first_name">First Name *</label>
            <input type="text" id="first_name" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="last_name">Last Name *</label>
            <input type="text" id="last_name" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="col-span-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email Address *</label>
            <input type="email" id="email" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="col-span-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone *</label>
            <input type="text" id="phone" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="col-span-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="pan_number">PAN Number</label>
            <input type="text" id="pan_number" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    <h3 class="text-lg font-semibold text-gray-700 mb-2">Billing Details</h3>
    <div class="grid grid-cols-2 gap-4 mb-6">
        <div class="col-span-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="country">Country *</label>
            <select id="country" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
                <option>India</option>
            </select>
        </div>
        <div class="col-span-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address1">Address 1 *</label>
            <input type="text" id="address1" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="col-span-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address2">Address 2</label>
            <input type="text" id="address2" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="city">City *</label>
            <input type="text" id="city" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="state">State *</label>
            <select id="state" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
                <option>Delhi</option>
                <!-- Add more states as needed -->
            </select>
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="zip">Zip / Postal Code *</label>
            <input type="text" id="zip" class="border border-gray-300 rounded p-2 w-full focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2">Total Donation :</label>
        <div class="flex items-center">
            <span class="text-lg font-semibold mr-2">₹</span>
            <input type="text" value="6,000.00" readonly class="border border-gray-300 rounded p-2 w-32 focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    <div>
        <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
            Donate Now
        </button>
    </div>

    <p class="text-xs text-gray-500 mt-4">
        VERY IMPORTANT: As per the Indian Income Tax Department's rules, a donor is required to add their address and PAN number in case they wish to receive...
    </p>
</div> --}}

<div class="h-screen  mt-[8.5rem]">
    
<div class="w-full px-10 bg-white p-6 rounded-lg shadow-lg">
    <div class="flex flex-col lg:flex-row">
        <!-- Left Section: Text Content -->
        <div class="lg:w-2/3 p-4">
            <h2 class="text-3xl font-bold mb-4">Your support is crucial in ensuring education for all!</h2>
            <p class="text-gray-700 mb-4">
                Childhood is said to be the best part of human life – an age where we are carefree, safe and happy. 
                But a happy childhood is not the reality for many children, who are out-of-school. There are many reasons 
                for children to drop out of school – from challenging socio-economic circumstances, to lack of awareness 
                in communities where education is not seen as a priority.
            </p>
            <p class="text-gray-700 mb-4">
                Going to school not only ensures a dignified future and a happy present for children, but also gives 
                them a safe space to express themselves, learn, share and grow. Children who drop out often have to work 
                as child labour, are pushed into child marriages, or become victims of child trafficking.
            </p>
            <p class="text-gray-700 mb-4">
                Smile Foundation, through its ‘Shiksha Na Ruke’ initiative has been helping children from difficult 
                circumstances continue their education, with the hope of a brighter future and better life. At present, 
                we are directly providing education to over 120,000 children in 27 states of India.
            </p>
            <p class="text-gray-700">
                Despite all the odds, these young champions have not given up and continue to dream and work hard. With 
                your support, we can fuel their dreams with accessible and quality education. Join hands with us to ensure 
                a happy and safe childhood for all!
            </p>
        </div>
        <!-- Right Section: Donation Form -->
        <div class="lg:w-1/3 bg-green-100 p-6 rounded-lg">
            <h3 class="text-xl font-bold text-center mb-4">SUPPORT THE CAUSE</h3>
            <div class="text-center">
                <p class="text-gray-700 font-semibold mb-4">MAKE A DIFFERENCE</p>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="donation" value="1500" class="form-radio h-4 w-4 text-green-600">
                            <span class="ml-2 text-gray-700">₹ 1500</span>
                        </label>
                        <label class="inline-flex items-center ml-4">
                            <input type="radio" name="donation" value="3000" class="form-radio h-4 w-4 text-green-600">
                            <span class="ml-2 text-gray-700">₹ 3000</span>
                        </label>
                        <label class="inline-flex items-center ml-4">
                            <input type="radio" name="donation" value="6000" class="form-radio h-4 w-4 text-green-600">
                            <span class="ml-2 text-gray-700">₹ 6000</span>
                        </label>
                        <label class="inline-flex items-center ml-4">
                            <input type="radio" name="donation" value="12000" class="form-radio h-4 w-4 text-green-600">
                            <span class="ml-2 text-gray-700">₹ 12000</span>
                        </label>
                    </div>
                    <p class="text-gray-700 mb-4">
                        YOUR DONATION WILL HELP FOR THE EDUCATION OF 1 CHILD FOR 3 MONTHS
                    </p>
                    <div class="mb-4">
                        <input type="text" name="other-amount" placeholder="₹ Other Amount" class="w-full p-2 border rounded-lg">
                    </div>
                    <button type="submit" class="bg-green-600 text-white font-bold py-2 px-4 rounded-lg w-full">
                        DONATE NOW
                    </button>
                </form>
                <p class="text-gray-500 text-xs mt-4">
                    *YOUR CONTRIBUTIONS ARE ELIGIBLE FOR UPTO 50% TAX BENEFIT UNDER SECTION 80G AS SMILE FOUNDATION IS REGISTERED AS NON-PROFIT ORGANIZATION*
                </p>
                <p class="text-gray-500 text-xs mt-1">
                    PAN: AACTS7973G | 80G NUMBER: AACTS7973GF20210
                </p>
            </div>
        </div>
    </div>
</div>
</div>




@endsection