<?php

/**
 * This file is part of the "cashbox/foundation" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@dragon-code.pro>
 * @copyright 2023 Andrey Helldar
 * @license MIT
 *
 * @see https://github.com/cashbox-laravel/foundation
 */

namespace CashierProvider\Tinkoff\Online\Helpers;

use CashierProvider\Core\Services\Statuses as BaseStatus;

class Statuses extends BaseStatus
{
    public const NEW = [
        'FORM_SHOWED',
        'NEW',
    ];
    public const REFUNDING = [
        'REFUNDING',
    ];
    public const REFUNDED = [
        'PARTIAL_REFUNDED',
        'REFUNDED',
        'REVERSED',
    ];
    public const FAILED = [
        'ATTEMPTS_EXPIRED',
        'CANCELED',
        'DEADLINE_EXPIRED',
        'REJECTED',
    ];
    public const SUCCESS = [
        'CONFIRMED',
    ];
}
