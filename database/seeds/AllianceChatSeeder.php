<?php

use App\Models\Alliance\AllianceChat;
use Illuminate\Database\Seeder;

class AllianceChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AllianceChat::truncate();

        $allianceChats = factory(AllianceChat::class, 5)->make();
    }
}
