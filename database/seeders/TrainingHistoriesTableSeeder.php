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
        $training_histories = [
            ['user_id' => '1',
            'menu_id' => 'dead_lift',
            'strength' => '20',
            'times' => '10',
            'created_at' => '2022-08-17 14:00:00',
            'created_at' => '2022-08-17 14:00:00',],
            ['user_id' => '1',
            'menu_id' => 'dead_lift',
            'strength' => '30',
            'times' => '10',
            'created_at' => '2022-08-17 15:00:00',
            'created_at' => '2022-08-17 19:00:00',],
            ['user_id' => '1',
            'menu_id' => 'dead_lift',
            'strength' => '40',
            'times' => '8',
            'created_at' => '2022-08-17 16:00:00',
            'created_at' => '2022-08-17 16:00:00',],
            ['user_id' => '1',
            'menu_id' => 'dead_lift',
            'strength' => '50',
            'times' => '5',
            'created_at' => '2022-08-17 18:00:00',
            'created_at' => '2022-08-17 18:00:00',],
            ['user_id' => '1',
            'menu_id' => 'dead_lift',
            'strength' => '60',
            'times' => '10',
            'created_at' => '2022-08-18 14:00:00',
            'created_at' => '2022-08-18 14:00:00',],
            ['user_id' => '1',
            'menu_id' => 'leg_press',
            'strength' => '40',
            'times' => '10',
            'created_at' => '2022-08-17 14:00:00',
            'created_at' => '2022-08-17 14:00:00',],
            ['user_id' => '2',
            'menu_id' => 'arm_curl',
            'times' => '20',
            'strength' => '8',
            'created_at' => '2022-08-17 14:00:00',
            'created_at' => '2022-08-17 14:00:00',],
            ['user_id' => '2',
            'menu_id' => 'running',
            'strength' => '8',
            'times' => '5',
            'created_at' => '2022-08-17 14:00:00',
            'created_at' => '2022-08-17 14:00:00',],



            ];

    // 登録
    foreach($training_histories as $trainingHistory) {
    \App\Models\TrainingHistory::create($trainingHistory);
    }
    }
}
