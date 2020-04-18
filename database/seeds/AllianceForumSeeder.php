<?php

use App\Models\Alliance\AllianceForum;
use Illuminate\Database\Seeder;

class AllianceForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AllianceForum::truncate();

        $allianceForums = factory(AllianceForum::class, 10);
    }
}
