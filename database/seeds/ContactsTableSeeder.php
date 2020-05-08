<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'first_name'=> 'Taylor ',
            'last_name'=> 'Otwell ',
            'email'=> 'taylor@laravel.com ',
            'subject'=> 'Laravel nominations winner congrats ',
            'description'=> 'Lorem ipsum text here',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
