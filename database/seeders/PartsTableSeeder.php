<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         // 初期データ用意（列名をキーとする連想配列）
        $parts = [
                ['part_id' => 1,
                'part_name' => '胸'],
                ['part_id' => 2,
                'part_name' => '脚'],
                ['part_id' => 3,
                'part_name' => '肩'],
                ['part_id' => 4,
                'part_name' => '腕'],
                ['part_id' => 5,
                'part_name' => '有酸素運動'],
                ['part_id' => 6,
                'part_name' => 'その他']
                ];

         // 登録
        foreach($parts as $part) {
        \App\Models\Part::create($part);
        }
    }
}
