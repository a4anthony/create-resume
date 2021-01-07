<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Logo extends Component
{
    public $darkMode = false;

    public function mount($darkMode)
    {
    }


    public function render()
    {
        return view('livewire.logo');
    }
}
