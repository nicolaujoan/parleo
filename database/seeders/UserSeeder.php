<?php

namespace Database\Seeders;

use Eloquent;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersToCreate = [];
        $factory = new UserFactory();
        // check if table users is empty

        for ($i = 0; $i <= 1000; $i++) {
            array_push($usersToCreate, $factory->definition());
        }

        DB::table('users')->insert($usersToCreate);
    }
}