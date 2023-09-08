<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        try {
            $user = JWTAuth::parseToken()->authenticate();
            if (!$user) {
                return response()->json(['status' => 'notfound', 'message' => 'User not found']);
            }
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return response()->json(['status' => 'invalid', 'message' => 'Token is Invalid']);
            } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                try {
                    $refreshed = JWTAuth::refresh(JWTAuth::getToken()); // generate token baru
                    // $user = JWTAuth::setToken($refreshed)->toUser(); //update token baru untuk user login
                    header('Authorization: Bearer ' . $refreshed); //response token baru lewat reader nanti sy ambil token barunya dari headernya aja

                    return response()->json(['status' => 'expired', 'message' => 'Token is Expired']);
                } catch (Exception $e) {
                    if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenBlacklistedException) {

                        return response()->json(['status' => 'blacklist', 'message' => 'The token has been blacklisted']);
                    } else {

                        return response()->json([
                                    'status' => 'failed',
                                    'message' => 'Failed to create new token'
                        ]);
                    }
                }
                return response()->json(['status' => 'expired', 'message' => 'Token is Expired']);
            } else {
                return response()->json(['status' => 'notfound', 'message' => 'Authorization Token not found']);
            }
        }
        return $next($request);
    }

}
