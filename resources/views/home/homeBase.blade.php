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
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
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
        .modal {
            transition: opacity 0.25s ease;
        }

        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }

        .vertical-text {
            writing-mode: vertical-rl;
            text-orientation: mixed;
        }
    </style>

</head>

<body class="bg-gray-100">
    <header class=" ">
        <div class="container mx-auto flex justify-center items-center p-2 shadow-md fixed top-0 z-20 bg-teal-600 max-w-full">
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ url('left-over-medicine') }}" class="text-white hover:text-white text-center text-sm font-semibold">Left
                            Over Medicine</a></li>
                    <span class="border-r"></span>
                    <li><a href="{{ url('left-over-food') }}" class="text-white hover:text-white text-center text-sm font-semibold">Left
                            over Food</a></li>
                    <span class="border-r"></span>
                    <li><a href="/"
                            class="text-white hover:text-white text-center text-sm font-semibold">Unused Books</a>
                    </li>
                    <span class="border-r"></span>
                    <li><a href="{{ url('medical-equipment') }}" class="text-white hover:text-white text-center text-sm font-semibold">Medical Equipments or Medicine</a></li>
                    <span class="border-r"></span>
                    <li><a href="{{ url('time-contribution') }}" class="text-white hover:text-white text-center text-sm font-semibold">Time Contribution</a></li>
                    <span class="border-r"></span>
                </ul>
            </nav>
        </div>
    </header>

    <header class=" ">
        <div class="container w-full mx-auto flex justify-between items-center fixed top-10 z-20 p-3 shadow-lg max-w-full bg-white">
            <!-- Logo -->
            <div class="text-white font-bold text-xl">
                <div class="text-2xl font-bold flex"><span class="text-teal-500">MKDF </span><span class="text-orange-500 ml-2"> Foundation</span></div>
            </div>

            <!-- Navigation -->
            <nav class="flex space-x-6">
                <a href="/" class=" hover:underline  uppercase font-semibold">
                    HOME
                </a>
                <a href="{{ url('about') }}" class=" hover:underline  uppercase font-semibold">
                    ABOUT US
                </a>
                <a href="/what-we-do" class=" hover:underline  uppercase font-semibold">
                    WHAT WE DO
                </a>
                <a href="/our-work" class=" hover:underline  uppercase font-semibold">
                    Our Work
                </a>
                <a href="/donar" class=" hover:underline  uppercase font-semibold">
                    Donar
                </a>
                <a href="{{ url('event') }}" class=" hover:underline  uppercase font-semibold">
                    Events
                </a>
                <a href="{{ url('gallery') }}" class=" hover:underline  uppercase font-semibold">
                    Gallery
                </a>
                {{-- <button id="rateBtn" class="text-white hover:underline hover:text-yellow-200  uppercase">
                    CONTACT US
                </button> --}}
            </nav>
            {{-- <a href="" class="bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded ">Donate Now</a> --}}
            <a href="javascript:void(0)" id="donate-btn"
                class="bg-orange-500 hover:bg-orange-600 text-white py-3 px-5 font-bold text-xl mr-16">Donate Now</a>
        </div>

    </header>

    <div id="list-container"
        class="w-1/6 fixed right-10 top-36 z-10 hidden transition-opacity duration-500 transform translate-y-4">
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


    <div class="fixed top-1/2 left-0 transform -translate-y-1/2 z-20">
        <button id="rateUsButton" class="bg-teal-400 hover:bg-teal-500 hover:text-white text-black font-semibold px-2 py-6 rounded-l-lg shadow vertical-text">
            Need Help ?
        </button>
    </div>

    <div id="rateUsModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 z-30 flex items-center justify-center modal">
        <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg w-full p-4">
            <div class="text-right">
                <button id="closeModal" class="text-gray-500 text-4xl">&times;</button>
            </div>
            <h2 class="text-lg text-green-500 mb-4  font-semibold">Note : If You Know Someone Who needy any type of help. Please contact us</h2>
            <form id="rateUsForm" class="">
                <div>
                    <label for="name" class="block mb-2 text-gray-700 text-base">Helper's Name:</label>
                    <input type="text" id="name" name="name" class="w-full border rounded p-1">
                    <p id="error-name" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div>
                    <label for="mobile" class="block mb-2 text-gray-700 text-base">Helper's Mobile:</label>
                    <input type="tel" id="mobile" name="mobile" class="w-full border rounded p-1">
                    <p id="error-mobile" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div>
                    <label for="mobile" class="block mb-2 text-gray-700 text-base">Needy Person's Name (if available):</label>
                    <input type="text" id="mobile" name="mobile" class="w-full border rounded p-1">
                    <p id="error-mobile" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div>
                    <label for="mobile" class="block mb-2 text-gray-700 text-base">Needy Person's Mobile (Optional):</label>
                    <input type="tel" id="mobile" name="mobile" class="w-full border rounded p-1">
                    <p id="error-mobile" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div>
                    <label for="mobile" class="block mb-2 text-gray-700 text-base">Needy Person's Location :</label>
                    <input type="text" id="mobile" name="mobile" class="w-full border rounded p-1">
                    <p id="error-mobile" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div class="flex gap-2 mt-2">

                <div class="">
                    <label for="mobile" class="block mb-2 text-gray-700 text-base">Help Type :</label>
                    <select name="" id="" class=" border rounded p-1">
                        <option value="">Select Help type required</option>
                        <option value="">Financial Help</option>
                        <option value="">Moral Support</option>
                        <option value="">Educational Support</option>
                        <option value="">Other</option>
                    </select>
                </div>
                <div class="">
                    <label for="mobile" class="block mb-2 text-gray-700 text-base">Any Images (if available):</label>
                    <input type="file" id="mobile" name="mobile" class="">
                    <p id="error-mobile" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                </div>
                <div class="mt-2">
                    <label for="comment" class="block mb-2 text-gray-700 text-base">Message (Optional) :</label>
                    <textarea id="comment" name="comment" rows="2" class="w-full border rounded p-1"></textarea>
                </div>
    
                <div class="text-right">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded shadow">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        // Get elements
        const rateUsButton = document.getElementById('rateUsButton');
        const rateUsModal = document.getElementById('rateUsModal');
        const closeModal = document.getElementById('closeModal');
        const ratingStars = document.querySelectorAll('.rating-star');
        let selectedRating = 0;
    
        // Show modal
        rateUsButton.addEventListener('click', () => {
            rateUsModal.classList.remove('hidden');
            document.body.classList.add('modal-active');
        });
    
        // Hide modal
        closeModal.addEventListener('click', () => {
            rateUsModal.classList.add('hidden');
            document.body.classList.remove('modal-active');
        });
    
        // Select rating
        ratingStars.forEach(star => {
            star.addEventListener('click', () => {
                selectedRating = star.getAttribute('data-rating');
                ratingStars.forEach(s => s.classList.remove('text-yellow-500'));
                for (let i = 0; i < selectedRating; i++) {
                    ratingStars[i].classList.add('text-yellow-500');
                }
            });
        });
    
        // Submit form
        document.getElementById('rateUsForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            formData.append('rate', selectedRating);
            $.ajax({
                type: "POST",
                url: "{{ route('rate.store') }}",
                data: formData,
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    swal("Thanking So Much", response.message, "success");
                    $("#rateUsForm").trigger("reset");
                    setTimeout(function() {
                        window.open("/", "_self");
                    }, 4000);
                },
                error: function(xhr) {
                    $('.error-message').html('');
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        $('.error-message').html(''); // Clear previous error messages
                        $.each(errors, function(key, value) {
                            $('#error-' + key).html(value[0]).show();
                        });
                    } else {
                        alert('An error occurred. Please try again.');
                    }
                }
            });
        });
    </script>

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
    <footer class="w-full mt-10 px-5 mx-auto shadow-lg bg-gray-200">
        <div class=" p-8 rounded-lg flex flex-col md:flex-row justify-between  px-16">
            <div class="md:w-1/4 flex flex-col mb-8 md:mb-0">
                <h1 class="text-2xl font-bold">MKDF</h1>
                <p class="text-sm text-gray-500 mb-">दान मूर्त रूप है</p>
                <p class="text-sm text-gray-700 mb-4">
                    A compassionate NGO dedicated to creating a positive impact by supporting and empowering communities
                    in need. Join our journey to bring positive change.
                </p>
                <div class="flex space-x-12">
                    <a href="#" class="text-gray-600 hover:text-black">
                        <i class="fab fa-facebook-f fa-xl"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-black">
                        <i class="fab fa-linkedin-in fa-xl"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-black">
                        <i class="fab fa-youtube fa-xl"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-black">
                        <i class="fab fa-instagram fa-xl"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-black">
                        <i class="fab fa-whatsapp fa-xl"></i>
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
        <div class="bg-green-500 rounded-full p-5 shadow-lg text-white hover:text-gray-100 hover:bg-green-600">
            <i class="fa-brands fa-whatsapp fa-2xl "></i>
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

        document.addEventListener('DOMContentLoaded', (event) => {
        const button1 = document.getElementById('rateBtn');
        const button2 = document.getElementById('rateUsButton');

        button1.addEventListener('click', () => {
            button2.click();  // Trigger click event on button2 when button1 is clicked
        });

        button2.addEventListener('click', () => {
            console.log('Rate Us button  clicked!');
            // Add any other logic for button2 click event here
        });
    });
    </script>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

</body>

</html>
