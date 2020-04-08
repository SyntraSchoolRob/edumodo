<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        for($postTeller = 1; $postTeller < 10; $postTeller++){
            for($tagTeller = 1;$tagTeller < 10; $tagTeller++){
                DB::table('post_tag')->insert(['post_id'=>$postTeller,'tag_id'=>$tagTeller]);
            }
            $tagTeller = 1;
        }

    }
}
