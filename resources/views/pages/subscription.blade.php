<x-app-layout>

    <h1 class="main-top">Personolize your plan</h1>

<div class="meal-plan">
  <div class="meal-plan-in">
    <div class="x86">
     <h2> 1. Select your preference</h2>
    <div class="preference">

    <div >
      <button id="r335" class="preference-button" value="meat">
        <img src="icons/meat.png" alt="">
        <h5>Meat</h5>
      </button>
    </div>

    <div>
      <button id="r335" class="preference-button" value="keto">
            <img src="icons/keto.png" alt="">
            <h5>Keto</h5>
      </button>
    </div>
        </label>

      <div>
        <button id="r335" class="preference-button" value="vegan">

            <img src="icons/vegan.png" alt="">
            <h5>Vegan</h5>
        </button>
      </div>


        <div>
          <button id="r335" class="preference-button" value="fish">

          <img src="icons/fish.png" alt="">
          <h5>Pescatarian</h5>
          </button>
        </div>
        <div>
          <button id="r335" class="preference-button" value="gluten">
          <img src="icons/gluten-free.png" alt="">
          <h5>Gluten free</h5>
          </button>
        </div>

        <div >
          <button id="r335" class="preference-button" value="family">

          <img src="icons/family.png" alt="">
          <h5>Family frindly</h5>
          </button>
        </div>
      </div>
      </div>
  </div>


  <div class="shock">
      <h2 class="mb-3"> 2. Customize your plan size</h2>


      <div id="serving" class="mb-4">
        <h4>Servings per meal</h4>
        <label id="r65">
            <input type="radio" value="2" name="serving">
            <span id="r35">2</span>
        </label>
        <label id="r65">
          <input type="radio" value="4" name="serving">
          <span id="r35">4</span>
      </label>
      </div>


      <div id="number-meal" class="mb-4">
        <h4>Number of meals pre week</h4>
        <label id="r65">
            <input type="radio" value="2" name="meal-number">
            <span id="t35">2</span>
        </label>
        <label id="r65">
          <input type="radio" value="4" name="meal-number">
          <span id="t35">4</span>
          <label id="r65">
            <input type="radio" value="5" name="meal-number">
            <span id="t35">5</span>
          </label>
            <label id="r65">
              <input type="radio" value="6" name="meal-number">
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
      <span id="total"></span>
      </div>
          <button onclick="window.location.href='/info'" class="btn btn-primary">Continue</button>
    </div>
    </div>


     </div>
    </div>


      <script>

        // Get all serving buttons and meal number buttons
const servingButtons = document.querySelectorAll('#serving input[type="radio"]');
const mealNumberButtons = document.querySelectorAll('#number-meal input[type="radio"]');
const selectedServingSpan = document.getElementById('servings');
const selectedMealNumberSpan = document.getElementById('meals-per-week');

let selectedServing;
let selectedMealNumber;
let bprice = 0;
let tprice = 500;
function updateSelectedValues() {
  selectedServing = Array.from(servingButtons).find(btn => btn.checked);
  selectedMealNumber = Array.from(mealNumberButtons).find(btn => btn.checked);

  selectedServingSpan.textContent = (selectedServing.value);
  selectedMealNumberSpan.textContent = (selectedMealNumber.value);
  document.getElementById('service-charge').innerHTML = "500";


    // switch (selectedMealNumber.value) {
    //     case 2:
    //         tprice = 500;
    //         break;
    //     case 4:
    //         tprice = 1000;
    //         break;
    //     case 5:
    //         tprice = 1500;
    //         break;
    //     case 6:
    //         tprice = 2000;
    //         break;
    // }



    // Calculating box  price

    bprice = parseInt(selectedMealNumber.value) * 1000;

    // Calculating total price

    if(selectedServing.value == 4) {
        bprice = bprice * 2;
        tprice = bprice;
    }
    else{
        tprice = bprice;
    }



  document.getElementById('Box-price').innerHTML = bprice;
  localStorage.setItem('box_price', bprice);
  document.getElementById('total').innerHTML = tprice;
    localStorage.setItem('total_price', tprice);


}

// Add click event listeners to serving buttons
servingButtons.forEach(button => {
  button.addEventListener('click', updateSelectedValues);
});

// Add click event listeners to meal number buttons
mealNumberButtons.forEach(button => {
  button.addEventListener('click', updateSelectedValues);
});


        const buttons = document.querySelectorAll('.preference-button');
        const selectedPreferences = document.getElementById('selected-pref');



        buttons.forEach(button => {
          button.addEventListener('click', () => {

            button.classList.toggle('active');

      const activeButtons = Array.from(document.querySelectorAll('.preference-button.active'));
      const selectedValues = activeButtons.map(btn => btn.value);


      selectedPreferences.textContent = 'Selected Preferences: ' + selectedValues.join(', ');
          });
        });

        const boxprice = document.getElementById('box-price');


        var price = 0;



// Assuming 'boxprice' is an element with the id 'boxprice'
document.getElementById('box-price').textContent = price.toFixed(2);


        localStorage.setItem('date', document.getElementById("first_delivery_date").value);






      </script>

    <?php

    session_start();
    function updateSelectedValues() {
        // Your JavaScript code...
        $_SESSION['box_price'] = $bprice;
        $_SESSION['total_price'] = $tprice;
    }
    ?>


</x-app-layout>
