<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ThemeSwitcher extends Component
{

    public $theme;

    public function mount()
    {
        $this->theme = auth()->user()->darkmode;
    }

    public function updatedTheme($value)
    {
        auth()->user()->update([
            'darkmode' => $value
        ]);
        $this->emit('reload');
        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.components.theme-switcher');
    }
}