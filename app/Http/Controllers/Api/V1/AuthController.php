<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function login(login $request)
    {
        $username = $request->username;
        $password = $request->password;
//        Personal access client created successfully.
//    Client ID: 3
//Client secret: MfTMiWVWvu7wleQIx91hTNrUN4oayS6wFWeGUoM4
//Password grant client created successfully.
//    Client ID: 4
//Client secret: 2EDbUiaZfHDA2Lg5zz5unjvwc1Vi8n59Mxm78zzP

//        if ($username=='ariyaserver' and $password=='Ariya1234ariya@$'){
//
//        }

        $response = Http::post('https://app.ariyarestoran.com/api/v1/oauth/token', [
            'grant_type' => 'password',
            'client_id' => '2',
            'client_secret' => 'B5hoMyVuhC5IkNv5l8phtiGbYASD5dROW9meiJvf',
            'username' => $username,
            'password' => $password,
        ]);
        if ($response->successful()) {
            $accessToken = $response->json('access_token');
            return $this->successResponse(['token' => $accessToken], '');
        } else {
            return $this->errorResponse('Invalid username or password', 404);
        }

    }
}
