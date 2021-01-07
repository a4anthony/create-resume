<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavigationBar extends Component
{
    public $showDropdown = false;

    public $showMenu = false;

    public function toggleShowMenu()
    {
        $this->showMenu = !$this->showMenu;
    }

    public function render()
    {
        return view('livewire.navigation-bar');
    }
}
