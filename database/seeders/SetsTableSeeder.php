<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       // 初期データ用意（列名をキーとする連想配列）
      $sets = [
              ['user_id' => 1,
              'menu_id' => 2,
              'created_at' => '2022-08-17 14:00:00'],
              ['user_id' => 1,
              'menu_id' => 2,
              'created_at' => '2022-08-17 15:00:00'],
              ['user_id' => 1,
              'menu_id' => 2,
              'created_at' => '2022-08-17 16:00:00'],
              ['user_id' => 1,
              'menu_id' => 2,
              'created_at' => '2022-08-17 17:00:00'],
              ['user_id' => 1,
              'menu_id' => 2,
              'created_at' => '2022-08-18 17:00:00'],
              ['user_id' => 1,
              'menu_id' => 5,
              'created_at' => '2022-08-17 14:10:00'],
              ['user_id' => 2,
              'menu_id' => 10,
              'created_at' => '2022-08-17 14:00:00'],
              ['user_id' => 2,
              'menu_id' => 11,
              'created_at' => '2022-08-17 14:10:00']
            ];

       // 登録
      foreach($sets as $set) {
      \App\Models\Set::create($set);
      }
    }
}
