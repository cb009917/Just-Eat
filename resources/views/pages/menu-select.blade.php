<x-app-layout>

    <style>
        /* Styles for the "Add" button */
        .add-button {
            background-color:#50C878; /* Green background color */
            color: white; /* White text color */
            font-weight: bold; /* Bold text */
            padding: 8px 30px; /* Padding */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Cursor style */
            transition: background-color 0.3s; /* Smooth transition for hover effect */
        }

        /* Hover effect */
        .add-button:hover {
            background-color: #45a049; /* Darker shade of green on hover */
        }

    </style>
        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">

            <div class="border-b mb-5 flex justify-between text-sm">
                <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-600 uppercase">
                    <svg class="h-6 mr-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.005 455.005"
                         style="enable-background:new 0 0 455.005 455.005;" xml:space="preserve">


                </div>


                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-20">

                    @foreach($dish as $value)
                    <!-- CARD 1 -->
                    <div class="rounded overflow-hidden shadow-lg flex flex-col m-3">
                        <a href="#"></a>
                        <div class="relative">
                            <a href="#">
                                <img class="w-full" style="height: 270px" src="img/Berry Bliss.jpg" alt="Sunset in the mountains">
                                <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                </div>
                            </a>
                            <a href="#!">
                                <div class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                    Lunch
                                </div>
                            </a>
                        </div>
                        <div class="px-6 py-4 mb-auto">
                            <a href="#" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">{{$value->name}}</a>
                            <p class="text-gray-500 text-sm">
                               {{$value->description}}
                            </p>
                        </div>
                        <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                            <span class="text-primary text-2xl">{{$value->price}}</span>
                            <a href="{{route('add', $value->id)}}" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <button class="add-button" id="button" data-id="{{ $value->id }}">Add</button>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>




            <a href="{{ route('checkout') }}">
                <button class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                    Continue
                </button>
            </a>

        </div>

    <!-- Include jQuery if you haven't already -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $('.add-button').click(function(e){
                e.preventDefault(); // Prevent the default action
                var button = $(this); // Reference to the clicked button
                var productId = button.data('id'); // Get the product ID from data attribute

                $.ajax({
                    url: '/add/' + productId,
                    method: 'POST',
                    success: function(response){

                        button.text('Added'); // Change button text to "Added"
                        button.css('background-color', 'gray'); // Change button color to gray
                        button.prop('disabled', true); // Make button unclickable
                    },
                    error: function(error){
                        $('#cart-message').text('Failed to add product to cart.');
                    }
                });
            });
        });
    </script>


</x-app-layout>


