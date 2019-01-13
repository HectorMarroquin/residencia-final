<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $role_user  = Role::where('name','emprendedor')->first();
           $role_admin = Role::where('name','administrador')->first();

            $admin = new User();
            $admin->name = "Hector De Jesus";
            $admin->email = "hector.cokito@gmail.com";
            $admin->password = bcrypt('123456');
            $admin->save();
            $admin->roles()->attach($role_admin); 

            $admin = new User();
            $admin->name = "Esdras De Jesus";
            $admin->email = "eaz@gmail.com";
            $admin->password = bcrypt('123456');
            $admin->save();
            $admin->roles()->attach($role_user); 

    }
}
