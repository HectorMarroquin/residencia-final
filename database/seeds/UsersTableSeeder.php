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
           $role_asesor = Role::where('name','asesor')->first();

            $admin = new User();
            $admin->name = "Hector De Jesus";
            $admin->email = "hector.cokito@gmail.com";
            $admin->password = bcrypt('123123');
            $admin->save();
            $admin->roles()->attach($role_admin); 

            $admin = new User();
            $admin->name = "Alberth Eduardo";
            $admin->email = "alberth@gmail.com";
            $admin->password = bcrypt('123123');
            $admin->save();
            $admin->roles()->attach($role_user); 

            $admin = new User();
            $admin->name = "Esdras De Jesus";
            $admin->email = "eaz@gmail.com";
            $admin->password = bcrypt('123123');
            $admin->save();
            $admin->roles()->attach($role_asesor); 




            $admin = new User();
            $admin->name = "Aldo Fabian";
            $admin->email = "aldo@gmail.com";
            $admin->password = bcrypt('123123');
            $admin->save();
            $admin->roles()->attach($role_asesor);

            $admin = new User();
            $admin->name = "Wilder Adan";
            $admin->email = "wil@gmail.com";
            $admin->password = bcrypt('123123');
            $admin->save();
            $admin->roles()->attach($role_asesor);

            $admin = new User();
            $admin->name = "Alan Josue";
            $admin->email = "alan@gmail.com";
            $admin->password = bcrypt('123123');
            $admin->save();
            $admin->roles()->attach($role_asesor); 

    }
}
