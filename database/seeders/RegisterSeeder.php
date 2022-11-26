<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Register;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Register::factory()
        ->count(10)
        ->create();
    }
}