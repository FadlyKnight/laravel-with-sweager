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
    /**
     * @OA\Post(
     * path="/login",
     * summary="Sign in",
     * description="Login by email, password",
     * operationId="authLogin",
     * tags={"auth"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user credentials",
     *    @OA\JsonContent(
     *       required={"email","password"},
     *       @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     *       @OA\Property(property="password", type="string", format="password", example="PassWord12345"),
     *    ),
     * ),
     * @OA\Response(
     *    response=400,
     *    description="Wrong credentials response",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="User does not exist / Password mismatch")
     *        )
     *     ),
     * @OA\Response(
     *    response=200,
     *    description="Success Login",
     *      @OA\Property( 
     *          property="user",        
     *          ref="#/components/schemas/LoginResponseResource"
     *      )
     *     )
     * ),
     */
    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails()) {
            return response()->error([ 'errors' => $validator->errors()->all()], $validator->errors()->first());
        }
        $user = User::where('email', $request->email)->selectImportant()->first();
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
