<?php

namespace App\Enums;

use App\Attributes\Description;
use App\Traits\AttributableEnum;

enum RoleEnum: string
{
     /* We use the trait we have created */
    use AttributableEnum;

    #[Description('He\'s got full powers')]
    case ADMIN = 'admin';
    #[Description('A classic user, with classic rights')]
    case USER = 'user';
    #[Description('Oh, a guest, be nice to him!')]
    case GUEST = 'guest';
}
