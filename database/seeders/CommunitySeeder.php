<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('communities')->insert([
            ['name' => 'distributed systems', 'description' => 'welcome to distributed systems'],
            ['name' => 'react lovers', 'description' => 'Reactive user interfaces with react js'],
            ['name' => 'php vanilla', 'description' => 'php like a men'],
            ['name' => 'apache server', 'description' => 'tips, tricks and help for the apache web server'],
            ['name' => "u don't know js", 'description' => 'concepts and topics to master js from its first principles']
        ]);
    }
}