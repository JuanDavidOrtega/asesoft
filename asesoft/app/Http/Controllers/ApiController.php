<?php
// app/Http/Controllers/Auth/RegisterController.php

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class ApiController extends Controller
{
    use RegistersUsers, HasApiTokens;

   

    protected function create(array $data)
    {
        // Crea un nuevo usuario
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Crea un token de acceso para el usuario
        $token = $user->createToken('registration-token')->plainTextToken;

        return response()->json(['token' => $token]);
    }
}