<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'admin',
                'name' => 'IQBAL FARHAN SYUHADA',
                'witel' => 'REGIONAL',
                "password" => Hash::make("adminoke")
            ],
            [
                "username" => "20930920",
                "name" => "MEILAND HARIATY SIMANJUNTAK",
                "witel" => "BALIKPAPAN",
                "password" => Hash::make("appiosta")
            ],
            [
                "username" => "20971132",
                "name" => "AKHMAD NOOR",
                "witel" => "BANJARMASIN",
                "password" => Hash::make("appiosta")
            ],
            [
                "username" => "18900213",
                "name" => "JAERULI",
                "witel" => "PALANGKARAYA",
                "password" => Hash::make("appiosta")
            ],
            [
                "username" => "18970400",
                "name" => "SETIAWAN BONARDO TEGUH SITORUS",
                "witel" => "PONTIANAK",
                "password" => Hash::make("appiosta")
            ],
            [
                "username" => "18940693",
                "name" => "BAYU PURWANTO",
                "witel" => "SAMARINDA",
                "password" => Hash::make("appiosta")
            ],
            [
                "username" => "20900353",
                "name" => "MUHAMMAD HAIRIL",
                "witel" => "TARAKAN",
                "password" => Hash::make("appiosta")
            ],
            [
                "username" => "19850066",
                "name" => "KESUMANENGATI",
                "witel" => "REGIONAL",
                "password" => Hash::make("appiosta")
            ],
            [
                "username" => "20950962",
                "name" => "YUDI EKO PRABOWO",
                "witel" => "REGIONAL",
                "password" => Hash::make("appiosta")
            ],
            [
                "username" => "19970211",
                "name" => "MUHAMMAD NAUFAL ZAKKY MUHADZDZIB",
                "witel" => "REGIONAL",
                "password" => Hash::make("appiosta")
            ]
        ];

        foreach ($users as $user) {
            $new = User::create([
                "username" => $user['username'],
                "name" => $user["name"],
                "password" => $user['password'],
                "witel" => $user['witel'],
            ]);

            if ($new->username == "admin") {
                $new->assignRole('developer');
            } elseif ($new->witel == "REGIONAL") {
                $new->assignRole('admin');
            } else {
                $new->assignRole('user');
            }
        }
    }
}