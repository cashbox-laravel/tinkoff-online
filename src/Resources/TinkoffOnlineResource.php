<?php

declare(strict_types=1);

namespace Cashbox\Tinkoff\Online\Resources;

use Cashbox\Core\Resources\Resource;
use Cashbox\Tinkoff\Credit\Data\ContactData;
use Cashbox\Tinkoff\Credit\Data\ProductData;

abstract class TinkoffOnlineResource extends Resource
{
    abstract public function contact(): ?ContactData;

    /**
     * @return array<ProductData>
     */
    abstract public function productItems(): array;

    public function shopId(): string
    {
        return $this->config->credentials->clientId;
    }

    public function showCaseId(): ?string
    {
        return $this->config->credentials->extra['showcase_id'] ?? null;
    }
}
