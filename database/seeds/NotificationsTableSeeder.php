<?php

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notifications')->delete();
        
        \DB::table('notifications')->insert(array (
            0 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'from_user_id' => 1,
                'content' => NULL,
                'article_id' => 27,
                'comment_id' => 21,
                'type' => 'comment_article',
                'created_at' => '2016-10-18 10:15:38',
                'updated_at' => '2016-10-18 10:15:38',
            ),
            1 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'from_user_id' => 2,
                'content' => NULL,
                'article_id' => 27,
                'comment_id' => 0,
                'type' => 'favorite_article',
                'created_at' => '2016-10-18 10:17:11',
                'updated_at' => '2016-10-18 10:17:11',
            ),
            2 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'from_user_id' => 2,
                'content' => NULL,
                'article_id' => 28,
                'comment_id' => 0,
                'type' => 'favorite_article',
                'created_at' => '2016-10-18 10:18:33',
                'updated_at' => '2016-10-18 10:18:33',
            ),
        ));
        
        
    }
}
