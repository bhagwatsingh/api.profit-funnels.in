<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AuthRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Login user and create token
     *
     * @param  Request  $request
     *
     * @return JsonResponse [string] access_token
     */
    public function login(AuthRequest $request)
    {
        dd($request->all());
    }
}
