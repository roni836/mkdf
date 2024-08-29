@extends('admin.adminBase')
@section('content')

<div class="  flex justify-center items-center h-[500px] mt-20">
    <div class="bg-gray-100 p-8 rounded-lg shadow-md w-full mt-20 max-w-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Add Donation Form</h2>
        <form action="#" method="POST" class="space-y-4 " id="addData">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" id="name" name="name"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <p id="error-name" class="text-red-500 text-xs font-semibold error-message"></p>

            </div>
            <div>
                <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile Number</label>
                <input type="tel" id="mobile" name="mobile"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <p id="error-mobile" class="text-red-500 text-xs font-semibold error-message"></p>
            </div>
            <div>
                <label for="amount" class="block text-sm font-medium text-gray-700">Donation Amount</label>
                <input type="number" id="amount" name="amount" min="1"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <p id="error-quantity" class="text-red-500 text-xs font-semibold error-message"></p>
            </div>
            <div>
                <label for="amount" class="block text-sm font-medium text-gray-700">Donating For</label>
                <select name="donating_for" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm capitalize" id="donating_for">
                    <option value="" >Select Type</option>
                    <option value="donate dry ration">donate dry ration</option>
                    <option value="donate medicine">donate medicine</option>
                    <option value="donate food">donate food</option>
                    <option value="donate books">donate books</option>
                    <option value="donate in kind">donate in kind</option>
                    <option value="other">other</option>
                </select>
                <p id="error-quantity" class="text-red-500 text-xs font-semibold error-message"></p>
            </div>
            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <textarea id="address" name="address" rows="1" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                <p id="error-address" class="text-red-500 text-xs font-semibold error-message"></p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" name="message" id="message" placeholder="Enter any message"></textarea>
                <div class="text-red-500 text-xs italic error-message" id="error-message"></div>
            </div>
            
            <div class="flex justify-between items-center">
                <label class="flex items-center text-sm font-medium text-gray-700">
                    <input type="checkbox" name="show_data" value='1' class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    <span class="ml-2">Want to show your donation details publically</span>
                </label>
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Confirm Donation</button>
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
                url: "{{ route('donation.store') }}",
                data: formData,
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    swal("Success", response.message, "success");
                    $("#addData").trigger("reset");
                    window.open("/admin/manage-donation", "_self");
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
