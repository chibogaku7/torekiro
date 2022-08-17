<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // テーブルのクリア
        DB::table('users')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $users = [
                ['user_id' => '1',
                'user_name' => 'test',
                'password' => 'test',],
                ['user_id' => '2',
                'user_name' => 'test2',
                'password' => 'test2',],
                ['user_id' => '3',
                'user_name' => 'test3',
                'password' => 'test3',],
                ['user_id' => '4',
                'user_name' => 'test4',
                'password' => 'test4',],
                ['user_id' => '5',
                'user_name' => 'test5',
                'password' => 'test5',],

                ];

        // 登録
        foreach($users as $user) {
        \App\Models\User::create($user);
        }
    }
}
