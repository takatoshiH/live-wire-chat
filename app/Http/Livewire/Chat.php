<?php

namespace App\Http\Livewire;

use http\Env\Request;
use Livewire\Component;

class Chat extends Component
{
    public $chats;
    public $message;
    public $user_name;

    public function mount() {
        $this->chats = \App\Models\Chat::take(10)->latest()->get();
        $this->message = '';
        $this->user_name = '';
    }

    public function create($message, $user_name) {
        if($message) \App\Models\Chat::create(['text' => $message, 'user_name' => $user_name]);
        $this->message = '';
    }

    public function getChats() {
        $this->chats = \App\Models\Chat::take(10)->latest()->get();
    }
    public function render()
    {
        return view('livewire.chat');
    }
}
