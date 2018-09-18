<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'email' => 'admin@mail.com',
            'name' => "Admin",
            'password' => bcrypt('123456'),
            'role_id' => 1
        ]);

        User::create([
            'email' => 'rita@mail.com',
            'name' => "Rita",
            'password' => bcrypt('123456'),
            'role_id' => 3
        ]);

    }
}
