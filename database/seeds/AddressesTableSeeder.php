<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'user_id'=> 1,
            'street'=>'TimesSquare 1',
            'city'=>'New York',
            'state'=>'State New York',
            'zip'=>1000,
            'country_id'=> 1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('addresses')->insert([
            'user_id'=> 2,
            'street'=>'Main St 2',
            'city'=>'San Fransisco',
            'state'=>'California',
            'zip'=>2000,
            'country_id'=> 1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('addresses')->insert([
            'user_id'=> 3,
            'street'=>'Main St 3',
            'city'=>'Orlando',
            'state'=>'Florida',
            'zip'=>3000,
            'country_id'=> 1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
