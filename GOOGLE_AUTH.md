# Google Authentication Implementation

This document explains how Google authentication is implemented in the Encrypted Video LMS system.

## Overview

The system supports Google authentication for both teachers and students. Based on the `login_type` provided in the Google profile response, users are authenticated against the appropriate user table:
- Teachers are authenticated against the `teachers` table
- Students are authenticated against the `students` table

## API Endpoint

**POST** `/api/v1/auth/google`

### Request Body

```json
{
  "token": "google_oauth_token",
  "profile": {
    "name": "User Name",
    "profile_photo": "https://example.com/profile.jpg",
    "email": "user@example.com",
    "google_id": "google_user_id",
    "login_type": "teacher" // or "student"
  }
}
```

### Response

```json
{
  "status": "success",
  "message": "User authenticated successfully",
  "data": {
    "user": {
      "name": "User Name",
      "email": "user@example.com",
      "profile_photo": "https://example.com/profile.jpg",
      "google_id": "google_user_id",
      "user_type": "teacher" // or "student"
    },
    "token": "1|tkfxKoEzg6I7VIZp7EO4naaWZZuUSJN721lsNNhs7b27e330"
  }
}
```

## Profile Access Endpoints

### For Web Applications (Including Next.js)

**GET** `/api/v1/profile`

This endpoint allows authenticated users to access their profile information without requiring a bearer token. It uses session-based authentication.

Response:
```json
{
  "name": "User Name",
  "email": "user@example.com",
  "profile_photo": "https://example.com/profile.jpg",
  "google_id": "google_user_id",
  "user_type": "teacher" // or "student"
}
```

### For API Applications

**GET** `/api/v1/auth/me` (Requires Bearer Token)

This endpoint requires a bearer token for authentication.

## How It Works

1. When a user clicks the Google login button, the frontend handles the OAuth flow
2. The frontend receives the Google token and profile information
3. The frontend sends this data to the `/api/v1/auth/google` endpoint
4. The backend checks if a user with the Google ID already exists in the appropriate table (teachers or students based on login_type)
5. If the user exists, they are authenticated and a new token is generated
6. If the user doesn't exist, a new user is created in the appropriate table and then authenticated
7. The backend logs the user in for web sessions and returns the user data and authentication token
8. If a profile photo URL is provided in the Google profile, it is saved to the user's record

## Implementation Details

### Resource

- `App\Http\Resources\UserResource` - A resource class that standardizes the user data format across all API responses

### Models

- `App\Models\Teacher` - Represents a teacher user
- `App\Models\Student` - Represents a student user
- Both models use the `HasApiTokens` trait for token generation

### Controller

`App\Http\Controllers\Api\AuthController` handles the Google authentication logic in the `googleAuth` method:
- Validates the request data
- Checks the `login_type` to determine which table to use
- Looks for existing users by Google ID
- Creates new users if they don't exist
- Saves the profile photo URL if provided in the Google profile
- Generates and returns an authentication token
- Logs the user in for web sessions using `Auth::login()`
- Uses `UserResource` to standardize the response format

## Database Structure

### Teachers Table
```php
Schema::create('teachers', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('profile_photo')->nullable();
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password')->nullable();
    $table->string('google_id')->nullable()->unique();
    $table->string('user_type')->default('teacher');
    $table->rememberToken();
    $table->timestamps();
});
```

### Students Table
```php
Schema::create('students', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('profile_photo')->nullable();
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password')->nullable();
    $table->string('google_id')->nullable()->unique();
    $table->string('user_type')->default('student');
    $table->rememberToken();
    $table->timestamps();
});
```

## Testing

Tests are implemented in:
- `tests/Feature/Api/GoogleAuthTest.php` - Tests for Google authentication
- `tests/Feature/Api/UserResourceTest.php` - Tests for the UserResource
- `tests/Feature/WebProfileTest.php` - Tests for web-based profile access

To run the tests:
```bash
php artisan test --filter=GoogleAuthTest
php artisan test --filter=UserResourceTest
php artisan test --filter=WebProfileTest
```
