<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(categoryTableSeeder::class);
         $this->call(itemChairSeeder::class); #椅子専用シーダーファイル
         $this->call(itemDeskSeeder::class); #机専用シーダーファイル

    }
}
