<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class TestEmailController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('email.PasswordResetEmail');
    }
}
