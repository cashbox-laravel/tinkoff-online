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

use Cashbox\Core\Services\Auth;
use Cashbox\Tinkoff\Auth\HashAuth;

class CancelRequest extends BaseRequest
{
    protected string $productionUri = '/v2/Cancel';

    protected Auth|string|null $auth = HashAuth::class;

    public function body(): array
    {
        return [
            'PaymentId' => $this->resource->payment->cashbox->external_id,
            'Amount'    => $this->resource->sum(),
        ];
    }
}
