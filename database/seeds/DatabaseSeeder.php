<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(KeysTableSeeder::class);
        $this->call(InstrumentsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(TracksTableSeeder::class);
    }

}
