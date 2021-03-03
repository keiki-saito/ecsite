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
            ['category_name'=>'ベッド'],
            ['category_name'=>'ソファ'],
            ['category_name'=>'カーテン'],
            ['category_name'=>'収納・衣類収納'],
            ['category_name'=>'本棚・ラック・シェルフ'],

        ]);
    }
}
