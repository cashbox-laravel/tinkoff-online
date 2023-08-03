<?php

declare(strict_types=1);

namespace Cashbox\Tinkoff\Online\Http\Requests;

class GetStateRequest extends BaseRequest
{
    protected string $productionUri = '/v2/GetState';

    public function body(): array
    {
        return [
            'PaymentId' => $this->resource->externalId(),
        ];
    }
}
