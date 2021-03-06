<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Themosis\Core\Auth\ResetPasswords;

class ResetPasswordController extends Controller
{
    /**
     * Password Reset Controller
     *
     * This controller is responsible for handling password reset requests
     * and uses a simple trait to include this behavior.
     */
    use ResetPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/settings';

    public function __construct()
    {
        $this->middleware('guest');
    }
}
