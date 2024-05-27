<x-app-layout>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Most Popular Items</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">

                                <h6 class="mt-n1 mb-0">Breakfast</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            <div class="ps-3">

                                <h6 class="mt-n1 mb-0">Launch</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">

                                <h6 class="mt-n1 mb-0">Dinner</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">

                        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">

                            <div class="border-b mb-5 flex justify-between text-sm">
                                <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-600 uppercase">
                                    <svg class="h-6 mr-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.005 455.005"
                                         style="enable-background:new 0 0 455.005 455.005;" xml:space="preserve">


                                </div>


                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-20">

                                    <!-- CARD 1 -->
                                    @foreach($products as $value)
                                    <div class="rounded overflow-hidden shadow-lg flex flex-col">
                                        <a href="#"></a>
                                        <div class="relative"><a href="#">
                                                <img class="w-full"
                                                     style="height: 270px"
                                                     src="{{$value->imageget()}}"
                                                     alt="Sunset in the mountains">
                                                <div
                                                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                                </div>
                                            </a>
                                            <a href="#!">
                                                <div
                                                    class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                                    Lunch
                                                </div>
                                            </a>
                                        </div>
                                        <div class="px-6 py-4 mb-auto">
                                            <a href="#"
                                               class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                                                {{$value->name}}</a>
                                            <p class="text-gray-500 text-sm">
                                                {{$value->description}}
                                            </p>
                                        </div>
                                        <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">

                                            <span class="text-primary text-2xl">{{$value->price}}</span>

                                            <a href="{{route('add_to_cart', $value->id)}}" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                                             <button class="px-6 py-2 text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 rounded-lg shadow-lg transition ease-in-out duration-150">Buy Now</button>
                                            </a>
                                        </div>
                                    </div>

                                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- Menu End -->




</x-app-layout>
