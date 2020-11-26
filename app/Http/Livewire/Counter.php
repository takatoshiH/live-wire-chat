<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 10;
    public $message = 'hello';

    public function inc(){
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
