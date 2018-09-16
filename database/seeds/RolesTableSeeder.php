<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        $roles = ['Admin', 'Moderator', 'Customer'];

        foreach ($roles as $role) {
             Role::create(['name' => $role]);
        }
    }
}
