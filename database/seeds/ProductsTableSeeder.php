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
            'photo_id'=>3,
            'title'=>'Server license',
            'price'=>649.99,
            'description'=>'The smartschool suite is suitable for any type of school. Whether it is for a primary, secondary, high school or university, this software is made with the highest industry leading standards providing your teachers and students with the best software they can imagine.',
            'slug'=>'server-license',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('products')->insert([
            'category_id'=>3,
            'schooltype_id'=>3,
            'photo_id'=>3,
            'title'=>'1TB Cloud Storage',
            'price'=>19.99,
            'description'=>'The smartschool suite is suitable for any type of school. Whether it is for a primary, secondary, high school or university, this software is made with the highest industry leading standards providing your teachers and students with the best software they can imagine.',
            'slug'=>'1TB-cloud-storage',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('products')->insert([
            'category_id'=>3,
            'schooltype_id'=>3,
            'photo_id'=>3,
            'title'=>'Linux office suite',
            'price'=>0.00,
            'description'=>'The smartschool suite is suitable for any type of school. Whether it is for a primary, secondary, high school or university, this software is made with the highest industry leading standards providing your teachers and students with the best software they can imagine.',
            'slug'=>'linux-office-suite',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('products')->insert([
            'category_id'=>3,
            'schooltype_id'=>1,
            'photo_id'=>4,
            'title'=>'Smartschool suite',
            'price'=>849.99,
            'description'=>'The smartschool suite is suitable for any type of school. Whether it is for a primary, secondary, high school or university, this software is made with the highest industry leading standards providing your teachers and students with the best software they can imagine.',
            'slug'=>'smartschool-suite',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('products')->insert([
            'category_id'=>4,
            'schooltype_id'=>1,
            'photo_id'=>5,
            'title'=>'Design suite',
            'price'=>199.99,
            'description'=>'The smartschool suite is suitable for any type of school. Whether it is for a primary, secondary, high school or university, this software is made with the highest industry leading standards providing your teachers and students with the best software they can imagine.',
            'slug'=>'design-suite',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('products')->insert([
            'category_id'=>1,
            'schooltype_id'=>3,
            'photo_id'=>3,
            'title'=>'Engineering suite',
            'price'=>998.99,
            'description'=>'The smartschool suite is suitable for any type of school. Whether it is for a primary, secondary, high school or university, this software is made with the highest industry leading standards providing your teachers and students with the best software they can imagine.',
            'slug'=>'engineering-suite',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('products')->insert([
            'category_id'=>5,
            'schooltype_id'=>2,
            'photo_id'=>3,
            'title'=>'Physics suite',
            'price'=>449.99,
            'description'=>'The smartschool suite is suitable for any type of school. Whether it is for a primary, secondary, high school or university, this software is made with the highest industry leading standards providing your teachers and students with the best software they can imagine.',
            'slug'=>'physics-suite',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('products')->insert([
            'category_id'=>2,
            'schooltype_id'=>2,
            'photo_id'=>3,
            'title'=>'Accountancy suite',
            'price'=>99.99,
            'description'=>'The smartschool suite is suitable for any type of school. Whether it is for a primary, secondary, high school or university, this software is made with the highest industry leading standards providing your teachers and students with the best software they can imagine.',
            'slug'=>'accountancy-suite',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('products')->insert([
            'category_id'=>6,
            'schooltype_id'=>3,
            'photo_id'=>3,
            'title'=>'Chemistry suite',
            'price'=>1299.99,
            'description'=>'The smartschool suite is suitable for any type of school. Whether it is for a primary, secondary, high school or university, this software is made with the highest industry leading standards providing your teachers and students with the best software they can imagine.',
            'slug'=>'chemistry-suite',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);


    }
}
