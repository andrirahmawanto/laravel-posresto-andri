<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //login
    public function login(Request $request){
        //validate
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required',
        ]);
        //check user
        $user = User::where('email', $request->email)->first();
        if(!$user){
            return response()->json([
                'status'=> 'error',
                'message'=> 'User Not Found'
            ], 404);
        }
        //check correct
        if(!Hash::check($request->password, $user->password)){
            return response()->json([
                'status'=> 'error',
                'message'=> 'Invalid Credentials'
            ],401);
        }

        //generate Token
        $token = $user->createToken('auth-token')->plainTextToken;
        return response()->json([
            'message'=> 'Login Successfull',
            'token'=> $token,
            'user'=> $user,
        ], 200);

        //login user
        // if(!auth()->attempt($request->only('email', 'password'))){
        //     return response()->json([
        //         'message'=> 'Invalid Login Details',
        //     ], 401);
        // }
        // $user = auth()->user();
        // $token = $user->createToken('token-name')->plainTextToken;

        // return response()->json([
        //     'message'=> 'Login Successfull',
        //     'user'=> $user,
        //     'token'=> $token,
        // ]);
    }
}
