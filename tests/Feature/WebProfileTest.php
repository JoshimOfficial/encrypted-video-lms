<?php

namespace Tests\Feature;

use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WebProfileTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_teacher_profile_for_authenticated_teacher()
    {
        // Create a teacher
        $teacher = Teacher::factory()->create([
            'name' => 'John Teacher',
            'email' => 'john.teacher@example.com',
        ]);

        // Authenticate as teacher
        $this->actingAs($teacher, 'teacher');

        // Call the profile endpoint
        $response = $this->getJson('/api/v1/profile');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'name',
                'email',
                'profile_photo',
                'google_id',
                'user_type',
            ])
            ->assertJson([
                'name' => 'John Teacher',
                'email' => 'john.teacher@example.com',
                'user_type' => 'teacher'
            ]);
    }

    /** @test */
    public function it_returns_student_profile_for_authenticated_student()
    {
        // Create a student
        $student = Student::factory()->create([
            'name' => 'Jane Student',
            'email' => 'jane.student@example.com',
        ]);

        // Authenticate as student
        $this->actingAs($student, 'student');

        // Call the profile endpoint
        $response = $this->getJson('/api/v1/profile');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'name',
                'email',
                'profile_photo',
                'google_id',
                'user_type',
            ])
            ->assertJson([
                'name' => 'Jane Student',
                'email' => 'jane.student@example.com',
                'user_type' => 'student'
            ]);
    }

    /** @test */
    public function it_returns_unauthorized_for_unauthenticated_users()
    {
        // Call the profile endpoint without authentication
        $response = $this->getJson('/api/v1/profile');

        $response->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.'
            ]);
    }
}
