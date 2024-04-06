{{--<x-app-layout>--}}
{{--<div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">--}}


{{--    <div class="flex justify-start item-start space-y-2 flex-col">--}}
{{--      <h1 class="text-3xl  lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800" id="order_id"></h1>--}}
{{--      <p class="text-base  font-medium leading-6 text-gray-600" id="date_now"></p>--}}
{{--    </div>--}}

{{--        <div class="flex justify-center flex-col md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">--}}
{{--          <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">--}}
{{--            <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Summary</h3>--}}
{{--            <div class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">--}}
{{--              <div class="flex justify-between w-full">--}}
{{--                <p class="text-base dark:text-white leading-4 text-gray-800">Box price</p>--}}
{{--                <p class="text-base dark:text-gray-300 leading-4 text-gray-600" id="bprice"></p>--}}
{{--              </div>--}}

{{--              <div class="flex justify-between items-center w-full">--}}
{{--                <p class="text-base dark:text-white leading-4 text-gray-800">Service charge</p>--}}
{{--                <p class="text-base dark:text-gray-300 leading-4 text-gray-600">500</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="flex justify-between items-center w-full">--}}
{{--              <p class="text-base dark:text-white font-semibold leading-4 text-gray-800">Total</p>--}}
{{--              <p class="text-base dark:text-gray-300 font-semibold leading-4 text-gray-600" id="tprice"></p>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">--}}

{{--            <div class="flex justify-between items-start w-full">--}}
{{--              <div class="flex justify-center items-center space-x-4">--}}

{{--                <div class="flex flex-col justify-start items-center">--}}
{{--                    <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Customer</h3>--}}
{{--        <div class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">--}}
{{--          <div class="flex flex-col justify-start items-start flex-shrink-0">--}}
{{--            <div class="flex justify-center w-full md:justify-start items-center space-x-4 py-8 border-b border-gray-200">--}}

{{--              <div class="flex justify-start items-start flex-col space-y-2">--}}
{{--                <p class="text-base dark:text-white font-semibold leading-4 text-left text-gray-800" id="customer_name"></p>--}}
{{--                <p class="text-sm dark:text-gray-300 leading-5 text-gray-600">7648222149</p>--}}
{{--                <p class="text-sm dark:text-gray-300 leading-5 text-gray-600" id="customer_email"></p>--}}
{{--              </div>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--          <div class="flex justify-between xl:h-full items-stretch w-full flex-col mt-6 md:mt-0">--}}
{{--            <div class="flex justify-center md:justify-start xl:flex-col flex-col md:space-x-6 lg:space-x-8 xl:space-x-0 space-y-4 xl:space-y-12 md:space-y-0 md:flex-row items-center md:items-start">--}}
{{--              <div class ="mt-4 mb-4" >--}}
{{--                <h4 class="text-xl dark:text-white font-semibold leading-5 text-gray-800 mt-50">Shipping Address</h4>--}}
{{--                <h5 class="text-base dark:text-white font-semibold leading-5 text-gray-800 mt-50" id="customer_address"></h5>--}}
{{--              </div>--}}

{{--            </div>--}}
{{--            <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800 mt-50">First box delivered on</h3>--}}
{{--            <div class="w-8 h-8">--}}

{{--                <img class="w-full h-full" alt="logo" src="https://i.ibb.co/L8KSdNQ/image-3.png" />--}}
{{--              </div>--}}
{{--                  <p class="text-lg leading-6 dark:text-white font-semibold text-gray-800" id="ddate">SUN, JAN 20</p>--}}
{{--                    <span class="font-normal" id="dtime">BETWEEN 9.00AM - 2.00PM</span>--}}
{{--                </div>--}}
{{--              </div>--}}

{{--            </div>--}}

{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--    <script>--}}
{{--        document.getElementById("customer_name").innerText = localStorage.getItem('username');--}}
{{--        document.getElementById("customer_email").innerText = localStorage.getItem('useremail');--}}
{{--        document.getElementById("customer_address").innerText = localStorage.getItem('useraddress');--}}
{{--        document.getElementById("dtime").innerText = localStorage.getItem('time');--}}
{{--        document.getElementById("ddate").innerText = localStorage.getItem('date');--}}
{{--        document.getElementById("bprice").innerText = localStorage.getItem('box_price');--}}
{{--        document.getElementById("tprice").innerText = localStorage.getItem('total_price');--}}

{{--        var now = new Date();--}}
{{--        var day = now.getDate().toString().padStart(2, '0');--}}
{{--        var month = (now.getMonth() + 1).toString().padStart(2, '0');--}}
{{--        var year = now.getFullYear();--}}
{{--        var hours = now.getHours().toString().padStart(2, '0');--}}
{{--        var minutes = now.getMinutes().toString().padStart(2, '0');--}}
{{--        var dateTimeString = day + "/" + month + "/" + year + " " + hours + ":" + minutes;--}}
{{--        document.getElementById("date_now").textContent = dateTimeString;--}}

{{--        document.getElementById("order_id").innerHTML = "Order #" + parseInt(Math.random() * 100000);--}}
{{--    </script>--}}
{{--</x-app-layout>--}}

<x-app-layout>

<style>
    .card-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10rem;
        margin-top: 2rem;
    }

    .card {
        background-color: white;
        overflow: hidden;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 2rem;
    }

    /* Grid layout adjustments */
    .sm\:grid {
        display: grid;
    }

    .sm\:grid-cols-2 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .sm\:gap-4 {
        gap: 1rem;
    }

    .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }

    /* Additional styling for button */
    .bg-gradient-to-r {
        background: linear-gradient(to right, #4299e1, #3182ce);
    }

    .from-blue-400 {
        --gradient-color-stops: 100%;
    }

    .to-blue-600 {
        --gradient-color-stops: 0%;
    }

    .hover\:from-blue-500:hover {
        --gradient-color-stops: 100%;
    }

    .hover\:to-blue-700:hover {
        --gradient-color-stops: 0%;
    }

    .text-black {
        color: #000;
    }

    .font-bold {
        font-weight: 700;
    }

    .py-2 {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .rounded {
        border-radius: 0.375rem;
    }

    .shadow {
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }

</style>


    <div class=" card-container ">
<div class="w-full max-w-sm md:max-w-3xl xl:max-w-sm flex items-start flex-col gap-8 max-xl:mx-auto">
    <div class="card   p-6 border border-gray-200 rounded-3xl w-full group transition-all duration-500 hover:border-gray-400 " >
        <h2
            class="font-manrope font-bold text-3xl leading-10 text-black pb-6 border-b border-gray-200 ">
            Order Summary
        </h2>
        <div class="data py-6 border-b border-gray-200">
            <div class="flex items-center justify-between gap-4 mb-5">
                <p class="font-normal text-lg leading-8 text-gray-400 transition-all duration-500 group-hover:text-gray-700">Box price </p>
                <p class="font-medium text-lg leading-8 text-gray-900" id="bprice"></p>
            </div>
            <div class="flex items-center justify-between gap-4 mb-5">
                <p class="font-normal text-lg leading-8 text-gray-400 transition-all duration-500 group-hover:text-gray-700">Shipping</p>
                <p class="font-medium text-lg leading-8 text-gray-600">500</p>
            </div>
            <div class="flex items-center justify-between gap-4 ">
                <p class="font-normal text-lg leading-8 text-gray-400 transition-all duration-500 group-hover:text-gray-700 ">Coupon Code</p>
                <p class="font-medium text-lg leading-8 text-emerald-500">#APPLIED</p>
            </div>
        </div>
        <div class="total flex items-center justify-between pt-6">
            <p class="font-normal text-xl leading-8 text-black ">Subtotal</p>
            <h5 class="font-manrope font-bold text-2xl leading-9 text-indigo-600" id="tprice"></h5>
        </div>
    </div>
</div>



    <div class=" card  bg-white overflow-hidden shadow rounded-lg border w-65 " >
        <div class="px-4 py-3 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Customer information
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                This is some information about the user.
            </p>
        </div>
        <div class="border-t border-gray-200 px-2 py-2 sm:p-0 grid grid-template-columns: repeat(3, 1fr);">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                    <div class="py-3">
                        <dt class="text-sm font-medium text-gray-500">
                            Full name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900" id="customer_name">
                            <!-- Full name field content goes here -->
                        </dd>
                    </div>
                    <div class="py-3">
                        <dt class="text-sm font-medium text-gray-500">
                            Email address
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900" id="customer_email">
                            <!-- Email address field content goes here -->
                        </dd>
                    </div>
                    <div class="py-3">
                        <dt class="text-sm font-medium text-gray-500">
                            Phone number
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900" id="customer_phone">
                            <!-- Phone number field content goes here -->
                        </dd>
                    </div>
                    <div class="py-3">
                        <dt class="text-sm font-medium text-gray-500">
                            First box delivered on
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900" id="ddate">
                            <!-- Delivery date field content goes here -->
                        </dd>
                    </div>
                    <div class="py-3">
                        <dt class="text-sm font-medium text-gray-500">
                            Address
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900" id="customer_address">
                            <!-- Address field content goes here -->
                        </dd>
                    </div>
                </div>
            </dl>

        </div>


        <a href="select-menu">
            <button class="bg-gradient-to-r from-blue-400 to-blue-600 hover:from-blue-500 hover:to-blue-700 text-black font-bold py-2 px-4 rounded shadow" >
                Continue
            </button>
</a>

        </div>
    </div>
    </div>

        <script>
            document.getElementById("customer_name").innerText = localStorage.getItem('username');
            document.getElementById("customer_email").innerText = localStorage.getItem('useremail');
             document.getElementById("customer_address").innerText = localStorage.getItem('useraddress');
          //  document.getElementById("dtime").innerText = localStorage.getItem('time');
             document.getElementById("ddate").innerText = localStorage.getItem('date');
            document.getElementById("bprice").innerHTML = localStorage.getItem('box_price');
            document.getElementById("tprice").innerText = localStorage.getItem('total_price');

            var now = new Date();
            var day = now.getDate().toString().padStart(2, '0');
            var month = (now.getMonth() + 1).toString().padStart(2, '0');
            var year = now.getFullYear();
            var hours = now.getHours().toString().padStart(2, '0');
            var minutes = now.getMinutes().toString().padStart(2, '0');
            var dateTimeString = day + "/" + month + "/" + year + " " + hours + ":" + minutes;
            document.getElementById("date_now").textContent = dateTimeString;

            document.getElementById("order_id").innerHTML = "Order #" + parseInt(Math.random() * 100000);
        </script>
</x-app-layout>
