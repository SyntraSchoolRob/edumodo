<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'category_id'=>3,
            'schooltype_id'=>1,
            'photo_id'=>1,
            'title'=>'Server license',
            'price'=>649.99,
            'description'=>'The smartschool suite is suitable for any type of school. Whether it is for a primary, secondary, high school or university, this software is made with the highest industry leading standards providing your teachers and students with the best software they can imagine.',
            'slug'=>'server-license',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);


    }
}
