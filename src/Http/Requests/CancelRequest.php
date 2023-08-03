<?php

declare(strict_types=1);

namespace Cashbox\Tinkoff\Online\Http\Requests;

class CancelRequest extends BaseRequest
{
    protected string $productionUri = '/v2/Cancel';

    public function body(): array
    {
        return [
            'PaymentId' => $this->resource->externalId(),
            'Amount'    => $this->resource->sum(),
        ];
    }
}
