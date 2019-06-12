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
        $user = User::create(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => \Hash::make(12345678)
            ]
        );
        $user->assignRole('Admin');

        return $user;
    }
}
