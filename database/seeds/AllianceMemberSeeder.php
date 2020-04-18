<?php

use App\Models\Alliance\AllianceMember;
use Illuminate\Database\Seeder;

class AllianceMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AllianceMember::truncate();

        $allianceMembers = factory(AllianceMember::class, 10);
    }
}
