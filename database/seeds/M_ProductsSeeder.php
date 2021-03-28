<?php

use Illuminate\Database\Seeder;

class M_ProductsSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      DB::table('m_products')->insert([
         'id' => 1,
         'product_name' => '黒毛和牛サーロイン',
         'category_id' => 6,
         'price' => 8000,
         'description' => 'なめらかでとろける食感と、甘くコクがある上品な香りが特徴です',
         'product_image' => 'https://s3-meetmeat.s3-ap-northeast-1.amazonaws.com/meetmeat-storage/1sirloin.jpg',
         'sale_status_id' => 1,
         'product_status_id' => 1,
         'resist_date' => date('Y-m-d H:i:s'),
         'user_id' => 1,
         'delete_flag' => ''
      ]);
      DB::table('m_products')->insert([
         'id' => 2,
         'product_name' => 'A5ランク松坂牛ロース',
         'category_id' => 1,
         'price' => 12000,
         'description' => '松坂牛は濃厚で上品な甘みが絶品！',
         'product_image' => 'https://s3-meetmeat.s3.ap-northeast-1.amazonaws.com/meetmeat-storage/2rosu.jpg',
         'sale_status_id' => 1,
         'product_status_id' => 1,
         'resist_date' => date('Y-m-d H:i:s'),
         'user_id' => 1,
         'delete_flag' => ''
         ]);
      DB::table('m_products')->insert([
         'id' => 3,
         'product_name' => 'ヒレステーキ',
         'category_id' => 2,
         'price' => 5000,
         'description' => '老若男女問わず選ばれる柔らかさのヒレステーキです',
         'product_image' => 'https://s3-meetmeat.s3.ap-northeast-1.amazonaws.com/meetmeat-storage/3hire.jpg',
         'sale_status_id' => 1,
         'product_status_id' => 1,
         'resist_date' => date('Y-m-d H:i:s'),
         'user_id' => 1,
         'delete_flag' => ''
      ]);
      DB::table('m_products')->insert([
         'id' => 4,
         'product_name' => '厚切りタン',
         'category_id' => 3,
         'price' => 6000,
         'description' => '食べ応え抜群で身がぎっしり！',
         'product_image' => 'https://s3-meetmeat.s3.ap-northeast-1.amazonaws.com/meetmeat-storage/4tan.jpg',
         'sale_status_id' => 1,
         'product_status_id' => 1,
         'resist_date' => date('Y-m-d H:i:s'),
         'user_id' => 2,
         'delete_flag' => ''
      ]);
      DB::table('m_products')->insert([
         'id' => 5,
         'product_name' => '特選セット',
         'category_id' => 7,
         'price' => 50000,
         'description' => '最高品質の部位を集めた贅沢なセットです',
         'product_image' => 'https://s3-meetmeat.s3.ap-northeast-1.amazonaws.com/meetmeat-storage/5tokusen.jpg',
         'sale_status_id' => 1,
         'product_status_id' => 1,
         'resist_date' => date('Y-m-d H:i:s'),
         'user_id' => 2,
         'delete_flag' => ''
      ]);
      DB::table('m_products')->insert([
         'id' => 6,
         'product_name' => '飛騨牛特選バラ',
         'category_id' => 4,
         'price' => 6000,
         'description' => '良質な油がと肉厚をお楽しみください',
         'product_image' => 'https://s3-meetmeat.s3.ap-northeast-1.amazonaws.com/meetmeat-storage/6bara.jpg',
         'sale_status_id' => 1,
         'product_status_id' => 1,
         'resist_date' => date('Y-m-d H:i:s'),
         'user_id' => 2,
         'delete_flag' => ''
      ]);
      DB::table('m_products')->insert([
         'id' => 7,
         'product_name' => '神戸牛最高ランクもも肉',
         'category_id' => 5,
         'price' => 8000,
         'description' => '最高品質の部位を集めた贅沢なセットです',
         'product_image' => 'https://s3-meetmeat.s3.ap-northeast-1.amazonaws.com/meetmeat-storage/7momo.jpg',
         'sale_status_id' => 1,
         'product_status_id' => 1,
         'resist_date' => date('Y-m-d H:i:s'),
         'user_id' => 2,
         'delete_flag' => ''
      ]);
   }
}
