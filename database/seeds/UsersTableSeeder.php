<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            $user = User::create([
                        'name' => $faker->lastName,
                        'email' => $faker->email,
                        'password' => $faker->word
            ]);
        }
    }

}
