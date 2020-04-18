<?php

use App\Models\Alliance\AllianceUserLog;
use Illuminate\Database\Seeder;

class AllianceUserLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AllianceUserLog::truncate();

        $allianceUserLogs = factory(AllianceUserLog::class, 10);
    }
}
