<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\Lokasi;
use Livewire\Component;

class LokasiDetail extends Component
{

    protected $listeners = [
        'reload' => '$refresh'
    ];

    public $data;
    public function mount(Lokasi $lokasi)
    {
        $this->data = $lokasi;
    }

    public function back()
    {
        return redirect()->route('settings.lokasi');
    }

    public function render()
    {
        return view('livewire.pages.settings.lokasi-detail');
    }
}