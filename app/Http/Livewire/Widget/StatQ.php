<?php

namespace App\Http\Livewire\Widget;

use App\Helpers\Quartal;
use Livewire\Component;

class StatQ extends Component
{
    public function render()
    {
        return view('livewire.widget.stat-q', [
            'periode' => Quartal::now()
        ]);
    }
}