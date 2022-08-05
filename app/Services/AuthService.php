<?php

namespace App\Services;

class AuthService {
    public function readAllNotifications($user) {
        return $user->unreadNotifications->markAsRead();
    }

    public function readOneNotification($notification) {
        return $notification->markAsRead();
    }
}
