<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 50) as $index) {

            App\Models\Project::create([
                'parent_id' => $faker->randomDigit,
                'user_id' => App\Models\User::all()->random()->first()->id,
                'key_id' => App\Models\Key::all()->random()->first()->id,
                'tempo' => $faker->numberBetween(60, 180),
                'length' => $faker->randomElements([16, 32, 64], $count = 1)[0],
            ]);
        }
    }

}
