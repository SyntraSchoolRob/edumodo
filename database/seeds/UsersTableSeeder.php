<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'email'=>'hi@hello.com',
            'photo_id'=>1,
            'password'=>bcrypt(12345678)]);
        factory('App\User',5)->create();
    }
}
