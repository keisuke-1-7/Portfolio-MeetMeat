<?php

use Illuminate\Database\Seeder;

class M_Users_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_users')->insert([
            [
                'password' => bcrypt('sample1'),
                'last_name' => '太郎',
                'first_name' => '田中',
                'zipcode' => '0000001',
                'prefecture' => '東京都', 
                'municipality' => '足立区',
                'address' => '1-1-1',
                'apartments' => '101号室',
                'email' => 'sample1@sample.com',
                'phone_number' => '11111111111',
                'user_classification_id' => '1',
                'company_name' => '株式会社A',
                'delete_flag' => '0',
            ],
            [
                'password' => bcrypt('sample2'),
                'last_name' => '優',
                'first_name' => '斎藤',
                'zipcode' => '0000002',
                'prefecture' => '神奈川県', 
                'municipality' => '横浜市',
                'address' => '2-2-2',
                'apartments' => '202号室',
                'email' => 'sample2@sample.com',
                'phone_number' => '22222222222',
                'user_classification_id' => '2',
                'company_name' => '株式会社B',
                'delete_flag' => '0',
            ],
            [
                'password' => bcrypt('sample3'),
                'last_name' => '紘',
                'first_name' => '西野',
                'zipcode' => '0000003',
                'prefecture' => '埼玉県', 
                'municipality' => 'さいたま市',
                'address' => '3-3-3',
                'apartments' => '303号室',
                'email' => 'sample3@sample.com',
                'phone_number' => '33333333333',
                'user_classification_id' => '3',
                'company_name' => '株式会社C',
                'delete_flag' => '0',
            ],
        ]); 
    }
}