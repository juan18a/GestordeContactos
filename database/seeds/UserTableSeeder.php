<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name','root')->first();

        $user = new User();
        $user->name="Rodrigo";
        $user->lastname = "MX";
        $user->email="rodrigo@gmail.com";
        $user->password = bcrypt('Rodrigo1');
        $user->email_verified_at = "2019-08-09 00:09:30";
        $user->save();
        $user->roles()->attach($role_user); 

        

    }
}
