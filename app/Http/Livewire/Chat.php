<?php

namespace App\Http\Livewire;

use http\Env\Request;
use Livewire\Component;

class Chat extends Component
{
    public $chats;
    public $message;

    public function mount() {
        $this->chats = \App\Models\Chat::all();
        $this->message = '';
    }

    public function create($message) {
        if($message) \App\Models\Chat::create(['text' => $message]);
    }

    public function getChats() {
        $this->chats = \App\Models\Chat::all();
    }
    public function render()
    {
        return view('livewire.chat');
    }
}
