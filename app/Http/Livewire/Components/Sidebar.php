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
                        'label' => 'Update data',
                        'icon' => 'edit',
                        'route' => 'ubahdata'
                    ],
                    [
                        'label' => 'Upload BA Rekon',
                        'icon' => 'upload',
                        'route' => 'upload-ba'
                    ],
                    // [
                    //     'label' => 'File BA Rekon',
                    //     'icon' => 'folder',
                    //     'route' => 'ba-rekon'
                    // ],
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
                    // [
                    //     'label' => 'Role & permission',
                    //     'icon' => 'key',
                    //     'route' => 'settings.permission'
                    // ],

                ]
            ]
        ]);
    }
}