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
 * @see https://cashbox.city
 */

declare(strict_types=1);

namespace Cashbox\Tinkoff\Online\Http\Requests;

use Cashbox\Core\Http\Request;
use Cashbox\Core\Services\Sign as BaseSign;
use Cashbox\Tinkoff\Auth\Sign;

abstract class BaseRequest extends Request
{
    protected string $productionHost = 'https://securepay.tinkoff.ru';

    protected BaseSign|string|null $auth = Sign::class;

    public function options(): array
    {
        //if ($this->hash) {
        //    return [
        //        'auth' => [
        //            $this->clientId(),
        //            $this->clientSecret(),
        //        ],
        //    ];
        //}

        return [];
    }

    protected function clientId(): string
    {
        return $this->resource->config->credentials->clientId;
    }

    protected function clientSecret(): string
    {
        return $this->resource->config->credentials->clientSecret;
    }
}
