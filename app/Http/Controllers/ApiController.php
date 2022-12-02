<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function login(LoginRequest $request)
    {
        if(Auth::attempt($request->all())){ 
            $user = Auth::user();
   
            return response()->json([
                'token' => $user->createToken('Api')->plainTextToken,
                'success' => 'Usuário autenticado' 
            ], 200);
        } 

        return response()->json(['error' => 'Não autorizado'], 401);
    }
}
