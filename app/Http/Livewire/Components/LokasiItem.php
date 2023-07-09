<?php

namespace App\Http\Livewire\Components;

use App\Models\Lokasi;
use Livewire\Component;

class LokasiItem extends Component
{
    public $data;
    public function mount(Lokasi $data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.components.lokasi-item');
    }
}