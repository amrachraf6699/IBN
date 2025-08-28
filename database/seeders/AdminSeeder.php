<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::FirstOrCreate(
            [
                'email' => 'admin@website.com',
            ],
            [
                'name' => 'Admin',
                'password' => 'Admin3@1',
            ]
        );

        Admin::firstOrCreate(
            [
                'email' => 'admin@ibn-c.amrachraf.cloud'
            ],
            [
                'name' => 'Admin',
                'password' => 'Admin3@1',
            ]
        );
    }
}
