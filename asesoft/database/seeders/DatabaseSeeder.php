<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\asesore;
use App\Models\User;
use Illuminate\Database\Seeder;
use app\Models\administrador;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call(administradorSeeder::class);
        User::factory(50)->create();
        asesore::factory(20)->create();
    }
}
