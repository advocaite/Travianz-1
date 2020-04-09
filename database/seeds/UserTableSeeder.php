<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $moderatorRole = Role::where('name', 'moderator')->first();

        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name'       => 'admin',
            'email'      => 'admin@travianz.local',
            'password'   => bcrypt('secret'),
        ]);

        $moderator = User::create([
            'name'       => 'moderator',
            'email'      => 'moderator@travianz.local',
            'password'   => bcrypt('secret'),
        ]);


        $user = User::create([
            'name'       => 'user',
            'email'      => 'user@travianz.local',
            'password'   => bcrypt('secret'),
        ]);

        $admin->roles()->attach($adminRole);
        $moderator->roles()->attach($moderatorRole);
        $user->roles()->attach($userRole);
    }
}
