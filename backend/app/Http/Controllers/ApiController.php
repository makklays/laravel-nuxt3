<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;

class ApiController
{
    // get method
    public function get_user_profile_one(Request $request, $id) {
        if ($id) {
            $user_profile = UserProfile::where(['id' => $id])->first();
            if ($user_profile) {
                return response()->json($user_profile, 200);
            } else {
                return response()->json(['message' => 'User not found'], 404);
            }
        } else {
            return response()->json(['message' => 'ID is required'], 400);
        }
    }

    // put method
    public function put_user_profile_one(UserProfileRequest $request, $id) {
        if ($id) {
            $update = UserProfile::where(['id' => $id])->update([
                'name' => request()->get('name'),
                'country' => request()->get('country'),
                'address' => request()->get('address'),
                'postcode' => request()->get('postcode'),
                'id_code' => request()->get('id_code'),
                'birthday' => request()->get('birthday'),
                'facebook' => request()->get('facebook') ?? null,
                'linkedin' => request()->get('linkedin') ?? null,
                'phones' => request()->get('phones') ?? null,
                'mobile' => request()->get('mobile') ?? null,
                'home' => request()->get('home') ?? null,
                'id_photo' => request()->get('id_photo'),
                'interests' => request()->get('interests') ?? null,
                'email' => request()->get('email'),
                'password' => Hash::make( request()->get('password') ), // bcrypt,
            ]);
            if ($update) {
                return response()->json(['message' => 'User was updated successfully!'], 200);
            } else {
                return response()->json(['message' => 'User not found'], 404);
            }
        } else {
            return response()->json(['message' => 'ID is required'], 400);
        }
    }
}

