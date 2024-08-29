@extends('admin.adminBase')
@section('content')
    <div class="  flex justify-center items-center mt-20">
        <div class="bg-gray-100 p-8 rounded-lg shadow-md w-full max-w-lg ">
            <h2 class="text-2xl font-bold mb-6 text-center">Add donation concern Form</h2>
            <form action="#" method="POST" class="space-y-3 " id="addData">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <p id="error-name" class="text-red-500 text-xs font-semibold error-message"></p>

                </div>
                <div>
                    <label for="father" class="block text-sm font-medium text-gray-700">Father's Name</label>
                    <input type="text" id="father" name="father"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <p id="error-name" class="text-red-500 text-xs font-semibold error-message"></p>

                </div>
                <div>
                    <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile No.</label>
                    <input type="tel" id="mobile" name="mobile"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <p id="error-name" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div class="flex gap-5">
                <div>
                    <label for="id_number" class="block text-sm font-medium text-gray-700">Id Proof No.</label>
                    <input type="text" id="id_number" name="id_number"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <p id="error-name" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div>
                    <label for="id_proof" class="block text-sm font-medium text-gray-700">Upload Id Proof</label>
                    <input type="file" id="id_proof" name="id_proof" multiple 
                        class="block w-full px-3 py-2 ">
                    <p id="error-quantity" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                </div>
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" id="address" name="address"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <p id="error-name" class="text-red-500 text-xs font-semibold error-message"></p>

                </div>
                <div>
                    <label for="amount" class="block text-sm font-medium text-gray-700">Amount Required</label>
                    <input type="number" id="amount" name="amount" min="1"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <p id="error-quantity" class="text-red-500 text-xs font-semibold error-message"></p>
                </div>
                <div class="flex gap-5">
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                        <input type="file" id="image" name="image" multiple 
                            class="mt-1 block w-full px-3 py-2 ">
                        <p id="error-quantity" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                    <div>
                        <label for="document" class="block text-sm font-medium text-gray-700">Upload All medical documents</label>
                        <input type="file" id="document" name="document" multiple 
                            class="mt-1 block w-full px-3 py-2">
                        <p id="error-quantity" class="text-red-500 text-xs font-semibold error-message"></p>
                    </div>
                </div>
                <div>
                    <label for="heading" class="block text-sm font-medium text-gray-700">Heading</label>
                    <input type="text" id="heading" name="heading"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <p id="error-name" class="text-red-500 text-xs font-semibold error-message"></p>

                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                        name="description" id="description" placeholder="Enter any message"></textarea>
                    <div class="text-red-500 text-xs italic error-message" id="error-message"></div>
                </div>
                <div>
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Confirm
                        Donation</button>
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
                    url: "{{ route('donation.concern.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Success", response.message, "success");
                        $("#addData").trigger("reset");
                        window.open("/admin/manage-donation-page", "_self");
                    },
                    error: function(xhr) {
                        $('.error-message').html('');
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $('.error-message').html('');
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
