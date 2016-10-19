<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 21,
                'article_id' => 27,
                'user_id' => 1,
                'original_content' => '卧槽，`code`，没意思',
                'short_content' => '卧槽，code，没意思
',
                'compiled_content' => '<p>卧槽，<code>code</code>，没意思</p>
',
                'deleted_at' => NULL,
                'created_at' => '2016-10-18 10:15:38',
                'updated_at' => '2016-10-18 10:15:38',
            ),
        ));
        
        
    }
}
