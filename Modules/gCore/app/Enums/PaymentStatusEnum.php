<?php

namespace Modules\GCore\Enums;

enum PaymentStatusEnum: string
{
    case Pending = 'pending';
    case Completed = 'completed';
    case Failed = 'failed';
    case Refunded = 'refunded';
}
