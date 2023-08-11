<?php

namespace App\Http\Livewire\Widget;

use Livewire\Component;

class StatProfile extends Component
{
    public function render()
    {
        return view('livewire.widget.stat-profile', [
            'user' => auth()->user()
        ]);
    }
}