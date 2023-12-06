<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    use VerifiesEmails;
}
