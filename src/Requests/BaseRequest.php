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

namespace CashierProvider\Tinkoff\Online\Requests;

use CashierProvider\Core\Http\Request;
use CashierProvider\Core\Support\URI;
use CashierProvider\Tinkoff\Auth\Auth;

abstract class BaseRequest extends Request
{
    protected $host = 'https://securepay.tinkoff.ru';

    protected $auth = Auth::class;

    public function getRawHeaders(): array
    {
        return [
            'Accept'       => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    protected function getUriBuilder(): URI
    {
        return URI::make($this->host, null);
    }
}
