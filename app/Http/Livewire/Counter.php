<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count;
    public $message;

    public function mount()
    {
        $this->count = 10;
        $this->message = 'Hello World!';
    }

    public function inc(){
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
