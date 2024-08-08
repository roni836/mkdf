<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mkdf</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">

</head>

<body class="bg-gray-100">

    <header class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="text-white font-bold text-xl">
                <div class="text-xl font-bold">MKDF Foundation</div>
            </div>
    
            <!-- Navigation -->
            <nav class="flex space-x-6">
                <a href="/" class="text-white hover:underline hover:text-yellow-400  uppercase">
                    HOME
                </a>
                <a href="#" class="text-white hover:underline hover:text-yellow-400  uppercase">
                    ABOUT US
                </a>
                <a href="/what-we-do" class="text-white hover:underline hover:text-yellow-400  uppercase">
                    WHAT WE DO
                </a>
                <a href="/our-work" class="text-white hover:underline hover:text-yellow-400  uppercase">
                    Our Work
                </a>
                <a href="#" class="text-white hover:underline hover:text-yellow-400  uppercase">
                    Donar
                </a>
                <a href="#" class="text-white hover:underline hover:text-yellow-400  uppercase">
                    CONTACT US
                </a>
            </nav>
            <a href="" class="bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded ">Donate Now</a>
        </div>
    </header>
    
    <!-- Header Section -->
    {{-- <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-6">
            <div class="text-xl font-bold">MKDF Foundation</div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/" class="text-gray-700 hover:text-blue-500">Home</a></li>
                    <li><a href="/our-work" class="text-gray-700 hover:text-blue-500">What We Do</a></li>
                    <li><a href="/our-work" class="text-gray-700 hover:text-blue-500">Our Work</a></li>
                    <li><a href="/about" class="text-gray-700 hover:text-blue-500">About Us</a></li>
                    <li><a href="/projects" class="text-gray-700 hover:text-blue-500">Projects</a></li>
                    <li><a href="/events" class="text-gray-700 hover:text-blue-500">Events</a></li>
                    <li><a href="/contact" class="text-gray-700 hover:text-blue-500">Contact</a></li>
                </ul>
            </nav>
            <a href="" class="bg-orange-500 text-white py-2 px-4 rounded ">Donate Now</a>
        </div>
    </header> --}}
    <div id="list-container" class="w-1/6 fixed right-7 z-10">
        <ul class="w-full">
            <li class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded mt-2 cursor-pointer" >
                <a href="/donate-kind">Donate Kind</a></li>
            <li class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded mt-2 cursor-pointer" ><a href="/dry-ration">Donate Dry Ration</a></li>
            <li class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded mt-2 cursor-pointer" onclick="showForm('medicine')">Donate Medicine</li>
            <li class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded mt-2 cursor-pointer" onclick="showForm('food')">Donate Food</li>
            <li class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded mt-2 cursor-pointer" onclick="showForm('books')">Donate Old Books</li>
        </ul>
    </div>
    
    <div id="popup-form-container" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-10">
        <div id="form-container" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md z-10"></div>
    </div>    
    @section('content')
    @show

    <!-- Footer Section -->
    <footer class="bg-blue-400 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 MKDF Foundation. All rights reserved.</p>
        </div>
    </footer>

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

    // Show the pop-up form
    popupContainer.classList.remove('hidden');
}

function closeForm() {
    const popupContainer = document.getElementById('popup-form-container');
    popupContainer.classList.add('hidden');
}


    </script>
</body>

</html>
