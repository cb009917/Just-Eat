<x-app-layout>

    <h1 class="main-top">Personolize your plan</h1>

<div class="meal-plan">
  <div class="meal-plan-in">
    <div class="x86">
     <h2> 1. Select your preference</h2>
    <div class="preference">

    <div >
      <button id="r335" class="preference-button" value="meat">
        <img src="{{url('icons/meat.png')}}" alt="">
        <h5>Meat</h5>
      </button>
    </div>

    <div>
      <button id="r335" class="preference-button" value="keto">
            <img src="{{url('icons/keto.png')}}" alt="">
            <h5>Keto</h5>
      </button>
    </div>
        </label>

      <div>
        <button id="r335" class="preference-button" value="vegan">

            <img src="{{url('icons/vegan.png')}}" alt="">
            <h5>Vegan</h5>
        </button>
      </div>


        <div>
          <button id="r335" class="preference-button" value="fish">

          <img src="{{url('icons/fish.png')}}" alt="">
          <h5>Pescatarian</h5>
          </button>
        </div>
        <div>
          <button id="r335" class="preference-button" value="gluten">
          <img src="{{url('icons/gluten-free.png')}}" alt="">
          <h5>Gluten free</h5>
          </button>
        </div>

        <div >
          <button id="r335" class="preference-button" value="family">

          <img src="{{url('icons/family.png')}}" alt="">
          <h5>Family frindly</h5>
          </button>
        </div>
      </div>
      </div>
  </div>

   @livewire('price-calculator')
    </div>

      <script>

        // Get all serving buttons and meal number buttons
const servingButtons = document.querySelectorAll('#serving input[type="radio"]');
const mealNumberButtons = document.querySelectorAll('#number-meal input[type="radio"]');
const selectedServingSpan = document.getElementById('servings');
const selectedMealNumberSpan = document.getElementById('meals-per-week');


function updateSelectedValues() {
  selectedServing = Array.from(servingButtons).find(btn => btn.checked);
  selectedMealNumber = Array.from(mealNumberButtons).find(btn => btn.checked);

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
// document.getElementById('box-price').textContent = price.toFixed(2);
// localStorage.setItem('date', document.getElementById("first_delivery_date").value);






      </script>




</x-app-layout>
