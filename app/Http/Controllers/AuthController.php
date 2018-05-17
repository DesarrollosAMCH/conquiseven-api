<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvaluatorAuhtRequest;
use App\User;

class AuthController extends Controller
{
    public function evaluator(EvaluatorAuhtRequest $request)
    {
        $user = User::where('access_code', $request->access_code)->first();

        return response()->json([
            'error' => false,
            'message' => 'Authorization Granted!',
            'data' => [
                'token' => $user->api_token
            ]
        ]);
    }
}