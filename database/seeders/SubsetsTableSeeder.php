<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SubsetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         // 初期データ用意（列名をキーとする連想配列）
        $subsets = [
                ['training_id' => 1,
                'repeat' => 1,
                'strength' => 20,
                'times' => 10],
                ['training_id' => 1,
                'repeat' => 2,
                'strength' => 30,
                'times' => 10],
                ['training_id' => 1,
                'repeat' => 3,
                'strength' => 40,
                'times' => 8],
                ['training_id' => 1,
                'repeat' => 4,
                'strength' => 50,
                'times' => 5],
                ['training_id' => 1,
                'repeat' => 5,
                'strength' => 60,
                'times' => 10],
                ['training_id' => 2,
                'repeat' => 1,
                'strength' => 40,
                'times' => 10],
                ['training_id' => 3,
                'repeat' => 1,
                'strength' => 20,
                'times' => 8],
                ['training_id' => 4,
                'repeat' => 1,
                'strength' => 20,
                'times' => 10],
                ['training_id' => 5,
                'repeat' => 1,
                'strength' => 20,
                'times' => 10],
                ['training_id' => 6,
                'repeat' => 1,
                'strength' => 30,
                'times' => 10],
                ['training_id' => 7,
                'repeat' => 1,
                'strength' => 40,
                'times' => 8],
                ['training_id' => 8,
                'repeat' => 1,
                'strength' => 50,
                'times' => 5],
              
                ];

         // 登録
        foreach($subsets as $subset) {
        \App\Models\Subset::create($subset);
        }
    }
}
