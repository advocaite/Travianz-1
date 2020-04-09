<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class UpdateWoodResource extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'game:update-wood-resources';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo " - Updating Wood Resource \n";
        //$user = User::where('id', 1)->whereDate('created_at', '>', Carbon::now()->subMinute(10))->update();  //special character to pass date (whereDate) use this to update
        $user = User::where('id', 1)->whereDate('created_at', '>=', Carbon::now())->first();  //special character to pass date (whereDate)  for testing
        $user->wood = $user->wood + 10;
        $user->save();
//        dd($user);
//        $user = Auth::user();


    }
}
