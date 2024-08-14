@extends('home.homeBase')
@section('content')


 <!-- Header Section -->
 <section class="text-center py-16 bg-white">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-4">Hello. Our company has been present for over 20 years in the world.</h1>
        <p class="text-2xl">We make the best to help everyone.</p>
    </div>
</section>

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

<!-- Gallery Section -->
<section class="grid grid-cols-5 gap-2 px-12 py-10">
    <img class="w-full h-56 object-cover" src="https://via.placeholder.com/200" alt="Image 1">
    <img class="w-full h-56 object-cover" src="https://via.placeholder.com/200" alt="Image 2">
    <img class="w-full h-56 object-cover" src="https://via.placeholder.com/200" alt="Image 3">
    <img class="w-full h-56 object-cover" src="https://via.placeholder.com/200" alt="Image 4">
    <img class="w-full h-56 object-cover" src="https://via.placeholder.com/200" alt="Image 5">
    <img class="w-full h-56 object-cover" src="https://via.placeholder.com/200" alt="Image 6">
    <img class="w-full h-56 object-cover" src="https://via.placeholder.com/200" alt="Image 7">
    <img class="w-full h-56 object-cover" src="https://via.placeholder.com/200" alt="Image 8">
    <img class="w-full h-56 object-cover" src="https://via.placeholder.com/200" alt="Image 9">
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
                        <iframe width="100%" height="315" src="https://youtube.com/shorts/7DWmTPcfa3I?si=-ukoHuRyCcK_d3Je" frameborder="0" allowfullscreen></iframe>
                    </div>
                    {{-- <h3 class="mt-4 text-xl font-semibold text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, suscipit!</h3>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fuga iure dolorum. Possimus inventore dolores molestiae, ad quos magni velit ab enim reiciendis! Quis quas recusandae aliquid aliquam facere repellendus eos in placeat tempore eius saepe quidem sit inventore.</p> --}}
                    <a href="${video.link}" target="_blank" rel="noopener noreferrer" class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <div class='text-center'>
                        <iframe width="100%" height="315" src="https://youtube.com/shorts/7DWmTPcfa3I?si=-ukoHuRyCcK_d3Je" frameborder="0" allowfullscreen></iframe>
                    </div>
                    {{-- <h3 class="mt-4 text-xl font-semibold text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, suscipit!</h3>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fuga iure dolorum. Possimus inventore dolores molestiae, ad quos magni velit ab enim reiciendis! Quis quas recusandae aliquid aliquam facere repellendus eos in placeat tempore eius saepe quidem sit inventore.</p> --}}
                    <a href="${video.link}" target="_blank" rel="noopener noreferrer" class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <div class='text-center'>
                        <iframe width="100%" height="315" src="https://youtube.com/shorts/7DWmTPcfa3I?si=-ukoHuRyCcK_d3Je" frameborder="0" allowfullscreen></iframe>
                    </div>
                    {{-- <h3 class="mt-4 text-xl font-semibold text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, suscipit!</h3>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fuga iure dolorum. Possimus inventore dolores molestiae, ad quos magni velit ab enim reiciendis! Quis quas recusandae aliquid aliquam facere repellendus eos in placeat tempore eius saepe quidem sit inventore.</p> --}}
                    <a href="${video.link}" target="_blank" rel="noopener noreferrer" class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <div class='text-center'>
                        <iframe width="100%" height="315" src="https://youtube.com/shorts/7DWmTPcfa3I?si=-ukoHuRyCcK_d3Je" frameborder="0" allowfullscreen></iframe>
                    </div>
                    {{-- <h3 class="mt-4 text-xl font-semibold text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, suscipit!</h3>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fuga iure dolorum. Possimus inventore dolores molestiae, ad quos magni velit ab enim reiciendis! Quis quas recusandae aliquid aliquam facere repellendus eos in placeat tempore eius saepe quidem sit inventore.</p> --}}
                    <a href="${video.link}" target="_blank" rel="noopener noreferrer" class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <div class='text-center'>
                        <iframe width="100%" height="315" src="https://youtube.com/shorts/7DWmTPcfa3I?si=-ukoHuRyCcK_d3Je" frameborder="0" allowfullscreen></iframe>
                    </div>
                    {{-- <h3 class="mt-4 text-xl font-semibold text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, suscipit!</h3>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fuga iure dolorum. Possimus inventore dolores molestiae, ad quos magni velit ab enim reiciendis! Quis quas recusandae aliquid aliquam facere repellendus eos in placeat tempore eius saepe quidem sit inventore.</p> --}}
                    <a href="${video.link}" target="_blank" rel="noopener noreferrer" class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <div class='text-center'>
                        <iframe width="100%" height="315" src="https://youtube.com/shorts/7DWmTPcfa3I?si=-ukoHuRyCcK_d3Je" frameborder="0" allowfullscreen></iframe>
                    </div>
                    {{-- <h3 class="mt-4 text-xl font-semibold text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, suscipit!</h3>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fuga iure dolorum. Possimus inventore dolores molestiae, ad quos magni velit ab enim reiciendis! Quis quas recusandae aliquid aliquam facere repellendus eos in placeat tempore eius saepe quidem sit inventore.</p> --}}
                    <a href="${video.link}" target="_blank" rel="noopener noreferrer" class="mt-4 inline-block text-indigo-600 hover:underline">Watch on YouTube</a>
                </div>
            </div>
        </section>
    </main>
</div>

<!-- Stats Section -->
<section class="mb-20 bg-cover bg-center py-16" style="background-image: url('{{ asset('images/breadcrum-image.jpg') }}');">
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

@endsection