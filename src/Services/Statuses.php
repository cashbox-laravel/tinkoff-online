<?php

declare(strict_types=1);

namespace Cashbox\Tinkoff\Online\Services;

use Cashbox\Core\Services\Statuses as BaseStatus;

class Statuses extends BaseStatus
{
    public const FAILED    = ['ATTEMPTS_EXPIRED', 'CANCELED', 'DEADLINE_EXPIRED', 'REJECTED'];
    public const NEW       = ['FORM_SHOWED', 'NEW'];
    public const REFUNDED  = ['PARTIAL_REFUNDED', 'REFUNDED', 'REVERSED'];
    public const REFUNDING = ['REFUNDING'];
    public const SUCCESS   = ['CONFIRMED'];
}
