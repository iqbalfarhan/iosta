<?php

namespace App\Http\Livewire\Pages;

use App\Models\Periode;
use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        return view('livewire.pages.welcome', [
            'periode' => Periode::where('active', true)->first()
        ]);
    }
}