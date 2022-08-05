<?php

namespace App\Services;

use App\Traits\AppTrait;
use App\Models\User;
use App\Traits\EnumTrait;
use App\Notifications\RegisterUserNotification;

class UserService {
    use AppTrait, EnumTrait{
        AppTrait::generateCode insteadof EnumTrait;
    }

    public function generateUserCode(User $user)
    {
        return $this->generateCode($this->roleUser($user->role), $user->whereYear('created_at', '=', date('Y'))->count());
    }

    public function generateUserSlug(User $user)
    {
        return $this->generateSlug($user->code);
    }

    public function generateUserPassword(User $user) {
        return $this->generatePassword($user->password);
    }

    public function registerUserNotification(User $user)
    {
        return $user->notify(new RegisterUserNotification($this->messageNotification("Registro de nuevo usuario", "Ver perfil", "/perfil-de-usuario", "Bienvenido al sistema: ".$user->name.", Espero que tu experiencia en la página se la más placentera y que puedas usar nuestros servicios", "Muchas gracias por registrarse a nuestra aplicación")));
    }
}
