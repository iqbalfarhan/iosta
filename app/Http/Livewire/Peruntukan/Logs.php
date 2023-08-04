<?php

namespace App\Http\Livewire\Peruntukan;

use App\Models\LogPeruntukan;
use App\Models\Peruntukan;
use Livewire\Component;

class Logs extends Component
{
    public $no = 1;
    public $peruntukan_id;
    public function mount(Peruntukan $peruntukan)
    {
        $this->peruntukan_id = $peruntukan->id;
    }
    public function render()
    {
        return view('livewire.peruntukan.logs', [
            'datas' => LogPeruntukan::where('peruntukan_id', $this->peruntukan_id)->get(),
            'peruntukan' => Peruntukan::find($this->peruntukan_id)
        ]);
    }
}