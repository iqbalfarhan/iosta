<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\Request;
use Livewire\Component;


class Breadcrumb extends Component
{
    public function render()
    {
        $segments = explode('/', Request::path());
        return view('livewire.components.breadcrumb', [
            'witel' => auth()->user()->witel,
            'datas' => $segments
        ]);
    }
}