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
        DB::table('categories')->insert(['name'=>'Engineering','created_at'=>now(),'updated_at'=>now() ]);
        DB::table('categories')->insert(['name'=>'Accounting','created_at'=>now(),'updated_at'=>now() ]);
        DB::table('categories')->insert(['name'=>'Technology','created_at'=>now(),'updated_at'=>now() ]);
        DB::table('categories')->insert(['name'=>'Design','created_at'=>now(),'updated_at'=>now() ]);
        DB::table('categories')->insert(['name'=>'Physics','created_at'=>now(),'updated_at'=>now() ]);
        DB::table('categories')->insert(['name'=>'Chemistry','created_at'=>now(),'updated_at'=>now() ]);
    }

}
