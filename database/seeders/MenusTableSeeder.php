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
        $menus = [
            ['menu_id' => 'dead_pulldown',
            'menu_name' => 'デットプルダウン',
            'part_id' => 'chest',
            'unit' => 'kg'],
            ['menu_id' => 'dead_lift',
            'menu_name' => 'デッドリフト',
            'part_id' => 'chest',
            'unit' => 'kg'],
            ['menu_id' => 'chinning',
            'menu_name' => 'チンニング',
            'part_id' => 'chest',
            'unit' => 'kg'],
            ['menu_id' => 'squat',
            'menu_name' => 'スクワット',
            'part_id' => 'leg',
            'unit' => 'kg'],
            ['menu_id' => 'leg_press',
            'menu_name' => 'レッグプレス',
            'part_id' => 'leg',
            'unit' => 'kg'],
            ['menu_id' => 'leg_extention',
            'menu_name' => 'レッグエクステンション',
            'part_id' => 'leg',
            'unit' => 'kg'],
            ['menu_id' => 'side_raise',
            'menu_name' => 'サイドレイズ',
            'part_id' => 'shoulder',
            'unit' => 'kg'],
            ['menu_id' => 'shoulder_press',
            'menu_name' => 'ショルダープレス',
            'part_id' => 'shoulder',
            'unit' => 'kg'],
            ['menu_id' => 'front_raise',
            'menu_name' => 'フロントレイズ',
            'part_id' => 'shoulder',
            'unit' => 'kg'],
            ['menu_id' => 'arm_curl',
            'menu_name' => 'アームカール',
            'part_id' => 'arm',
            'unit' => 'kg'],
            ['menu_id' => 'running',
            'menu_name' => 'ランニング',
            'part_id' => 'aerobic',
            'unit' => 'km/h'],
            ['menu_id' => 'exercise_bike',
            'menu_name' => 'エアロバイク',
            'part_id' => 'aerobic',
            'unit' => 'km/h'],
            ['menu_id' => 'other',
            'menu_name' => 'その他',
            'part_id' => 'other',
            'unit' => 'kg'],




            ];

    // 登録
    foreach($menus as $menu) {
    \App\Models\Menu::create($menu);
    }
    }
}
