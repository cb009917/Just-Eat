<?php

namespace App\Livewire;

use Livewire\Component;

class PriceCalculator extends Component
{
        public $serving = 2;
        public $TotalPrice = 2000;

        public function serve2()
        {
            $this->TotalPrice=2000;
            $this->serving =2;
        }

        public function serve4(){
            $this->TotalPrice = ($this->TotalPrice) * 2;
            $this->serving = 4;
        }

        public function per2(){
            $this->TotalPrice=2000;
}

    public function per4(){
        $this->TotalPrice = ($this->TotalPrice)*2;
    }
    public function per5(){
        $this->TotalPrice=5000;
    }
    public function per6(){
        $this->TotalPrice=6000;
    }

    public function up(){
            $this->servings = 4;
    }
    public function render()
    {

        return view('livewire.price-calculator');
    }
}
