<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(MustahiqsTableSeeder::class);

        // $this->call(RolesTableSeeder::class);

        // $this->call(UsersTableSeeder::class);

        $this->call(TransactionsTableSeeder::class);
    }
}
