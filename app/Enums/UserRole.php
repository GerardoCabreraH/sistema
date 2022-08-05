<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * 
 */
final class UserRole extends Enum
{
    const Administrador = 0;
    const Usuario = 1;
}
