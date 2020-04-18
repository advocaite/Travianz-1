<?php

use App\Models\Alliance\AlliancePermission;
use Illuminate\Database\Seeder;

class AlliancePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlliancePermission::truncate();

        $alliancePermissions = factory(AlliancePermission::class, 10);
    }
}
