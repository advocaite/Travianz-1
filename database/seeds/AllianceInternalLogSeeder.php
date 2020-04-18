<?php

use App\Models\Alliance\AllianceInternalLog;
use Illuminate\Database\Seeder;

class AllianceInternalLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AllianceInternalLog::truncate();

        $allianceInternalLogs = factory(AllianceInternalLog::class, 5);
    }
}
