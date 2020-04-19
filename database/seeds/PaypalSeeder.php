<?php

use App\Models\Paypal\Paypal;
use Illuminate\Database\Seeder;

class PaypalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paypal = factory(Paypal::class, 5)->create();
    }
}
