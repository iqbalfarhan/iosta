<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    protected $listeners = [
        'reload' => '$refresh'
    ];
    public $name;
    public $username;
    public $witel;
    public $user_id;
    public $initial;

    public function simpan()
    {
        $valid = $this->validate([
            'name' => 'required',
            'username' => 'required',
            'witel' => 'required',
        ]);

        User::find($this->user_id)->update($valid);

        $this->emit('reload');
    }

    public function mount()
    {
        $user = auth()->user();

        $this->name = $user->name;
        $this->username = $user->username;
        $this->witel = $user->witel;
        $this->user_id = $user->id;
        $this->initial = $user->initial;
    }

    public function render()
    {
        return view('livewire.pages.profile');
    }
}