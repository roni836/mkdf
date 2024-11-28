@extends('home.homeBase')
<style>
    /* Hide the modal initially */
    .hidden {
        display: none;
    }
</style>
@section('content')
    <div class="max-w-7xl bg-slate-100 mx-auto mt-[8.5rem]">
        <div class="text-center mb-12">
            <h2 class=" text-3xl lg:text-5xl  font-bold text-gray-900">
                Our Gallery
            </h2>
            </h2>
            <p class="mt-4 max-w-2xl mx-auto text-sm sm:text-xl text-zinc-400">
                Welcome to our Gallery <br> A collection of memories and moments of our journey.
            </p>
        </div>

        <div class="grid grid-cols-4 w-full gap-5">
            @foreach ($photo as $item)
                <div class="relative group">
                    <img class="w-full h-64 object-cover rounded-md shadow-lg transform transition duration-300 hover:scale-105"
                        src="{{ asset('gallery/image/' . $item->image) }}" alt="Gallery Image 1">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg flex items-center justify-center">
                        <h3 class="text-white text-lg font-bold">{{ $item->title }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="text-center my-12">
        <h2 class=" text-3xl lg:text-5xl  font-bold text-gray-900">
            Our Videos
        </h2>
        </h2>
        <p class="mt-4 max-w-2xl mx-auto text-sm sm:text-xl text-zinc-400">
            Welcome to our Video <br> A collection of memories and moments of our journey.
        </p>
    </div>


    <div class="bg-gray-100 text-gray-800">
        <main class="container mx-auto px-6 py-12">
            <section class="mt-12 ">
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3" id="callingData">
                </div>
            </section>
        </main>
    </div>

    </div>

    <script>
        $(document).ready(function() {
            // Function to fetch and display YouTube video data
            let fetchYouTubeData = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('video.index.all') }}", // Replace with your route to fetch YouTube video data
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
                                <h3 class="mt-4 text-xl font-semibold text-gray-900">${video.title.substring(0, 50)}..</h3>
                                <p class="mt-2 text-gray-600">${video.description.substring(0, 200)}..</p>
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


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const viewDetailsBtns = document.querySelectorAll('.view-details-btn');
            const popupModal = document.getElementById('popup-modal');
            const closePopup = document.getElementById('close-popup');

            viewDetailsBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const itemId = this.getAttribute('data-item-id');
                    const carouselItems = document.querySelectorAll('[data-carousel-item]');

                    // Hide all carousel items
                    carouselItems.forEach(item => item.classList.add('hidden'));

                    // Show the selected carousel item
                    const selectedItem = document.querySelector(
                        `[data-carousel-item] img[src*="${itemId}"]`).closest(
                        '[data-carousel-item]');
                    selectedItem.classList.remove('hidden');

                    popupModal.classList.remove('hidden');
                });
            });


            // Close the popup when the "Close" button is clicked
            closePopup.addEventListener('click', function() {
                popupModal.classList.add('hidden');
            });

            // Close the popup when clicking outside the modal
            window.addEventListener('click', function(event) {
                if (event.target === popupModal) {
                    popupModal.classList.add('hidden');
                }
            });
        });
    </script>


    <script>
        // Toggle full text on "Read more" click
        document.getElementById('read-more').addEventListener('click', function() {
            const detailsText = document.getElementById('details-text');
            const readMoreButton = document.getElementById('read-more');

            if (detailsText.classList.contains('line-clamp-5')) {
                detailsText.classList.remove('line-clamp-5');
                readMoreButton.textContent = 'Read less';
            } else {
                detailsText.classList.add('line-clamp-5');
                readMoreButton.textContent = 'Read more';
            }
        });

        // Close the popup modal
        document.getElementById('close-popup').addEventListener('click', function() {
            document.getElementById('popup-modal').classList.add('hidden');
        });
    </script>
@endsection
