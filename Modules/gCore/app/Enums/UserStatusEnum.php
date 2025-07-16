<?php

namespace Modules\GCore\Enums;

enum UserStatusEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Pending = 'pending';
}
