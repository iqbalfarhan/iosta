<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Request;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.components.navbar', [
            'initial' => auth()->user()->initial,
        ]);
    }
}