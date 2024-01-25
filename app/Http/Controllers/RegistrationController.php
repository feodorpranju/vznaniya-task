<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class RegistrationController extends Controller
{
    public function __invoke(): Response|ResponseFactory
    {
        return inertia('Registration', []);
    }
}
