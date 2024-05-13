<div>


        <div class="shock">
            <h2 class="mb-3"> 2. Customize your plan size</h2>


            <div id="serving" class="mb-4">
                <h4>Servings per meal</h4>
                <label id="r65">
                    <input type="radio" value="2" wire:click="serve2" name="serving">
                    <span id="r35" >2</span>
                </label>
                <label id="r65">
                    <input type="radio" value="4" wire:click="serve4" name="serving">
                    <span id="r35">4</span>
                </label>
            </div>


            <div id="number-meal" class="mb-4">
                <h4>Number of meals pre week</h4>
                <label id="r65">
                    <input type="radio" value="2" name="meal_number" wire:click="per2">
                    <span id="t35">2</span>
                </label>
                <label id="r65">
                    <input type="radio" value="4" name="meal_number" wire:click="per4">
                    <span id="t35">4</span>
                    <label id="r65">
                        <input type="radio" value="5" name="meal_number" wire:click="per5">
                        <span id="t35">5</span>
                    </label>
                    <label id="r65">
                        <input type="radio" value="6" name="meal_number" wire:click="per6">
                        <span id="t35">6</span>
                    </label>
            </div>
            <div id="bottem-box" class="border border-gray-300 p-3">
                <div class="price">
                    <label for="">Servings per meal</label>
                    <span id="servings"></span>
                    <br>
                    <label for="">Meals per week</label>
                    <span id="meals-per-week"></span>
                    <br>
                    <span id="selected-pref"></span>

                    <hr>
                    <label>Box Price</label>
                    <span id="Box-price"></span>
                    <br>
                    <label >service charge</label>
                    <span id="service-charge"></span>
                    <br>
                    <div class="total">
                        <label>Total price</label>
                        <span id="serving">{{ $TotalPrice }}</span>
                    </div>
                    <a href="subscription/user-information">
                    <button type="submit" class="btn btn-primary">Continue</button>
                    </a>

                </div>
            </div>


        </div>

</div>



<?php
session_start();
$_SESSION['total_price'] = $TotalPrice;
?>
