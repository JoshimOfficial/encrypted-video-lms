<?php

namespace Tests\Feature\Api;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserResourceTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_user_data_in_correct_format()
    {
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'google_id' => '123456789',
        ]);

        $token = $user->createToken('test-token')->plainTextToken;

        $response = $this->withHeader('Authorization', "Bearer $token")
            ->getJson('/api/v1/auth/me');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'name',
                'email',
                'google_id',
                'user_type',
            ])
            ->assertJson([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'user_type' => 'student', // default user type
            ]);
    }
}
