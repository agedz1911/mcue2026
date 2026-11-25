<?php

namespace App\Livewire\Pages;

use App\Models\WelcomeMessage as ModelsWelcomeMessage;
use Livewire\Component;

<<<<<<< HEAD
=======
#[Title('Welcome Message - MCUE 2027')]

>>>>>>> 4e48335 (feat: redesign for mcue 2027)
class WelcomeMessage extends Component
{
    public function render()
    {
        $messages = ModelsWelcomeMessage::where('is_active', true)->orderby('no_urut', 'asc')->get();
        return view('livewire.pages.welcome-message', ['messages' => $messages]);
    }
}
