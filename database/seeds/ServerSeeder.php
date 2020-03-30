<?php

use App\Models\Server;
use Illuminate\Database\Seeder;

class ServerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Server::truncate();

        Server::create([
            'name' => 'Server 1',
            'start_at' => \Carbon\Carbon::now()->addMinute(5),
            'ord' => 1,
        ]);

        Server::create([
            'name' => 'Server 2',
            'start_at' => \Carbon\Carbon::now()->addMinute(5),
            'locked' => true,
            'ord' => 2,
        ]);
    }
}
