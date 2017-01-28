<?php

use Illuminate\Database\Seeder;

class KeysTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Key::create(['name' => 'test', 'slug' => 'test']);
    }

}
