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
