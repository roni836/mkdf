@extends('admin.adminBase')
@section('content')

<div class="  flex justify-center items-center h-[500px] mt-20">
    <div class="bg-gray-100 p-8 rounded-lg shadow-md w-full mt-20 max-w-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Add Banner Form</h2>
        <form action="#" method="POST" class="space-y-4 " id="addData">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <p id="error-title" class="text-red-500 text-xs font-semibold error-message"></p>
            </div>
            <div>
                <label for="closing_date" class="block text-sm font-medium text-gray-700">Closing Date</label>
                <input type="date" id="closing_date" name="closing_date"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <p id="error-closing_date" class="text-red-500 text-xs font-semibold error-message"></p>
            </div>
            <div>
                <select name="type" id="type" class="mt-1  w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm hidden">
                    <option value="2" selected>Home Page</option>
                </select>
            </div>
            <div>
                <label for="amount" class="block text-sm font-medium text-gray-700">Amount required</label>
                <input type="number" id="amount" name="amount"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <p id="error-amount" class="text-red-500 text-xs font-semibold error-message"></p>
            </div>
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" id="image" name="image" class="mt-1 block w-full rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <p id="error-image" class="text-red-500 text-xs font-semibold error-message"></p>
            </div>
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="1" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                <p id="error-description" class="text-red-500 text-xs font-semibold error-message"></p>
            </div>
            <div class="flex justify-between items-center">
                <label class="flex items-center text-sm font-medium text-gray-700">
                    <input type="checkbox" name="status" value='1' class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    <span class="ml-2">Want to active now.</span>
                </label>
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save Now</button>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Insert application details
        $("#addData").submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "{{ route('admin.heading.store') }}",
                data: formData,
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    swal("Success", response.message, "success");
                    $("#addData").trigger("reset");
                    window.open("/admin/manage-heading", "_self");
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
    })
</script>

@endsection
