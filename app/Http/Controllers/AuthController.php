<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     try {
    //         if (! $token = JWTAuth::attempt($credentials)) {
    //             return response()->json(['error' => 'Invalid credentials'], 400);
    //         }
    //     } catch (JWTException $e) {
    //         return response()->json(['error' => 'Could not create token'], 500);
    //     }

    //     return response()->json(compact('token'));
    // }

    // public function logout(Request $request)
    // {
    //     $this->validate($request, ['token' => 'required']);

    //     try {
    //         JWTAuth::invalidate($request->input('token'));
    //         return response()->json(['success' => 'User logged out successfully']);
    //     } catch (JWTException $e) {
    //         return response()->json(['error' => 'Could not log out user'], 500);
    //     }
    // }

    // public function getAuthenticatedUser()
    // {
    //     try {
    //         if (! $user = JWTAuth::parseToken()->authenticate()) {
    //             return response()->json(['error' => 'User not found'], 404);
    //         }
    //     } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
    //         return response()->json(['error' => 'Token expired'], $e->getStatusCode());
    //     } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
    //         return response()->json(['error' => 'Token invalid'], $e->getStatusCode());
    //     } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
    //         return response()->json(['error' => 'Token absent'], $e->getStatusCode());
    //     }

    //     return response()->json(compact('user'));
    // }

    // public function refresh()
    // {
    //     return response()->json(['token' => JWTAuth::refresh()]);
    // }

    // gpt

    // public function register(Request $request){

    //     $validator = Validator::make($request->all(),[
    //         'name'=>'required',
    //         'email'=>'required|email|unique:admins',
    //         'password'=>'required',
    //     ]);

    //     if($validator->fails()){
    //         return response()->json($validator->errors(),400);
    //     }

    //     $admin = Admin::create([
    //         'name'=>$request->name,
    //         'email'=>$request->email,
    //         'password'=>Hash::make($request->password),
    //         'isSuperAdmin'=>1,
    //     ]);

    //     return response()->json([
    //         'message'=>'User Register Successfully',
    //         'admin'=>$admin
    //     ]);
    // }


    // public function login(Request $request){

    //     $validator = Validator::make($request->all(),[
    //         'email'=>'required',
    //         'password'=>'required',
    //     ]);

    //     if($validator->fails()){
    //         return response()->json($validator->errors(),400);
    //     }

    //     if(!$token = auth()->attempt($validator->validated()))
    //     {
    //         return response()->json(['error'=>'unauthorized']);
    //     }

    //     return $this->respondWithToken($token);
    // }

    // protected function respondWithToken($token){
    //     return response()->json([
    //         'access_token'=>$token,
    //         'token_type'=>'bearer',
    //         'expires_in'=>auth()->factory()->getTTL()*60
    //     ]);
    // }

    // public function profile()
    // {
    //     return response()->json(auth()->user());
    // }

    public function register(Request $request)
{
    // Validate incoming request
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:admins|max:255',
        'password' => 'required|string|min:8', // Consider adding more rules for password complexity
    ]);

    // Return validation errors if any
    if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
    }

    // Create new admin
    $admin = Admin::create([
        'name' => $request->name,
        'email' => $request->email,
        // 'password' => Hash::make($request->password),
        'password' => $request->password,
        'isSuperAdmin' => 1,
    ]);

    // Return success response
    return response()->json([
        'message' => 'User registered successfully',
        'admin' => $admin
    ]);
}

public function login(Request $request)
{
    // Validate incoming request
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    // Return validation errors if any
    if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
    }

    // Attempt to authenticate and issue token
    if (!$token = auth()->attempt($validator->validated())) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    // Return token response
    return $this->respondWithToken($token);
}

protected function respondWithToken($token)
{
    return response()->json([
        'access_token' => $token,
        'token_type' => 'bearer',
        'expires_in' => auth()->factory()->getTTL() * 60
    ]);
}

public function profile()
{
    // Return authenticated user's profile
    return response()->json(auth()->user());
}

        
    

}
