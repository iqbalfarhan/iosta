<?php

namespace Database\Seeders;

use App\Models\Periode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "nama" => "q1",
                "tahun" => 2023,
                "active" => false
            ],
            [
                "nama" => "q2",
                "tahun" => 2023,
                "active" => false
            ],
            [
                "nama" => "q3",
                "tahun" => 2023,
                "active" => true
            ],
            [
                "nama" => "q4",
                "tahun" => 2023,
                "active" => false
            ]
        ];

        foreach ($datas as $data) {
            Periode::create($data);
        }
    }
}