<?php

use Illuminate\Database\Seeder;

class FavoritesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('favorites')->delete();
        
        \DB::table('favorites')->insert(array (
            0 => 
            array (
                'id' => 25,
                'user_id' => 2,
                'article_id' => 27,
                'deleted_at' => NULL,
                'created_at' => '2016-10-18 10:17:11',
                'updated_at' => '2016-10-18 10:17:11',
            ),
            1 => 
            array (
                'id' => 26,
                'user_id' => 2,
                'article_id' => 28,
                'deleted_at' => NULL,
                'created_at' => '2016-10-18 10:18:33',
                'updated_at' => '2016-10-18 10:18:33',
            ),
        ));
        
        
    }
}
