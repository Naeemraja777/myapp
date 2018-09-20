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
        $role_user=Role::where('name','User')->first();
        $role_author=Role::where('name','Author')->first();
        $role_admin=Role::where('name','Admin')->first();
        
          $user=new User();
         $user->name='Naeem';
         $user->email='muhammadnaeem.apex@gmail.com';
         $user->password=bcrypt('Naeem');
         $user->save();
         $user->roles()->attach($role_user);

         $admin=new User();
         $admin->name='Alex';
         $admin->email='Alex@gmail.com';
         $admin->password=bcrypt('Admin');
         $admin->save();
         $admin->roles()->attach($role_admin);
         $author=new User();
         $author->name='Naeem';
         $author->email='Ayesha.razi@gmail.com';
         $author->password=bcrypt('Ayesha');
         $author->save();
         $author->roles()->attach($role_author);
    }
}
