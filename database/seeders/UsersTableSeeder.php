<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


         // 初期データ用意（列名をキーとする連想配列）
        $users = [
                ['user_name' => 'test',
                'password' => '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08',],
                ['user_name' => 'test2',
                'password' => '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08',],
                ['user_name' => 'test3',
                'password' => '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08',],
                ['user_name' => 'test4',
                'password' => '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08',],
                ['user_name' => 'test5',
                'password' => '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08',]
                ];

         // 登録
        foreach($users as $user) {
        \App\Models\User::create($user);
        }
    }
}
