<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'email' => 'lesstif@gmail.com',
                'name' => '정광섭',
            ],
            [
                'email' => 'im@getsolaris.kr',
                'name' => '김민근',
            ],
            [
                'email' => 'ehdgh6820@gmail.com',
                'name' => '원동호',
            ],
            [
                'email' => 'wonjun.choi@meshkorea.net',
                'name' => '최원준',
            ],
            [
                'email' => 'kaelch@naver.com',
                'name' => '김찬호',
            ],
        ];

        foreach ($users as $user) {
            $u = User::find($user['email']);

            if ($u !== null) {
                continue;
            }

            $user['password'] = bcrypt('secret123');

            User::create($user);
        }
    }
}
