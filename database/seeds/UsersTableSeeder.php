<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'first_name'    =>  'Mustafa',
            'last_name'     =>  'Al-Falahi',
            'email'         =>  'mostafa_alfalahi@yahoo.com',
            'password'      =>  Hash::make('test1234'),
            'avatar'        =>  'default.png'
        ]);

        $user = User::create([
            'first_name'    =>  'User',
            'last_name'     =>  'User1',
            'email'         =>  'user@user.com',
            'password'      =>  Hash::make('test1234'),
            'avatar'        =>  'default.png'
        ]);

        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
    }
}
