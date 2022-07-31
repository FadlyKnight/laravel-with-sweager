<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails()) {
            return response()->error([ 'errors' => $validator->errors()->all()], $validator->errors()->first());
        }
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            return response()->success([ 'token' => $user->createToken(env('APP_TOKEN_ENC','nApp'))->accessToken, 'user' => $user ], 'success login');
        } else {
            return response()->error(null, 'User does not exist / Password mismatch');
        }
    }

    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        return response()->success(null, 'You have been successfully logged out!');
    }
    
}
