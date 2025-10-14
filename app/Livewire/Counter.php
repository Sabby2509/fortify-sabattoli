<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
     public $counter = 0;

public function increase()
    {
        $this->counter++;
    }
    public function decrease()
    {
        $this->counter--;
    }

    public function increaseByNumber($number){
        $this->counter += $number;
    }
     public function decreaseByNumber($number){
        $this->counter -= $number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
