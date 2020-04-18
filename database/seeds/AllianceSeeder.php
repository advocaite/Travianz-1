<?php

use App\Models\Alliance\Alliance;
use Illuminate\Database\Seeder;

class AllianceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alliance::truncate();

        $alliances = factory(Alliance::class, 10)->make();
    }
}
