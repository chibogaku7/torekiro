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
        //
        $parts = [
            ['part_id' => 'chest',
            'part_name' => '胸',],
            ['part_id' => 'leg',
            'part_name' => '脚',],
            ['part_id' => 'shoulder',
            'part_name' => '肩',],
            ['part_id' => 'arm',
            'part_name' => '腕',],
            ['part_id' => 'aerobic',
            'part_name' => '有酸素運動',],
            ['part_id' => 'other',
            'part_name' => 'その他',]

            ];

    // 登録
    foreach($parts as $part) {
    \App\Models\Part::create($part);
    }
    }
}
