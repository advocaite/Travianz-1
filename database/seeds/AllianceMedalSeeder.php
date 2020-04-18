<?php

use App\Models\Alliance\AllianceMedal;
use Illuminate\Database\Seeder;

class AllianceMedalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AllianceMedal::truncate();

        $allianceMedals = factory(AllianceMedal::class, 10);
    }
}
