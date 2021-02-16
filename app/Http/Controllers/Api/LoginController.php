<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

/**
 * @OA\Post(
 * path="/api/login",
 * summary="Sign in",
 * description="Login by email, password",
 * operationId="authLogin",
 * tags={"auth"},
 * @OA\RequestBody(
 *    required=true,
 *    description="Pass user credentials",
 *    @OA\JsonContent(
 *       required={"login","password"},
 *       @OA\Property(property="login", type="string", format="email", example="user1@mail.com"),
 *       @OA\Property(property="password", type="string", format="password", example="PassWord12345")
 *    ),
 * ),
 * @OA\Response(
 *    response=401,
 *    description="Wrong credentials response",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Credenciales no validas")
 *        )
 *     )
 * ,
 * @OA\Response(
 *     response=200,
 *     description="Success",
 *     @OA\JsonContent(
 *        @OA\Property(property="token", type="string")
 *     )
 *  )
 * )
 */


class LoginController extends Controller
{

    public function login(Request $request)
    {
        $usuario = User::where('email', $request->login)->first();
        if (!$usuario || !Hash::check($request->password, $usuario->password))
        {
            return response()->json(['error' => 'Credenciales no válidas'], 401);
        }
        else
        {
            return response()->json(['token' => $usuario->createToken($usuario->email)->plainTextToken]);
        }
    }
}
