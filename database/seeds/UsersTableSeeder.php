<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
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
                'name'      => 'Felipe Soares',
                'email'     => 'felipe@gmail.com',
                'password'  => bcrypt('123456'),
                'administrator'  => 1,
                'status'  => 1,
            ],
        ];

        User::insert($users);
    }
}
