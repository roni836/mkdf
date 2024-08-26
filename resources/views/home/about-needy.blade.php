@extends('home.homeBase')
@section('content')
    <div class="w-full px-10 mx-auto p-4  mt-[8.5rem]">
        <!-- Header -->
        <div class="text-center bg-red-100 p-2 rounded-3xl max-w-lg mx-auto">
            <p class="text-red-600 font-semibold mx-auto "><i
                    class="fa-solid fa-triangle-exclamation text-red-500 mr-2"></i>This fundraiser is in urgent need of funds
            </p>
        </div>
        <div class="mt-6 flex flex-col md:flex-row bg-white shadow-lg rounded-lg">
            <div class="md:w-2/3 p-6">
                <div>
                    <h2 class="text-xl font-bold">Help 12-Year-Old Suharta Sen Experience A Cancer-Free Life Ahead.</h2>
                    <p class="mt-4 text-gray-700 mb-4">
                        I am Shila Rani Sen, and I am raising funds for my son, Suharta Sen, who is battling Hodgkin's
                        lymphoma. Suharta, who is only twelve years old, is a bright and courageous child who has been
                        diagnosed with classical Hodgkin lymphoma stage IV with a mediastinal mass.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat dolore, quo itaque officia reprehenderit, eaque non ratione culpa obcaecati quia illum cum, atque facilis corrupti consectetur architecto velit quam? Aliquam, error autem optio iure commodi exercitationem et ipsam impedit iusto ad non itaque tempora quasi! Necessitatibus sed quidem repellendus eos eaque doloribus molestiae iusto, mollitia veniam, quas, harum ipsa nisi neque saepe cupiditate dolore consequatur delectus quae 
                    </p>
                </div>
                <img src="images/nimg.png" alt="Suharta Sen" class="rounded-lg mb-4">
               
                <div class="w-full mx-auto">
                    <div class="max-w-6xl mx-auto bg-white  rounded-lg mt-6">
                        <!-- Donation Message -->
                       
                        <!-- Image Section -->
                        {{-- <div class="flex justify-center mb-4">
                            <img src="images/nimg.png" alt="Suharta Sen with a mask" class="w-3/4 rounded-md">
                        </div> --}}

                        <p class="text-gray-700 text-sm mb-4">
                            Please donate generously to this fundraiser; all contributions will go directly towards covering
                            the
                            cost of chemotherapy, potential radiation therapy, medications, and other medical expenses.
                            <strong>Each donation offers our son a step towards a cancer-free future. Please donate now and
                                share
                                this campaign with your friends and family to help us reach our goal.</strong>
                        </p>


                        <!-- Thank You Message -->
                        <p class="text-gray-700 text-sm">
                            We thank each of you for your priceless support and timely help. Please keep my son in your
                            prayers.
                            Thank you.
                        </p>

                        <div class="mb-4 mt-5">
                            {{-- <h2 class="text-xl font-semibold mb-2">Medical Documents</h2> --}}
                            <div class="relative bg-gray-200  rounded-lg">
                                <img src="/images/donate-bg.png" alt="Medical Documents"
                                    class="object-cover h-40 w-full rounded-lg">
                                <div
                                    class="absolute top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex flex-col items-center justify-center text-white rounded-lg">
                                    <h3 class="text-2xl font-semibold">Medical Document Verified <i class="fa-solid fa-circle-check ml-2"></i></h3>
                                    <p class="mt-2">See how the funds will be utilised for this campaign</p>
                                    <button class="mt-4 px-4 py-2 bg-green-500 rounded hover:bg-green-600">View Now <i class="fa-solid fa-eye"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between mt-6">
                            <button class="flex items-center px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                                <i class="fa-brands fa-whatsapp mr-2"></i>
                                Share
                            </button>
                            <button class="flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                <i class="fa-brands fa-square-facebook mr-2"></i>
                                Share
                            </button>
                            <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Contribute Now</button>
                        </div>

                        <!-- Other Donation Methods Section -->
                        <div class=" p-6 bg-white rounded-lg border mt-8">
                            <h3 class="text-lg font-semibold mb-4">Other Donation Methods</h3>
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <p class="mb-4">Transfer directly to the Bank account of this Fundraiser. Only INR
                                    transfers are
                                    allowed.
                                </p>
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2L1 7v2h22V7z"></path>
                                            <path d="M1 10v2h22v-2z"></path>
                                            <path d="M3 14h2v2H3zm0 4h2v2H3zm16-4h2v2h-2zm0 4h2v2h-2z"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <p>Virtual A/C No : <span class="font-semibold">2223122470907513</span></p>
                                        <p>Virtual A/C Name : <span class="font-semibold">MKDF Foundation</span></p>
                                        <p>A/C Type : <span class="font-semibold">Current</span></p>
                                        <p>IFSC : <span class="font-semibold">ABCD00123</span> (The Digit after N is zero)
                                        </p>
                                    </div>
                                </div>
                                <i>
                                    <p class=" hover:underline cursor-pointer bg-teal-400 p-2 rounded-md text-white">Claim
                                        your donation acknowledgement
                                        now! For
                                        payment done via <a href="#" class="font-semibold underline text-black">Bank
                                            Transfer</a></p>
                                </i>
                            </div>
                        </div>

                        <!-- Paytm/UPI Payment Section -->
                        <div class="p-6 bg-gray-50 rounded-lg mb-6 border mt-4">
                            <h3 class="text-lg font-semibold mb-4">You can also pay via Paytm/UPI QR code</h3>
                            <p class="mb-6">Scan the QR code from the app and make payment.</p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <!-- Paytm QR Code -->
                                <div class="p-4 bg-white rounded-lg shadow-md text-center">
                                    <img src="/images/paytm.png" alt="Paytm" class="mx-auto mb-4">
                                    {{-- <div class="mb-4">
                                        <img src="paytm-qr.png" alt="Paytm QR Code" class="mx-auto h-32 w-32">
                                    </div> --}}
                                    <button class="px-4 py-2 bg-teal-500 text-white rounded hover:bg-teal-600">Generate
                                        QR</button>
                                    <p class="mt-4 text-gray-600">Scan here to pay with Paytm Wallet</p>
                                </div>

                                <!-- Other Apps QR Code -->
                                <div class="p-4 bg-white rounded-lg shadow-md text-center">
                                    <img src="/images/upi.png" alt="UPI" class="mx-auto mb-4">
                                    {{-- <div class="mb-4">
                                        <img src="upi-qr.png" alt="UPI QR Code" class="mx-auto h-32 w-32">
                                    </div> --}}
                                    <button class="px-4 py-2 bg-teal-500 text-white rounded hover:bg-teal-600">Generate
                                        QR</button>
                                    <p class="mt-4 text-gray-600">Scan here to pay with any UPI app</p>
                                </div>
                            </div>
                            <i>
                                <p class=" hover:underline cursor-pointer bg-teal-400 p-2 rounded-md text-white">Claim your
                                    donation acknowledgement
                                    now! For
                                    payment done via <a href="#" class="font-semibold underline text-black">Paytm and
                                        UPI</a></p>
                            </i>
                        </div>



                        <div class="max-w-3xl mx-auto mb-10 p-6 bg-white rounded-lg border shadow-lg">
                            <h3 class="text-lg font-semibold mb-4">REFER A FRIEND</h3>
                            <p class="mb-4">In need of funds for medical treatment or know someone who might be? Share the
                                details and
                                Ketto will get in touch with them.</p>
                            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">REFER A
                                FRIEND</button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Column -->
            {{-- <div class="md:w-1/3 bg-gray-50 p-6 rounded-lg flex flex-col justify-between">
                <div class="text-center">
                    <button class="bg-teal-600 text-white font-bold py-2 px-4 rounded-lg w-full">CONTRIBUTE NOW</button>
                    <p class="text-sm text-gray-500 mt-2">All Credit & Debit Cards, Net Banking, Paytm/UPI, Direct Bank
                        Transfer</p>
                </div>

                <div class="mt-4 text-center">
                    <p class="text-4xl font-bold text-teal-600">₹ 10,14,678</p>
                    <p class="text-sm text-gray-600">raised of ₹ 15,00,000 goal</p>
                    <div class="relative pt-1">
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-teal-200">
                            <div style="width: 67%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-teal-500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <p class="text-gray-600 text-sm"><strong>439 supporters</strong> | <strong>26 Days left</strong></p>
                    <div class="flex items-center mt-4">
                        <img src="images/con1.png" alt="Shila Rani Sen" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <p class="font-semibold">Shila Rani Sen</p>
                            <p class="text-gray-500 text-sm">Kolkata</p>
                        </div>
                    </div>
                    <div class="flex items-center mt-4">
                        <img src="images/con1.png" alt="Shila Rani Sen" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <p class="font-semibold">Shila Rani Sen</p>
                            <p class="text-gray-500 text-sm">Kolkata</p>
                        </div>
                    </div>
                    <div class="flex items-center mt-4">
                        <img src="images/con1.png" alt="Shila Rani Sen" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <p class="font-semibold">Shila Rani Sen</p>
                            <p class="text-gray-500 text-sm">Kolkata</p>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <button class="text-teal-600 font-semibold text-sm">Start a Supporting Fundraiser</button>
                </div>
            </div> --}}

            <div class="md:w-1/3  p-6 rounded-lg mt-5">

                <div class="text-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">₹ 10,14,678</h2>
                    <p class="text-gray-600">raised of ₹ 15,00,000 goal</p>
                    <!-- Progress Bar -->
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mt-4">
                        <div class="bg-teal-500 h-2.5 rounded-full" style="width: 67%;"></div>
                    </div>
                </div>

                <!-- Supporters and Days Left -->
                <div class="flex justify-between text-gray-600 mb-6">
                    <div>
                        <p class="text-lg font-semibold">439</p>
                        <p class="text-sm">supporters</p>
                    </div>
                    <div>
                        <p class="text-lg font-semibold">26</p>
                        <p class="text-sm">Days left</p>
                    </div>
                </div>

                <div class="bg-green-100 p-8">
                    <h3 class="text-xl font-bold text-center mb-4">SUPPORT THE CAUSE</h3>
                    <div class="text-center">
                        <p class="text-gray-700 font-semibold mb-4">MAKE A DIFFERENCE</p>
                        <form action="#" method="POST">
                            <div class="mb-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="donation" value="1500"
                                        class="form-radio h-4 w-4 text-green-600">
                                    <span class="ml-2 text-gray-700">₹ 1500</span>
                                </label>
                                <label class="inline-flex items-center ml-4">
                                    <input type="radio" name="donation" value="3000"
                                        class="form-radio h-4 w-4 text-green-600">
                                    <span class="ml-2 text-gray-700">₹ 3000</span>
                                </label>
                                <label class="inline-flex items-center ml-4">
                                    <input type="radio" name="donation" value="6000"
                                        class="form-radio h-4 w-4 text-green-600">
                                    <span class="ml-2 text-gray-700">₹ 6000</span>
                                </label>
                                <label class="inline-flex items-center ml-4">
                                    <input type="radio" name="donation" value="12000"
                                        class="form-radio h-4 w-4 text-green-600">
                                    <span class="ml-2 text-gray-700">₹ 12000</span>
                                </label>
                            </div>
                            <p class="text-gray-700 mb-4">
                                YOUR DONATION WILL HELP FOR THE EDUCATION OF 1 CHILD FOR 3 MONTHS
                            </p>
                            <div class="mb-4">
                                <input type="text" name="other-amount" placeholder="₹ Other Amount"
                                    class="w-full p-2 border rounded-lg">
                            </div>
                            <button type="submit" class="bg-green-600 text-white font-bold py-2 px-4 rounded-lg w-full">
                                DONATE NOW
                            </button>
                        </form>
                        <p class="text-gray-500 text-xs mt-4">
                            *YOUR CONTRIBUTIONS ARE ELIGIBLE FOR UPTO 50% TAX BENEFIT UNDER SECTION 80G AS SMILE FOUNDATION
                            IS
                            REGISTERED AS NON-PROFIT ORGANIZATION*
                        </p>
                        <p class="text-gray-500 text-xs mt-1">
                            PAN: AACTS7973G | 80G NUMBER: AACTS7973GF20210
                        </p>
                    </div>
                </div>




                <!-- Campaigner and Beneficiary Info -->
                <div class="p-4 bg-gray-50 rounded-lg flex flex-col gap-3 mt-4">
                    <!-- Beneficiary -->
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-300 text-gray-700 font-semibold mr-3">
                            RS
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-800">Helpful Donar</p>
                            <p class="text-sm text-teal-500 font-bold">RONI SAHA</p>
                            <p class="text-xs text-gray-500">Son</p>
                        </div>
                    </div>
                    <hr>
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-300 text-gray-700 font-semibold mr-3">
                            RS
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-800">Helpful Donar</p>
                            <p class="text-sm text-teal-500 font-bold">RONI SAHA</p>
                            <p class="text-xs text-gray-500">Son</p>
                        </div>
                    </div>
                    <hr>
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-300 text-gray-700 font-semibold mr-3">
                            RS
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-800">Helpful Donar</p>
                            <p class="text-sm text-teal-500 font-bold">RONI SAHA</p>
                            <p class="text-xs text-gray-500">Son</p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

        </div>
    </div>
@endsection
