<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'is_active'=>1,
            'name'=>'EdumodoAdmin',
            'email'=>'hi@hello.us',
            'email_verified_at'=>now(),
            'photo_id'=>1,
            'password'=>bcrypt(12345678),
            'remember_token' => Str::random(10),
            'created_at'=>now(),
            'updated_at'=>now(),

        ]);
        factory('App\User',5)->create();
    }
}
