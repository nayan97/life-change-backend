<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\ReferCode;

class AccountController extends Controller
{
    public function register(Request $request)
    {
        // ✅ Validate input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'role' => 'required|in:admin,user',
            'referred_code' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors()
            ], 400);
        }

        // ✅ Check referred code validity
        $refer = ReferCode::where('code', $request->referred_code)->first();

        if (!$refer) {
            return response()->json([
                'status' => 400,
                'message' => 'Invalid referral code.'
            ], 400);
        }

 

        // ✅ Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'referred_code' => $request->referred_code,
        ]);

        // ✅ Increment the "used" count of the referral code
        $refer->increment('used');

        // ✅ Generate and assign a unique referral code for this new user
        do {
            $newCode = strtoupper(Str::random(8));
        } while (ReferCode::where('code', $newCode)->exists());

        ReferCode::create([
            'user_id' => $user->id,
            'code' => $newCode,
            'used' => 0,
        ]);

        // ✅ Return success response
        return response()->json([
            'status' => 200,
            'message' => 'User registered successfully.',
            'user' => $user,
            'generated_refer_code' => $newCode
        ], 200);
    }

    // auth function
     public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return response()->json([
                'status'  => 401,
                'message' => 'Invalid email or password',
            ], 401);
        }

        // Generate Sanctum token
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status'  => 200,
            'message' => 'Login successful',
            'user'    => $user,
            'token'   => $token,
        ], 200);
    }


        public function logout(Request $request)
    {
        // ✅ Revoke the token that was used to authenticate the current request
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logged out successfully'
        ]);
    }

   



}
