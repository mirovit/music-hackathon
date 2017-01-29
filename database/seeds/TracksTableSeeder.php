<?php

use Illuminate\Database\Seeder;

class TracksTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 100) as $value) {
            App\Models\Track::create([
                'project_id' => random_int(1, 50),
                'user_id' => App\Models\User::all()->random()->first()->id,
                'instrument_id' => random_int(1, 4),
            ]);
        }
    }

}
