<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ConfigurationTableSeeder::class);
        $this->call(MemberTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(TeamMemberTableSeeder::class);
    }
}