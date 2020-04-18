<?php

use App\Models\Alliance\AllianceDiplomacy;
use Illuminate\Database\Seeder;

class AllianceDiplomacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AllianceDiplomacy::truncate();

        $allianceDiplomacies = factory(AllianceDiplomacy::class, 5)->make();
    }
}
