@extends('home.homeBase')
@section('content')
    <div class=" mx-10 p-4  mt-[8.5rem]">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Main Content -->

            <div class="lg:col-span-3 flex flex-col justify-between h-full">
                <!-- Upper-side Content -->
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 mb-6">{{ $story->title }}</h1>
                    <p class="mb-4">{{ \Illuminate\Support\Str::limit($story->story, 200) }}</p>
                </div>
            
                <!-- Middle Content (optional) -->
                <div class="grid grid-cols-1 gap-4 mb-6">
                    <img src="{{ asset('image/story/' . $story->image) }}" alt="{{ $story->title }}" class="w-full h-auto object-cover rounded shadow">
                </div>
            
                <!-- Down-side Content -->
                <div>
                    <p class="mb-4">
                        {{ $story->story }}
                    </p>
                </div>
            </div>
            <div class="lg:col-span-1 space-y-4" id="callingStory">
                <a href="#" class="block p-4 bg-white shadow hover:bg-gray-50 rounded transition duration-150">
                    <div class="flex items-center space-x-4">
                        <img src="/images/sid5.webp" alt="Icon 1" class="w-12 h-12 object-cover rounded">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900">Spiritual Unity: Empowering Dharma Seekers
                            </h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    
    <script>
        $(document).ready(function() {
            // Function to fetch and display appointment
            let callingData = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('home.story') }}",
                    success: function(response) {
                        let table = $("#callingStory");
                        table.empty();
                        let data = response.data;

                        data.forEach((data,i) => {
                            table.append(`
                                    <a href="{{ url('/our-story/${data.slug}') }}" class="block p-4 bg-white shadow hover:bg-gray-50 rounded transition duration-150">
                                    <div class="flex items-center space-x-4">
                                        <img src="{{asset('/image/story/${data.image}')}}" alt="${data.title}" class="w-12 h-12 object-cover rounded">
                                        <div>
                                            <h2 class="text-lg font-semibold text-gray-900">${data.title.substring(0,20)}</h2>
                                        </div>
                                    </div>
                                </a>
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }

            $('#cancelEdit').click(function() {
                $('#default-modal').addClass('hidden');
            });
            callingData();
        });
    </script>
@endsection
