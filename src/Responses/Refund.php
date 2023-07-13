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

declare(strict_types=1);

namespace CashierProvider\Tinkoff\Online\Responses;

use CashierProvider\Core\Http\ResponseInfo;

class Refund extends ResponseInfo
{
    protected $map = [
        self::KEY_EXTERNAL_ID => 'PaymentId',

        self::KEY_STATUS => 'Status',
    ];
}
