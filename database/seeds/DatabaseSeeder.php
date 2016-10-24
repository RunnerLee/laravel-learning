<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('UsersTableSeeder');
        $this->call('ArticlesTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('CommentsTableSeeder');
        $this->call('FavoritesTableSeeder');
        $this->call('NotificationsTableSeeder');
    }
}
