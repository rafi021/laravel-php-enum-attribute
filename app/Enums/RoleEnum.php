<?php

namespace App\Enums;
use App\Attributes\Description;

enum RoleEnum: string
{
    #[Description('He\'s got full powers')]
    case ADMIN = 'admin';
    #[Description('A classic user, with classic rights')]
    case USER = 'user';
    #[Description('Oh, a guest, be nice to him!')]
    case GUEST = 'guest';
}
