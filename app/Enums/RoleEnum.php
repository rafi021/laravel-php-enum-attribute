<?php

namespace App\Enums;

use App\Attributes\BackgroundColor;
use App\Attributes\Description;
use App\Attributes\Label;
use App\Traits\AttributableEnum;

enum RoleEnum: string
{
     /* We use the trait we have created */
    use AttributableEnum;

    #[Label('Administrator')]
    #[Description('He\'s got full powers')]
    #[BackgroundColor('red')]
    case ADMIN = 'admin';

    #[Label('User')]
    #[Description('A classic user, with classic rights')]
    #[BackgroundColor('blue')]
    case USER = 'user';

    #[Label('Guest')]
    #[Description('Oh, a guest, be nice to him!')]
    #[BackgroundColor('green')]
    case GUEST = 'guest';
}
