<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert(['name'=>'administrator']);
        DB::table('roles')->insert(['name'=>'author']);
        DB::table('roles')->insert(['name'=>'subscriber']);

        DB::table('user_role')->insert(['role_id'=>'1', 'user_id'=>'1']);

    }
}
