<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
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
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'level' => '1',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'level' => '0',
                'password' => bcrypt('123456'),
            ],
        ];
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
