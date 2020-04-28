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
            'type'=>'Primary',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('schooltypes')->insert([
            'type'=>'Secondary',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('schooltypes')->insert([
            'type'=>'University',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
