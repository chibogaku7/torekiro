<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // 初期データ用意（列名をキーとする連想配列）
        $menus = [
                ['menu_id' => 1,
                'menu_name' => 'デットプルダウン',
                'part_id' => 1,
                'unit' => 'kg'],
                ['menu_id' => 2,
                'menu_name' => 'デットリフト',
                'part_id' => 1,
                'unit' => 'kg'],
                ['menu_id' => 3,
                'menu_name' => 'チンニング',
                'part_id' => 1,
                'unit' => 'kg'],
                ['menu_id' => 4,
                'menu_name' => 'スクワット',
                'part_id' => 2,
                'unit' => 'kg'],
                ['menu_id' => 5,
                'menu_name' => 'レッグプレス',
                'part_id' => 2,
                'unit' => 'kg'],
                ['menu_id' => 6,
                'menu_name' => 'レッグエクステンション',
                'part_id' => 2,
                'unit' => 'kg'],
                ['menu_id' => 7,
                'menu_name' => 'サイドレイズ',
                'part_id' => 2,
                'unit' => 'kg'],
                ['menu_id' => 8,
                'menu_name' => 'ショルダープレス',
                'part_id' => 3,
                'unit' => 'kg'],
                ['menu_id' => 9,
                'menu_name' => 'フロントレイズ',
                'part_id' => 3,
                'unit' => 'kg'],
                ['menu_id' => 10,
                'menu_name' => 'アームカール',
                'part_id' => 4,
                'unit' => 'kg'],
                ['menu_id' => 11,
                'menu_name' => 'ランニング',
                'part_id' => 5,
                'unit' => 'km/h'],
                ['menu_id' => 12,
                'menu_name' => 'エアロバイク',
                'part_id' => 5,
                'unit' => 'km/h'],
                ['menu_id' => 13,
                'menu_name' => '有酸素運動',
                'part_id' => 6,
                'unit' => 'km/h'], 
                ['menu_id' => 14,
                'menu_name' => '無酸素運動',
                'part_id' => 6,
                'unit' => 'kg'],
                ];

         // 登録
        foreach($menus as $menu) {
        \App\Models\Menu::create($menu);
        }
    }
}
