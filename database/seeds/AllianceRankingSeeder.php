<?php

use App\Models\Alliance\AllianceRanking;
use Illuminate\Database\Seeder;

class AllianceRankingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AllianceRanking::truncate();

        $allianceRankings = factory(AllianceRanking::class, 10);
    }
}
