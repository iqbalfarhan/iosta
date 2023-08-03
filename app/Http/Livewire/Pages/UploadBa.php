<?php

namespace App\Http\Livewire\Pages;

use App\Models\Lokasi;
use Livewire\Component;

class UploadBa extends Component
{
    public $witel;

    public function mount()
    {
        $this->witel = auth()->user()->witel;
    }
    public function render()
    {
        return view('livewire.pages.upload-ba', [
            'lokasis' => Lokasi::where('witel', $this->witel)->get()->pluck('nama', 'id')
        ]);
    }
}