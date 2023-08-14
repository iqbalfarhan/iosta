<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Sidebar extends Component
{
    protected $listeners = [
        'reload' => '$refresh'
    ];
    public function render()
    {
        return view('livewire.components.sidebar', [
            'datas' => [
                'Menu utama' => [
                    [
                        'label' => 'Dashboard',
                        'icon' => 'apps',
                        'route' => 'home',
                        'permission' => 'home'
                    ],
                    [
                        'label' => 'Update tambah kurang',
                        'icon' => 'edit',
                        'route' => 'ubahdata',
                        'permission' => 'update tambah kurang'
                    ],
                    [
                        'label' => 'Update BA rekon',
                        'icon' => 'edit',
                        'route' => 'upload-ba',
                        'permission' => 'update ba rekon'
                    ],
                    [
                        'label' => 'Data BA Rekon',
                        'icon' => 'upload',
                        'route' => 'ba-rekon',
                        'permission' => 'ba rekon index'
                    ],
                ],
                'Pengaturan' => [
                    [
                        'label' => 'Pengaturan lokasi',
                        'icon' => 'building',
                        'route' => 'settings.lokasi',
                        'permission' => 'lokasi index'
                    ],
                    [
                        'label' => 'User management',
                        'icon' => 'users',
                        'route' => 'settings.user',
                        'permission' => 'user index'
                    ],
                    [
                        'label' => 'Role & permission',
                        'icon' => 'key',
                        'route' => 'settings.permission',
                        'permission' => 'open permission'
                    ],
                    [
                        'label' => 'Edit Profile',
                        'icon' => 'user',
                        'route' => 'profile',
                        'permission' => 'profile'
                    ],

                ],
            ]
        ]);
    }
}