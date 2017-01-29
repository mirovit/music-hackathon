<?php

use Illuminate\Database\Seeder;
use App\Models\Instrument;

class InstrumentsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a[] = ['name' => 'Drums', 'image' => 'drum.png'];
        $a[] = ['name' => 'Piano', 'image' => 'piano.png'];
        $a[] = ['name' => 'Guitar', 'image' => 'guitar.png'];
        $a[] = ['name' => 'Bass', 'image' => 'bass.png'];
        foreach ($a as $v) {
            Instrument::create($v);
        }
    }

}
