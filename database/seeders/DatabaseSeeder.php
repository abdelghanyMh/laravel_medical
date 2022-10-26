<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $users = [
            [
                'name' => 'Doctor',
                'lastname' => 'Doctor_lastname',
                'username' => 'Doctor_username',
                'email' => 'doctor@clinictlemcen.com',
                'role' => 0,
                'password' =>  Hash::make('123456'),
            ],
            [
                'name' => 'Secretary',
                'lastname' => 'Secretary_lastname',
                'username' => 'Secretary_username',
                'email' => 'secretary@clinictlemcen.com',
                'role' => 1,
                'password' =>  Hash::make('123456'),
            ],
            [
                'name' => 'Admin',
                'lastname' => 'Admin_lastname',
                'username' => 'Admin_username',
                'email' => 'admin@clinictlemcen.com',
                'role' => 2,
                'password' =>  Hash::make('123456'),
            ],

        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
