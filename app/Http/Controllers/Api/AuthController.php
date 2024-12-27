<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

  public function login(LoginRequest $req)
  {
    $user = User::where('email', $req->email)->first();
    if (!$user || Hash::check($req->password, $user->password)) {
      throw ValidationException::withMessages(['error', 'Email / Kata sandi yang anda masukkan tidak sesuai']);
    };

    $token = $user->createToken('yatanonagami')->plainTextToken;
    return 'hello';

    return response()->json(['token', $token], 200);
  }

  public function logout(\Illuminate\Support\Facades\Request $request)
  {

    $request->user()->currentAccessToken()->delete();

    return response()->json(['message' => 'Logout berhasil.'], 200);
  }
}
