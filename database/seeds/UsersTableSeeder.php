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
           $role_empre  = Role::where('name','emprendedor')->first();
           $role_admin = Role::where('name','administrador')->first();
           $role_asesor = Role::where('name','asesor')->first();

            $admin = new User();
            $admin->name = "Aida Guillermina";
            $admin->email = "acossio_m@yahoo.com.mx";
            $admin->password = bcrypt('acossio1');
            $admin->save();
            $admin->roles()->attach($role_admin); 

            /*
            $admin = new User();
            $admin->name = "Vanessa Jennifer";
            $admin->email = "vanessa@gmail.com";
            $admin->password = bcrypt('123123');
            $admin->save();
            $admin->roles()->attach($role_empre); 

            $admin = new User();
            $admin->name = "Esdras De Jesus";
            $admin->email = "Exdraz_Lpz@outlook.com";
            $admin->password = bcrypt('123123');
            $admin->save();
            $admin->roles()->attach($role_asesor); 


            $admin = new User();
            $admin->name = "Aida Guillermina";
            $admin->email = "acossio_m@yahoo.com.mx";
            $admin->password = bcrypt('123123');
            $admin->save();
            $admin->roles()->attach($role_asesor);
            */
      

    }
}
