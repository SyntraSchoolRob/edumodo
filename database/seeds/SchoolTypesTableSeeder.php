<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('schooltypes')->insert([
            'type'=>'primary',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('schooltypes')->insert([
            'type'=>'secondary',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('schooltypes')->insert([
            'type'=>'university',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
