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
        foreach (['C Major', 'Db Major', 'D Major', 'Eb Major', 'E Major', 'F Major', 'Gb Major', 'G Major', 'Ab Major', 'A Major', 'Bb Major', 'B Major'] as $value) {

            App\Models\Key::create(['name' => $value, 'slug' => str_slug($value)]);
        }
    }

}
