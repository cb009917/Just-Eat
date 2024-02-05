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
                                <small class="text-body">Popular</small>
                                <h6 class="mt-n1 mb-0">Breakfast</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Special</small>
                                <h6 class="mt-n1 mb-0">Launch</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Lovely</small>
                                <h6 class="mt-n1 mb-0">Dinner</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/Berry bliss.jpeg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Berry Bliss Acai Bowl</span>
                                            <span class="text-primary">Rs.1800</span>
                                        </h5>
                                        <small class="fst-italic">Acai puree, Mixed berries, Granola, Coconut flakes, Chia seeds, Honey drizzle</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/fetta omelette.jpeg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Sunny Spinach and Feta Omelette</span>
                                            <span class="text-primary">Rs.1650</span>
                                        </h5>
                                        <small class="fst-italic">Eggs, Fresh spinach, Feta cheese, Cherry tomatoes, Red onions, Fresh herbs</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/seed pudding.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Power-Packed Chia Seed Pudding</span>
                                            <span class="text-primary">Rs.1600</span>
                                        </h5>
                                        <small class="fst-italic">Scrambled eggs, Black beans, Salsa, Avocado slices, Whole grain tortilla, Shredded cheese</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/avocado toast.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Avocado Toast Extravaganza</span>
                                            <span class="text-primary">Rs.2200</span>
                                        </h5>
                                        <small class="fst-italic">Whole grain toast, Mashed avocado, Smoked salmon, Poached egg, Everthing bagel seasoning</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/banana oats.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Banana Nut Overnight Oats</span>
                                            <span class="text-primary">Rs.1800</span>
                                        </h5>
                                        <small class="fst-italic">Rolled oats, Almond milk, Banana slices, Chopped nuts, Maple syrup, Cinnamon</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/burrito.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Protein-Packed Breakfast Burrito</span>
                                            <span class="text-primary">Rs.2400</span>
                                        </h5>
                                        <small class="fst-italic">Scrambled eggs, Black beans, Salsa, Avocado slices, Whole grain tortilla, Shredded cheese</small>
                                    </div>
                                </div>
                            </div>
                            
                                
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/launch-salad.webp" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Mediterranean Quinoa Salad</span>
                                            <span class="text-primary">Rs.2200</span>
                                        </h5>
                                        <small class="fst-italic">Quinoa, cherry tomatoes, cucumber, Kalamata olives, feta cheese, red onion, olive oil, lemon juice, salt, and pepper</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/chickpea-salad.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Caprese Chickpea Wrap</span>
                                            <span class="text-primary">Rs.2600</span>
                                        </h5>
                                        <small class="fst-italic">Chickpeas, cherry tomatoes, fresh mozzarella, basil, balsamic glaze, whole-grain wrap.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/peanut-noodles.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Thai-Inspired Peanut Noodle Bowl</span>
                                            <span class="text-primary">Rs.1750</span>
                                        </h5>
                                        <small class="fst-italic">Rice noodles, broccoli, carrots, bell peppers, tofu or chicken, peanuts, cilantro, lime, soy sauce, peanut sauce</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/veggie-panini.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Italian-Inspired Veggie Panini</span>
                                            <span class="text-primary">Rs.1100</span>
                                        </h5>
                                        <small class="fst-italic">Whole-grain bread, eggplant, zucchini, bell peppers, mozzarella cheese, pesto</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/Caesar-Salad.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Classic Caesar Salad with Grilled Chicken</span>
                                            <span class="text-primary">Rs.1350</span>
                                        </h5>
                                        <small class="fst-italic">Romaine lettuce, grilled chicken, croutons, Parmesan cheese, Caesar dressing</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/buddha-bowl.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Vegetarian Buddha Bowl</span>
                                            <span class="text-primary">Rs.1450</span>
                                        </h5>
                                        <small class="fst-italic">Quinoa, roasted sweet potatoes, chickpeas, kale, avocado, tahini dressing</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/cherry-noodles.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Pesto Zucchini Noodles with Cherry Tomatoes</span>
                                            <span class="text-primary">Rs.1275</span>
                                        </h5>
                                        <small class="fst-italic">Zucchini, cherry tomatoes, homemade pesto (basil, pine nuts, garlic, Parmesan cheese, olive oil)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/Chicken-Stir-Fry.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Stir-Fry with rice</span>
                                            <span class="text-primary">Rs.1550</span>
                                        </h5>
                                        <small class="fst-italic">Chicken breast, broccoli, bell peppers, carrots, soy sauce, teriyaki sauce, Rice, garlic, ginger, sesame oil</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Spinach and Feta Stuffed Chicken Breast</span>
                                            <span class="text-primary">Rs.1775</span>
                                        </h5>
                                        <small class="fst-italic">Chicken breast, spinach, feta cheese, garlic, olive oil, salt, and peppe</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/chicken-kottu.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Kottu</span>
                                            <span class="text-primary">Rs.1450</span>
                                        </h5>
                                        <small class="fst-italic">Roti pieces, mixed vegetables (carrots, leeks, cabbage), curry leaves, spices, soy sauce, Rosted chicken</small>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->
    
</x-app-layout>