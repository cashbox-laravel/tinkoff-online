<?php

declare(strict_types=1);

namespace Cashbox\Tinkoff\Online\Http\Requests;

class CreateRequest extends BaseRequest
{
    protected string $productionUri = '/v2/Init';

    protected bool $secure = false;

    public function body(): array
    {
        return [
            'OrderId'  => $this->resource->paymentId(),
            'Amount'   => $this->resource->sum(),
            'Currency' => $this->resource->currency(),
        ];
    }
}
