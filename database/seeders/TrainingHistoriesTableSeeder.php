<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingHistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainingHistories = [
            ['user_id' => '1',
            'menu_id' => 'dead_lift',
            'unit_record' => '20',
            'length_record' => '10',
            'created_at' => '2022-08-17 14:00:00',
            'created_at' => '2022-08-17 14:00:00',],
            ['user_id' => '1',
            'menu_id' => 'dead_lift',
            'unit_record' => '30',
            'length_record' => '10',
            'created_at' => '2022-08-17 15:00:00',
            'created_at' => '2022-08-17 19:00:00',],
            ['user_id' => '1',
            'menu_id' => 'dead_lift',
            'unit_record' => '40',
            'length_record' => '8',
            'created_at' => '2022-08-17 16:00:00',
            'created_at' => '2022-08-17 16:00:00',],
            ['user_id' => '1',
            'menu_id' => 'dead_lift',
            'unit_record' => '50',
            'length_record' => '5',
            'created_at' => '2022-08-17 18:00:00',
            'created_at' => '2022-08-17 18:00:00',],
            ['user_id' => '1',
            'menu_id' => 'dead_lift',
            'unit_record' => '60',
            'length_record' => '10',
            'created_at' => '2022-08-18 14:00:00',
            'created_at' => '2022-08-18 14:00:00',],
            ['user_id' => '1',
            'menu_id' => 'leg_press',
            'unit_record' => '40',
            'length_record' => '10',
            'created_at' => '2022-08-17 14:00:00',
            'created_at' => '2022-08-17 14:00:00',],
            ['user_id' => '2',
            'menu_id' => 'arm_curl',
            'unit_record' => '20',
            'length_record' => '8',
            'created_at' => '2022-08-17 14:00:00',
            'created_at' => '2022-08-17 14:00:00',],
            ['user_id' => '2',
            'menu_id' => 'running',
            'unit_record' => '8',
            'length_record' => '5',
            'created_at' => '2022-08-17 14:00:00',
            'created_at' => '2022-08-17 14:00:00',],



            ];

    // 登録
    foreach($trainingHistories as $trainingHistory) {
    \App\Models\TrainingHistory::create($trainingHistory);
    }
    }
}
