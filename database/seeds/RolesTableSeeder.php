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
        DB::table('roles')->insert(['name'=>'administrator', 'created_at'=>now()]);
        DB::table('roles')->insert(['name'=>'author', 'created_at'=>now()]);
        DB::table('roles')->insert(['name'=>'subscriber', 'created_at'=>now()]);

        DB::table('user_role')->insert(['role_id'=>'1', 'user_id'=>'1', 'created_at'=>now(), 'updated_at'=>now()]);
        DB::table('user_role')->insert(['role_id'=>'3', 'user_id'=>'2', 'created_at'=>now(), 'updated_at'=>now()]);
        DB::table('user_role')->insert(['role_id'=>'1', 'user_id'=>'3', 'created_at'=>now(), 'updated_at'=>now()]);

    }
}
