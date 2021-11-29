<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $defaultRoles = array([

            'name'=> 'admin',
            'username'=> 'admin' ,
            'email'=> 'mj.jahangiri.6@gmail.com' ,
            'password'=>'Aa123456'  ,

        ]);
        foreach ($defaultRoles as $row){
            User::create(array(
               'name'=>$row['name'] ,
                'username'=>$row['username'],
                'email'=>$row['email'],
                'password'=>$row['password'],

            ));
        }
        foreach (DB::table('users')->get() as $user){
            DB::table('users')->where('id',$user->id)->update(array('password'=>Hash::make($user->password)));
        }
    }
}
