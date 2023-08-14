<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            "user index" => [
                "admin",
            ],
            "user show" => [
                "admin",
            ],
            "user create" => [
                "admin",
            ],
            "user delete" => [
                "admin",
            ],

            "lokasi index" => [
                "admin",
            ],
            "lokasi show" => [
                "admin",
            ],
            "lokasi create" => [
                "admin",
            ],
            "lokasi delete" => [
                "admin",
            ],

            "update tambah kurang" => [
                "admin",
            ],
            "update ba rekon" => [
                "admin",
            ],
            "ba rekon index" => [
                "admin",
            ],
            "profile" => [
                "admin",
                "user",
                "guest",
            ],
        ];

        foreach ($permissions as $permit => $prs) {
            $permission = Permission::create(['name' => $permit]);
            $permission->assignRole($prs);
        }
    }
}