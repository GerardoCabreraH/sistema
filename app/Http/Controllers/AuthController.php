<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function readAllNotifications() {
        $this->authService->readAllNotifications(Auth::user());
        return redirect()->back()->with('status', "Notificaciones leidas");
    }

    public function readNotification($id) {
        $this->authService->readOneNotification(Auth::user()->notifications->where('id', $id)->first());
        return redirect()->back()->with('status', "Notificacion leida");
    }
}
