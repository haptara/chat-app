<?php

namespace App\Livewire;

use App\Models\Message;
use App\Models\User;
use Livewire\Component;

class Chat extends Component
{

    public User $user;

    public $message = '';


    public function render()
    {
        return view('livewire.chat');
    }

    public function sendMessage()
    {
        Message::create([
            'from_user_id'  => auth()->id(),
            'to_user_id'    => $this->user->id,
            'message'       => $this->message,
        ]);
    }
}
