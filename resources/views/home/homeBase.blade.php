<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mkdf</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <style>
        /* Fade-in and slide-up effect for the popup */
        .popup-enter {
            opacity: 0;
            transform: translateX(150px);
        }

        .popup-enter-active {
            opacity: 1;
            transform: translateX(0);
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }

        .popup-exit {
            opacity: 1;
            transform: translateX(0);
        }

        .popup-exit-active {
            opacity: 0;
            transform: translateX(20px);
            transition: opacity 0.5s ease-in, transform 0.5s ease-in;
        }
    </style>

</head>

<body class="bg-gray-100">
    <header class="bg-teal-500 shadow-md">
        <div class="container mx-auto flex justify-center items-center p-2">
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/" class="text-gray-800 hover:text-white text-center text-sm font-semibold">Left
                            Over Medicine</a></li>
                    <span class="border-r"></span>
                    <li><a href="{{ url('left-over-food') }}" class="text-gray-800 hover:text-white text-center text-sm font-semibold">Left
                            over Food</a></li>
                    <span class="border-r"></span>
                    <li><a href="/"
                            class="text-gray-800 hover:text-white text-center text-sm font-semibold">Unused Books</a>
                    </li>
                    <span class="border-r"></span>
                    <li><a href="/"
                            class="text-gray-800 hover:text-white text-center text-sm font-semibold">Medical Equipments
                            or Medicine</a></li>
                    <span class="border-r"></span>
                    <li><a href="{{ url('time-contribution') }}" class="text-gray-800 hover:text-white text-center text-sm font-semibold">Time
                            Contribution</a></li>
                    <span class="border-r"></span>
                </ul>
            </nav>
        </div>
    </header>

    <header class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="text-white font-bold text-xl">
                <div class="text-xl font-bold">MKDF Foundation</div>
            </div>

            <!-- Navigation -->
            <nav class="flex space-x-6">
                <a href="/" class="text-white hover:underline hover:text-yellow-200  uppercase">
                    HOME
                </a>
                <a href="#" class="text-white hover:underline hover:text-yellow-200  uppercase">
                    ABOUT US
                </a>
                <a href="/what-we-do" class="text-white hover:underline hover:text-yellow-200  uppercase">
                    WHAT WE DO
                </a>
                <a href="/our-work" class="text-white hover:underline hover:text-yellow-200  uppercase">
                    Our Work
                </a>
                <a href="/donar" class="text-white hover:underline hover:text-yellow-200  uppercase">
                    Donar
                </a>
                <a href="{{ url('event') }}" class="text-white hover:underline hover:text-yellow-200  uppercase">
                    Events
                </a>
                <a href="#" class="text-white hover:underline hover:text-yellow-200  uppercase">
                    CONTACT US
                </a>
            </nav>
            {{-- <a href="" class="bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded ">Donate Now</a> --}}
            <a href="javascript:void(0)" id="donate-btn"
                class="bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded mr-16">Donate Now</a>
        </div>

    </header>

    <div id="list-container"
        class="w-1/6 fixed right-10 z-10 hidden transition-opacity duration-500 transform translate-y-4">
        <ul class="w-full">
            <a href="/donate-kind">
                <li class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded mt-2 cursor-pointer">
                    Donate Kind
                </li>
            </a>
            <a href="/dry-ration">
                <li class="bg-yellow-400 hover:bg-yellow-500 text-white py-2 px-4 rounded mt-2 cursor-pointer">
                    Donate Dry Ration
                </li>
            </a>

            <li class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded mt-2 cursor-pointer"
                onclick="showForm('medicine')">Donate Medicine</li>
            <li class="bg-yellow-400 hover:bg-yellow-500 text-white py-2 px-4 rounded mt-2 cursor-pointer"
                onclick="showForm('food')">Donate Food</li>
            <li class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded mt-2 cursor-pointer"
                onclick="showForm('books')">Donate Old Books</li>
        </ul>
    </div>

    <script>
        document.getElementById('donate-btn').addEventListener('click', function() {
            var listContainer = document.getElementById('list-container');
            if (listContainer.classList.contains('hidden')) {
                listContainer.classList.remove('hidden', 'translate-y-4');
                listContainer.classList.add('opacity-100', 'translate-y-0');
            } else {
                listContainer.classList.remove('opacity-100', 'translate-y-0');
                listContainer.classList.add('hidden', 'translate-y-4');
            }
        });
    </script>

    <div id="popup-form-container"
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-10">
        <div id="form-container" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md z-10"></div>
    </div>
    @section('content')
    @show

    {{-- <footer class="bg-blue-600 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 MKDF Foundation. All rights reserved.</p>
        </div>
    </footer> --}}
    <footer class="w-full px-5 mx-auto shadow-lg bg-gray-200">
        <div class=" p-8 rounded-lg flex flex-col md:flex-row justify-between  px-16">
            <div class="md:w-1/4 flex flex-col mb-8 md:mb-0">
                <h1 class="text-2xl font-bold">MKDF</h1>
                <p class="text-sm text-gray-500 mb-">दान मूर्त रूप है</p>
                <p class="text-sm text-gray-700 mb-4">
                    A compassionate NGO dedicated to creating a positive impact by supporting and empowering communities
                    in need. Join our journey to bring positive change.
                </p>
                <div class="flex space-x-8">
                    <a href="#" class="text-gray-600 hover:text-black">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-black">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-black">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-black">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-black">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
                <div class="mt-4 flex gap-8">
                    <img src="https://daanpatra.org/wp-content/uploads/2023/11/qr-code.webp" alt="QR Code"
                        class="w-24 h-24 mb-2">
                    <div class="flex flex-col gap-1">
                        <p class="text-sm">Name: <strong>MKDF Foundation</strong></p>
                        <p class="text-sm">A/c Number: <strong>076288700000243</strong></p>
                        <p class="text-sm">IFSC: <strong>YESB0000762</strong></p>
                        <p class="text-sm">Branch: <strong>Vijay Nagar, Indore</strong></p>
                    </div>
                </div>
            </div>
            <div class="mb-8 md:w-1/4 flex flex-col px-16 md:mb-0">
                <h2 class="text-xl font-bold mb-4 ">ABOUT US</h2>
                <ul class="text-sm text-gray-700 space-y-2">
                    <li><a href="#" class="hover:underline">Achievement</a></li>
                    <li><a href="#" class="hover:underline">Campaigns</a></li>
                    <li><a href="#" class="hover:underline">Blogs</a></li>
                    <li><a href="#" class="hover:underline">Our Products</a></li>
                    <li><a href="#" class="hover:underline">About Us</a></li>
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline">Terms & Conditions</a></li>
                    <li><a href="#" class="hover:underline">Cancellation and Refund</a></li>
                    <li><a href="#" class="hover:underline">Shipping and Delivery</a></li>
                </ul>
            </div>
            <div class="mb-8 md:w-1/4 flex flex-col md:mb-0">
                <h2 class="text-xl font-bold mb-4">AREA OF WORK</h2>
                <ul class="text-sm text-gray-700 space-y-2">
                    <li><a href="#" class="hover:underline">Shelter to Homeless People</a></li>
                    <li><a href="#" class="hover:underline">Employment to Beggars</a></li>
                    <li><a href="#" class="hover:underline">Medical Treatment Facilities</a></li>
                    <li><a href="#" class="hover:underline">Free Social Education to Slum Kids</a></li>
                    <li><a href="#" class="hover:underline">Old Age Home in Indore</a></li>
                    <li><a href="#" class="hover:underline">Old Age Home in India</a></li>
                    <li><a href="#" class="hover:underline">NGO in India</a></li>
                </ul>
            </div>
            <div class="md:w-1/4 flex flex-col md:mb-0">
                <h2 class="text-xl font-bold mb-4">GET IN TOUCH</h2>
                <form action="#" class="flex flex-col space-y-4">
                    <input type="text" placeholder="Name"
                        class="p-2 rounded-3xl border border-gray-300 focus:outline-none focus:border-green-500">
                    <input type="email" placeholder="Email"
                        class="p-2 rounded-3xl border border-gray-300 focus:outline-none focus:border-green-500">
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white p-2 rounded-3xl">Submit</button>
                </form>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/9128528958" target="_blank" class="fixed bottom-10 right-10 z-20">
        <div class="bg-green-600 rounded-full p-5 shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 24 24"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M20.66 3.34A12 12 0 1012 24a12 12 0 008.66-20.66zM12 22a9.94 9.94 0 01-7.07-2.93 9.94 9.94 0 01-2.93-7.07c0-2.68 1.05-5.2 2.93-7.07a9.94 9.94 0 017.07-2.93c2.68 0 5.2 1.05 7.07 2.93a9.94 9.94 0 012.93 7.07c0 2.68-1.05 5.2-2.93 7.07A9.94 9.94 0 0112 22zM12 2C6.48 2 2 6.48 2 12c0 2.34.78 4.47 2.08 6.18l-1.45 5.3a1 1 0 001.2 1.2l5.31-1.45A9.96 9.96 0 0012 22c5.52 0 10-4.48 10-10S17.52 2 12 2zm-.4 16.55a1 1 0 00.44-.1l.63-.28c.27-.13.65-.27 1.05-.43 1.12-.44 2.48-1.13 3.15-1.46a2 2 0 00.85-.83c.16-.32.15-.65.14-.88a1.17 1.17 0 00-.1-.27c-.15-.29-.32-.66-.52-1.08-.42-.88-.88-1.8-1.07-2.09-.04-.06-.08-.09-.14-.13a1 1 0 00-.31-.15 1 1 0 00-.82.07c-.18.1-.39.2-.62.31-.29.15-.58.31-.83.45a1 1 0 00-.3.24c-.05.06-.09.12-.13.18a1 1 0 00-.14.44c0 .1-.01.22-.03.34-.05.33-.1.7-.24 1.11-.1.3-.34.69-.58 1.06a5.76 5.76 0 00-.64 1.35c-.09.32-.09.54-.02.7.05.13.2.21.43.24.21.03.54.1 1 .2.69.16 1.16.24 1.3.24a1 1 0 00.48-.12zM7 10a5 5 0 115 5H7a5 5 0 010-10z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </a>


    <script>
        function showForm(category) {
            const popupContainer = document.getElementById('popup-form-container');
            const formContainer = document.getElementById('form-container');

            formContainer.innerHTML = `
                <button class="absolute top-0 right-0 mt-2 mr-2 text-gray-500 hover:text-gray-700 text-xl" onclick="closeForm()" type="button">
                    &times;
                </button>
                <h3 class="text-xl font-bold mb-4">${category.charAt(0).toUpperCase() + category.slice(1)} Donation Form</h3>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter your name">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="mobile">
                        Mobile
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="mobile" type="text" placeholder="Enter your mobile number">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                        Address
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" placeholder="Enter your address">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                        Description
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" placeholder="Enter a description"></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Submit
                    </button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" onclick="closeForm()">
                        Close
                    </button>
                </div>
            `;

            // Add enter transition class
            popupContainer.classList.remove('hidden', 'popup-exit-active');
            popupContainer.classList.add('popup-enter');

            // Trigger reflow for the transition to apply
            void popupContainer.offsetWidth;

            // Apply the active state
            popupContainer.classList.add('popup-enter-active');
        }

        function closeForm() {
            const popupContainer = document.getElementById('popup-form-container');

            // Add exit transition class
            popupContainer.classList.remove('popup-enter-active');
            popupContainer.classList.add('popup-exit');

            // Trigger reflow for the transition to apply
            void popupContainer.offsetWidth;

            // Apply the active exit state
            popupContainer.classList.add('popup-exit-active');

            // Wait for the transition to finish before hiding the element
            setTimeout(() => {
                popupContainer.classList.add('hidden');
                popupContainer.classList.remove('popup-exit', 'popup-exit-active');
            }, 1000); // Match the duration of the transition
        }
    </script>
</body>

</html>
