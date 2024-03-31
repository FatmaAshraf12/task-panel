<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRole = Role::where('name', 'user')->first();

        $user = User::create([
            'name' => 'User 1',
            'email' => 'user@gmail.com',
            'password' => '12345678',
        ]);

        $user->assignRole($userRole);
    }
}
