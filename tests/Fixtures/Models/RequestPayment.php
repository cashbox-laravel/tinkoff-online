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

namespace Tests\Fixtures\Models;

use CashierProvider\Core\Billable;
use DragonCode\LaravelSupport\Eloquent\UuidModel;

/**
 * @property \Illuminate\Support\Carbon $created_at
 * @property float $sum
 * @property int $currency
 * @property int $status_id
 * @property int $type_id
 * @property string $id;
 */
class RequestPayment extends UuidModel
{
    use Billable;

    protected $table = 'payments';

    protected $fillable = ['type_id', 'status_id', 'sum', 'currency'];

    protected $casts = [
        'type_id'   => 'integer',
        'status_id' => 'integer',

        'sum'      => 'float',
        'currency' => 'integer',
    ];
}
