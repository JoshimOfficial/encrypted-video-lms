<?php

namespace Tests\Feature\Api;

use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GoogleAuthTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_authenticate_a_teacher_via_google()
    {
        $response = $this->postJson('/api/v1/auth/google', [
            'token' => 'fake-token',
            'profile' => [
                'sub' => '123456789',
                'name' => 'John Teacher',
                'email' => 'john.teacher@example.com',
                'login_type' => 'teacher'
            ]
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => [
                    'user' => [
                        'name',
                        'email',
                        'profile_photo',
                        'google_id',
                        'user_type',
                    ],
                    'token',
                ]
            ])
            ->assertJson([
                'status' => 'success',
                'message' => 'User authenticated successfully',
                'data' => [
                    'user' => [
                        'name' => 'John Teacher',
                        'email' => 'john.teacher@example.com',
                        'user_type' => 'teacher'
                    ]
                ]
            ]);

        $this->assertDatabaseHas('teachers', [
            'google_id' => '123456789',
            'email' => 'john.teacher@example.com',
            'name' => 'John Teacher',
            'user_type' => 'teacher'
        ]);
    }

    /** @test */
    public function it_can_authenticate_a_student_via_google()
    {
        $response = $this->postJson('/api/v1/auth/google', [
            'token' => 'fake-token',
            'profile' => [
                'sub' => '987654321',
                'name' => 'Jane Student',
                'email' => 'jane.student@example.com',
                'login_type' => 'student'
            ]
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => [
                    'user' => [
                        'name',
                        'email',
                        'profile_photo',
                        'google_id',
                        'user_type',
                    ],
                    'token',
                ]
            ])
            ->assertJson([
                'status' => 'success',
                'message' => 'User authenticated successfully',
                'data' => [
                    'user' => [
                        'name' => 'Jane Student',
                        'email' => 'jane.student@example.com',
                        'user_type' => 'student'
                    ]
                ]
            ]);

        $this->assertDatabaseHas('students', [
            'google_id' => '987654321',
            'email' => 'jane.student@example.com',
            'name' => 'Jane Student',
            'user_type' => 'student'
        ]);
    }

    /** @test */
    public function it_can_login_an_existing_teacher_via_google()
    {
        $teacher = Teacher::factory()->create([
            'google_id' => '123456789',
            'email' => 'john.teacher@example.com',
            'name' => 'John Teacher',
        ]);

        $response = $this->postJson('/api/v1/auth/google', [
            'token' => 'fake-token',
            'profile' => [
                'sub' => '123456789',
                'name' => 'John Teacher',
                'email' => 'john.teacher@example.com',
                'login_type' => 'teacher'
            ]
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => [
                    'user' => [
                        'name',
                        'email',
                        'profile_photo',
                        'google_id',
                        'user_type',
                    ],
                    'token',
                ]
            ])
            ->assertJson([
                'status' => 'success',
                'message' => 'User authenticated successfully',
                'data' => [
                    'user' => [
                        'name' => 'John Teacher',
                        'email' => 'john.teacher@example.com',
                        'user_type' => 'teacher'
                    ]
                ]
            ]);
    }

    /** @test */
    public function it_can_login_an_existing_student_via_google()
    {
        $student = Student::factory()->create([
            'google_id' => '987654321',
            'email' => 'jane.student@example.com',
            'name' => 'Jane Student',
        ]);

        $response = $this->postJson('/api/v1/auth/google', [
            'token' => 'fake-token',
            'profile' => [
                'sub' => '987654321',
                'name' => 'Jane Student',
                'email' => 'jane.student@example.com',
                'login_type' => 'student'
            ]
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => [
                    'user' => [
                        'name',
                        'email',
                        'profile_photo',
                        'google_id',
                        'user_type',
                    ],
                    'token',
                ]
            ])
            ->assertJson([
                'status' => 'success',
                'message' => 'User authenticated successfully',
                'data' => [
                    'user' => [
                        'name' => 'Jane Student',
                        'email' => 'jane.student@example.com',
                        'user_type' => 'student'
                    ]
                ]
            ]);
    }

    /** @test */
    public function it_saves_profile_photo_from_google_profile()
    {
        $profilePhotoUrl = 'https://example.com/profile.jpg';

        $response = $this->postJson('/api/v1/auth/google', [
            'token' => 'fake-token',
            'profile' => [
                'sub' => '123456789',
                'name' => 'John Teacher',
                'email' => 'john.teacher@example.com',
                'picture' => $profilePhotoUrl,
                'login_type' => 'teacher'
            ]
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => [
                    'user' => [
                        'name',
                        'email',
                        'profile_photo',
                        'google_id',
                        'user_type',
                    ],
                    'token',
                ]
            ])
            ->assertJson([
                'status' => 'success',
                'message' => 'User authenticated successfully',
                'data' => [
                    'user' => [
                        'name' => 'John Teacher',
                        'email' => 'john.teacher@example.com',
                        'profile_photo' => $profilePhotoUrl,
                        'user_type' => 'teacher'
                    ]
                ]
            ]);

        $this->assertDatabaseHas('teachers', [
            'google_id' => '123456789',
            'email' => 'john.teacher@example.com',
            'name' => 'John Teacher',
            'profile_photo' => $profilePhotoUrl,
            'user_type' => 'teacher'
        ]);
    }

    /** @test */
    public function it_requires_valid_login_type()
    {
        $response = $this->postJson('/api/v1/auth/google', [
            'token' => 'fake-token',
            'profile' => [
                'sub' => '123456789',
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'login_type' => 'invalid_type'
            ]
        ]);

        $response->assertStatus(422);
    }
}
