<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeFin\User::class, 1)
            ->states('admin')
            ->create([
                'name' => 'Lucas Santos',
                'email' => 'admin@user.com'
            ]);

        factory(\CodeFin\User::class, 1)
            ->create([
                'email' => 'client@user.com'
            ]);
    }
}
