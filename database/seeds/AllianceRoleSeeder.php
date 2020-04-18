<?php

use App\Models\Alliance\AllianceRole;
use Illuminate\Database\Seeder;

class AllianceRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AllianceRole::truncate();

        $allianceRoles = factory(AllianceRole::class, 10);
    }
}
