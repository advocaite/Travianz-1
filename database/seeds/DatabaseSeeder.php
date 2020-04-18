<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LanguagesSeeder::class);
        $this->call(ServerSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AllianceSeeder::class);
        $this->call(AllianceUserLogSeeder::class);
        $this->call(AllianceChatSeeder::class);
        $this->call(AllianceDiplomacySeeder::class);
        $this->call(AllianceForumSeeder::class);
        $this->call(AllianceInternalLogSeeder::class);
        $this->call(AllianceMedalSeeder::class);
        $this->call(AllianceMemberSeeder::class);
        $this->call(AlliancePermissionSeeder::class);
        $this->call(AllianceRankingSeeder::class);
        $this->call(AllianceRoleSeeder::class);
        $this->call(AllianceInviteSeeder::class);
    }
}
