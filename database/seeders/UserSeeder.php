<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create System Admin
        User::create([
            'name' => 'System Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'user_type' => 'admin',
            'email_verified_at' => now(),
        ]);

        // Create Teacher
        User::create([
            'name' => 'Teacher User',
            'email' => 'teacher@gmail.com',
            'password' => Hash::make('password'),
            'user_type' => 'teacher',
            'email_verified_at' => now(),
        ]);

        // Create Student
        User::create([
            'name' => 'Student User',
            'email' => 'student@gmail.com',
            'password' => Hash::make('password'),
            'user_type' => 'student',
            'email_verified_at' => now(),
        ]);
    }
}
