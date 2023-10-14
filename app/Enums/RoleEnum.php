<?php

namespace App\Enums;

use App\Attributes\BackgroundColor;
use App\Attributes\Description;
use App\Traits\AttributableEnum;

enum RoleEnum: string
{
     /* We use the trait we have created */
    use AttributableEnum;

    #[Description('He\'s got full powers')]
    #[BackgroundColor('red')]
    case ADMIN = 'admin';

    #[Description('A classic user, with classic rights')]
    #[BackgroundColor('blue')]
    case USER = 'user';

    #[Description('Oh, a guest, be nice to him!')]
    #[BackgroundColor('green')]
    case GUEST = 'guest';
}
