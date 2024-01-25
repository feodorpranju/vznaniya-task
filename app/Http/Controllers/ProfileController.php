<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class ProfileController extends Controller
{
    public function __invoke(): Response|ResponseFactory
    {
        return inertia('Registration', []);
    }
}
