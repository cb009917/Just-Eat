<x-app-layout>

    <style>
        .green-button {
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            padding: 10px 20px; /* Padding */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Cursor style */
            font-size: 16px; /* Font size */
        }

        .green-button:hover {
            background-color: #45a049; /* Darker green on hover */
        }

    </style>
    <div class="container mx-auto mt-1">
<form  action="{{route('subscriptions.create')}}">
@csrf

    <div class="flex flex-wrap -mx-3 mb-6 mt-4">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Delivery Address
            </label>
            <input class="block w-full lg:w-3/4 xl:w-2/4 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" name="address" style="width: 500px">
            <p class="text-gray-600 text-xs italic">This will be used to deliver the meals</p>
        </div>
    </div>

    <div class="flex flex-wrap -mx-5 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                City
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="city">

        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Zip code
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" name="zip">
        </div>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
            Contact
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
    </div>

    <div class="flex flex-wrap -mx-3 mb-2">

        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                Delivery time
            </label>
            <div class="relative">
                <select class="block appearance-none w-3xl bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="time">
                    <option value="09:00 AM - 10:00 AM">09:00 AM - 10:00 AM</option>
                    <option value="11:00 AM - 12:00 AM">11:00 AM - 12:00 AM</option>
                    <option value="11:00 AM - 12:00 AM">11:00 AM - 12:00 AM</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                Delivery date
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" name="first_delivery_date" type="date">
        </div>
    </div>


    <button class="green-button" type="submit">Next</button>



</form>

        <script>
            function y() {
                localStorage.setItem('username', document.getElementById("first-name").value);
                localStorage.setItem('useremail', document.getElementById("email").value);
                localStorage.setItem('useraddress', document.getElementById("street-address").value);
                localStorage.setItem('date', document.getElementById("first_delivery_date").value);
                localStorage.setItem('time', document.querySelector("select[name='time']").value);
            }
        </script>
    </div>
</x-app-layout>
