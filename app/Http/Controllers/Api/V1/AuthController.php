<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Hardcoded user credentials
        $validUsername = 'your_username'; // Replace with your desired username
        $validPassword = 'your_password'; // Replace with your desired password

        if ($credentials['username'] === $validUsername && $credentials['password'] === $validPassword) {
            $token = hash('sha256', $validUsername . $validPassword . Str::random(40)); // Generate a token
            return $this->successResponse(['token' => $token], '');
        }
        return $this->errorResponse('Invalid username or password', 404);
    }
}
