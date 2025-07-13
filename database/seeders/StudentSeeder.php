<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Student in student database
        Student::create([
            'name' => 'Student User',
            'email' => 'student@gmail.com',
            'password' => Hash::make('password'),
            'user_type' => 'student',
            'email_verified_at' => now(),
        ]);
    }
}
