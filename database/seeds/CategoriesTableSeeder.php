<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(['name'=>'Engineering']);
        DB::table('categories')->insert(['name'=>'Accounting']);
        DB::table('categories')->insert(['name'=>'Technology']);
        DB::table('categories')->insert(['name'=>'Design']);
        DB::table('categories')->insert(['name'=>'Physics']);
        DB::table('categories')->insert(['name'=>'Chemistry']);
    }

}
