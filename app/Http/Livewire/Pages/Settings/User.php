<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\User as UserModel;
use Livewire\Component;

class User extends Component
{
    public $username;
    public $witel;
    public $name;
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