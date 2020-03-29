<?php

use App\Models\Languages;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Languages::truncate();

        Languages::create([
            'name' => 'English',
            'name_short' => 'en',
            'country_code' => 'gb',
            'code' => 'gb',
            'valute_id' => 1, // english
        ]);

        Languages::create([
            'name' => 'Slovenian',
            'name_short' => 'sl',
            'country_code' => 'si',
            'code' => 'slo',
            'valute_id' => 2, // euro
        ]);

        Languages::create([
            'name' => 'Italian',
            'name_short' => 'it',
            'country_code' => 'it',
            'code' => 'it',
            'valute_id' => 2,
        ]);

        Languages::create([
            'name' => 'Croatian',
            'name_short' => 'hr',
            'country_code' => 'hr',
            'code' => 'hr',
            'valute_id' => 3,
        ]);
    }
}
