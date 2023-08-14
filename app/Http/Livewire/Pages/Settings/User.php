<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\User as UserModel;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class User extends Component
{
    protected $listeners = [
        'reload' => '$refresh'
    ];

    public $username;
    public $witel;
    public $name;

    public function resetFilter()
    {
        $this->reset();
    }

    function deleteUser(UserModel $user)
    {
        $user->delete();
        $this->emit('reload');
    }

    function resetPassword(UserModel $user)
    {
        $user->update([
            'password' => Hash::make('iosta2023')
        ]);
        $this->emit('reload');
    }

    public function render()
    {
        $datas = UserModel::when($this->username, function ($q) {
            $q->where('username', 'like', '%' . $this->username . '%');
        })->when($this->name, function ($q) {
            $q->where('name', 'like', '%' . $this->name . '%');
        })->when($this->witel, function ($q) {
            $q->where('witel', $this->witel);
        })->get();

        return view('livewire.pages.settings.user', [
            'datas' => $datas
        ]);
    }
}