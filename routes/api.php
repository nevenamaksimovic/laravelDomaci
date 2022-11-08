<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\api\KreditController;
use App\Http\Controllers\api\ZahtevController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', function (Request $request) {
    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return response()->json(["user" => $user, "token" => $user->createToken($request->email)->plainTextToken]);
});

Route::post('/register', function (Request $request) {
    $user = User::where('email', $request->email)->first();

    if ($user) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    $user = User::create([
        "name" => $request->name,
        "email" => $request->email,
        "email" => Hash::make($request->password),
    ]);

    return response()->json(["user" => $user, "token" => $user->createToken($request->email)->plainTextToken]);
});

Route::group(['middleware' => ['auth:sanctum']], function () {
});
