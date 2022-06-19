<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\BaseController;
use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use App\User;

class AuthController extends BaseController
{
    /**
     * @OA\Post(
     *     path="/login",
     *     tags={"User"},
     *     summary="Logs user into the system",
     *     operationId="login",
     *     @OA\Parameter(
     *         name="email",
     *         in="query",
     *          description="The email for login",
     *          required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),@OA\Parameter(
     *         name="password",
     *         in="query",
     *          description="The password for login",
     *          required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="successful operation",
     *         
     *          ),
     * )
     * 
     * 
     */
    /**
     * @OA\Post(
     *     path="/signup",
     *     tags={"User"},
     *     summary="register a new user - Đang lỗi swagger",
     *     operationId="signup",
     *     @OA\Parameter(
     *         name="email",
     *         in="query",
     *          description="The email for login",
     *          required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     * @OA\Parameter(
     *         name="first_name",
     *         in="query",
     *          description="The first name",
     *          required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     * @OA\Parameter(
     *         name="last_name",
     *         in="query",
     *          description="The last name",
     *          required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     * @OA\Parameter(
     *         name="password",
     *         in="query",
     *          description="The password for login",
     *          required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     * @OA\Parameter(
     *         name="password_confirmation",
     *         in="query",
     *          description="The password_confirmation",
     *          required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="successful operation",
     *         
     *          ),
     * )
     * 
     * 
     */

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'signup']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Email or Password doesn\'t exist'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function signup(SignUpRequest $request)
    {
        $user = User::create($request->all());
        return response()->json(['message' => 'register success'], 200);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    
    public function updateProfile(Request $request){
        $user = auth() -> user();
        $user -> first_name = $request['first_name'];
        $user -> last_name = $request['last_name'];
        $user -> email = $request['email'];
        $user -> password = $request['password'];
        $user -> save();
        return response()->json(auth()->user());

        // $user->first_name = $this->
    }
    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'first_name' => auth()->user()->first_name,
            'last_name' => auth()->user()->last_name,
            'role' => auth()->user()->role
         ]);
    }
}
