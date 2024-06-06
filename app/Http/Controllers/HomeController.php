<?php

namespace App\Http\Controllers;

use App\Notifications\ContactoFormNotification;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
        return view('pages/home');
    }

    public function cookies(Request $request) {
        return view('pages/cookies');
    }

    public function privacidad(Request $request) {
        return view('pages/privacidad');
    }
}
