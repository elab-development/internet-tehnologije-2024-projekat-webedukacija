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
        Admin::create(
            [
            'username'=>"Admin",
            'password'=>"Admin123",
             ]);

        Admin::create(
            [
            'username'=>"Admin2",
            'password'=>"Admin321",
            ]);
    }
}
