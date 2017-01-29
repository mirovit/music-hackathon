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
        foreach (['C Minor', 'Db Minor', 'D Minor', 'Eb Minor', 'E Minor', 'F Minor', 'Gb Minor', 'G Minor', 'Ab Minor', 'A Minor', 'Bb Minor', 'B Minor'] as $value) {

            App\Models\Key::create(['name' => $value, 'slug' => str_slug($value)]);
        }
    }

}
