<?php

use Illuminate\Database\Seeder;

class M_CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_categories')->insert([
            'id' => 1,
            'category_name' => 'ロース',
        ]);
        DB::table('m_categories')->insert([
            'id' => 2,
            'category_name' => 'ヒレ',
        ]);
        DB::table('m_categories')->insert([
            'id' => 3,
            'category_name' => 'タン',
        ]);
        DB::table('m_categories')->insert([
            'id' => 4,
            'category_name' => 'バラ',
        ]);
        DB::table('m_categories')->insert([
            'id' => 5,
            'category_name' => 'モモ',
        ]);
        DB::table('m_categories')->insert([
            'id' => 6,
            'category_name' => 'サーロイン',
        ]);
        DB::table('m_categories')->insert([
            'id' => 7,
            'category_name' => 'その他',
        ]);
    }
}
