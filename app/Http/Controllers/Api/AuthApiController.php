<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends ApiController
{
    public function register(RegisterRequest $request){
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $token = $user->createToken('appToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(LoginRequest $request){
        // check email
        $user = User::where('email', $request->input('email'))->first();
        
        // check password
        if (!$user || !Hash::check($request->input('password'), $user->password)) {
            return response([
                'message' => 'Bad login'
            ], 401);
        }

        $token = $user->createToken('appToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    
    public function logout(){
        auth()->user()->tokens()->delete();
        
        return response([
            'message' => "logged out"
        ]);
    }
}
