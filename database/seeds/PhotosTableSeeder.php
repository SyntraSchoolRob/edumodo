<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('photos')->insert([

            'file'=>'headerLogo.png',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('photos')->insert([

            'file'=>'me.png',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('photos')->insert([

            'file'=>'productsImg.png',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
/*        DB::table('photos')->insert([

            'file'=>'userImage.png',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);*/
    }
}
