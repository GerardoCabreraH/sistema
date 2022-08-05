<?php

namespace App\Traits;

use App\Enums\UserRole;

trait EnumTrait {
    public function roleUser($value) {
        if ($value == UserRole::fromValue(UserRole::Administrador)->description) {
            return "Administrador";
        } else {
            return "Usuario";
        }
    }
}
