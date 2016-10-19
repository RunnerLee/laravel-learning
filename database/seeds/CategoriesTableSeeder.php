<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'name' => '测试分类',
                'title' => 'testCategory',
                'article_count' => 0,
                'last_article_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-10-13 18:12:38',
                'updated_at' => '2016-10-13 18:12:40',
            ),
            1 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'name' => 'test category',
                'title' => 'test',
                'article_count' => 0,
                'last_article_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-10-14 09:22:07',
                'updated_at' => '2016-10-14 09:22:07',
            ),
            2 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'name' => '随手记',
                'title' => 'notes',
                'article_count' => 1,
                'last_article_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 06:22:39',
                'updated_at' => '2016-10-19 06:50:39',
            ),
            3 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'name' => 'Docker - 从入门到实践',
                'title' => 'docker',
                'article_count' => 38,
                'last_article_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 07:36:49',
                'updated_at' => '2016-10-17 07:40:03',
            ),
        ));
        
        
    }
}
