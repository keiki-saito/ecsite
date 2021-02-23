<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['category_name'=>'椅子'],
            ['category_name'=>'テーブル'],
            ['category_name'=>'棚'],
            ['category_name'=>'ベッド'],
        ]);
    }
}
