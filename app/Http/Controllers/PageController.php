<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index() {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return view('index');
        }
    }
}
