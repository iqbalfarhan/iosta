<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.components.sidebar', [
            'datas' => [
                'Menu utama' => [
                    [
                        'label' => 'Dashboard',
                        'icon' => 'apps',
                        'route' => 'home'
                    ],
                    [
                        'label' => 'Update tambah kurang',
                        'icon' => 'edit',
                        'route' => 'ubahdata'
                    ],
                    [
                        'label' => 'Upload BA Rekon',
                        'icon' => 'upload',
                        'route' => 'upload-ba'
                    ],
                ],
                'Pengaturan' => [
                    [
                        'label' => 'Pengaturan lokasi',
                        'icon' => 'building',
                        'route' => 'settings.lokasi'
                    ],
                    [
                        'label' => 'User management',
                        'icon' => 'users',
                        'route' => 'settings.user'
                    ],

                ],
                'Account' => [
                    [
                        'label' => 'Edit Profile',
                        'icon' => 'user',
                        'route' => 'profile'
                    ],

                ]
            ]
        ]);
    }
}