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

namespace Cashbox\Tinkoff\Online\Responses;

use Cashbox\Core\Http\ResponseInfo;

class Init extends ResponseInfo
{
    public const KEY_URL = 'url';

    protected $map = [
        self::KEY_EXTERNAL_ID => 'PaymentId',

        self::KEY_STATUS => 'Status',

        self::KEY_URL => 'PaymentURL',
    ];

    public function getUrl(): ?string
    {
        return $this->value(self::KEY_URL);
    }

    public function isEmpty(): bool
    {
        return empty($this->getExternalId()) || empty($this->getUrl());
    }
}
