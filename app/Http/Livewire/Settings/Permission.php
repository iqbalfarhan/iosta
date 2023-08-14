<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission as ModelPermission;

class Permission extends Component
{
    protected $listeners = [
        'reload' => '$refresh'
    ];

    public $tipe = "permission";
    public $name;
    public $showAddModal = false;

    public function addPermission()
    {
        $valid = $this->validate([
            'tipe' => 'required',
            'name' => 'required',
        ]);

        if ($valid['tipe'] == 'role') {
            Role::create([
                'name' => $valid['name']
            ]);
        } elseif ($valid['tipe'] == 'permission') {
            ModelPermission::create([
                'name' => $valid['name']
            ]);
        }

        $this->emit('reload');
        $this->reset();
    }

    public function hapusPermission(ModelPermission $permission)
    {
        $permission->delete();

        $this->emit('reload');
        $this->reset();
    }

    public function hapusRole(Role $role)
    {
        $role->delete();

        $this->emit('reload');
        $this->reset();
    }

    public function changePermission(ModelPermission $permission, $role)
    {
        if ($permission->hasRole($role)) {
            $permission->removeRole($role);
        } else {
            $permission->assignRole($role);
        }

        $this->emit('reload');
    }

    public function render()
    {
        return view('livewire.settings.permission', [
            'roles' => Role::whereNot('name', 'developer')->get()->pluck('name', 'id'),
            'permissions' => ModelPermission::get()
        ]);
    }
}