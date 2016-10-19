<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'runnerlee',
                'email' => 'runnerleer@gmail.com',
                'notification_count' => 0,
                'is_disabled' => 'no',
                'password' => '$2y$10$r6ZuwVQu0AOtql8xKEq.reEY5rf6nccWiAs.tKUzerjQTBJ5y50h.',
                'remember_token' => '6OGfNZuv4mDeo2cx5GnzJgTXT9CrLvxK9zEpxLvs1TPgpfCIAyKG70iaM5z9',
                'deleted_at' => NULL,
                'created_at' => '2016-10-13 10:12:09',
                'updated_at' => '2016-10-18 10:22:41',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'heiheihei',
                'email' => '316112444@qq.com',
                'notification_count' => 0,
                'is_disabled' => 'no',
                'password' => '$2y$10$NFGlJC3Njqd1DrPAIcowoueicr9Yxq7HAu3rYAMTkTQ811vZpzgJG',
                'remember_token' => 'Hgpi3Ql7RBIQ7cqFM7GMsk8bYyz3Ye1bvpbid3eFY600EbqK5reLjhLNOMaV',
                'deleted_at' => NULL,
                'created_at' => '2016-10-17 02:07:59',
                'updated_at' => '2016-10-18 03:45:34',
            ),
        ));
        
        
    }
}
