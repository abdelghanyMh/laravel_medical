<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        // insert users 
        $users = [
            [
                'name' => 'Doctor',
                'lastname' => 'Doctor_lastname',
                'username' => 'Doctor_username',
                'email' => 'doctor@clinictlemcen.com',
                'role' => 0,
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Doctor2',
                'lastname' => 'Doctor2_lastname',
                'username' => 'Doctor2_username',
                'email' => 'doctor2@clinictlemcen.com',
                'role' => 0,
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Secretary',
                'lastname' => 'Secretary_lastname',
                'username' => 'Secretary_username',
                'email' => 'secretary@clinictlemcen.com',
                'role' => 1,
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Admin',
                'lastname' => 'Admin_lastname',
                'username' => 'Admin_username',
                'email' => 'admin@clinictlemcen.com',
                'role' => 2,
                'password' => Hash::make('123456'),
            ],

        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }

        // insert patient 
        \App\Models\Patient::factory(5)->create();

        // populate  doctor_patient table
        $data = [
            ['patient_id' => 1, 'user_id' => fake()->numberBetween(1, 2)],
            ['patient_id' => 2, 'user_id' => fake()->numberBetween(1, 2)],
            ['patient_id' => 3, 'user_id' => fake()->numberBetween(1, 2)],
            ['patient_id' => 4, 'user_id' => fake()->numberBetween(1, 2)],
            ['patient_id' => 5, 'user_id' => fake()->numberBetween(1, 2)],
        ];
        DB::table('doctor_patient')->insert($data);

        // insert Appointments 
        \App\Models\Appointment::factory(5)->create();

        // insert Prescriptions 
        \App\Models\Prescription::factory(5)->create();
        
        // insert OrientationLetters 
        \App\Models\OrientationLetter::factory(5)->create();


    }
}