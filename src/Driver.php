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

namespace Cashbox\Tinkoff\Online;

use Cashbox\Core\Facades\Helpers\Model;
use Cashbox\Core\Services\Driver as BaseDriver;
use Cashbox\Tinkoff\Online\Exceptions\Manager;
use Cashbox\Tinkoff\Online\Helpers\Statuses;
use Cashbox\Tinkoff\Online\Requests\Cancel;
use Cashbox\Tinkoff\Online\Requests\GetState;
use Cashbox\Tinkoff\Online\Requests\Init;
use Cashbox\Tinkoff\Online\Resources\Details;
use Cashbox\Tinkoff\Online\Responses\Refund;
use Cashbox\Tinkoff\Online\Responses\State;
use DragonCode\Contracts\Cashier\Http\Response;

class Driver extends BaseDriver
{
    protected $exception = Manager::class;

    protected $statuses = Statuses::class;

    protected $details = Details::class;

    public function start(): Response
    {
        $request = Init::make($this->model);

        $response = $this->request($request, Responses\Init::class);

        $external_id = $response->getExternalId();

        $details = $this->details($response->toArray());

        Model::updateOrCreate($this->payment, compact('external_id', 'details'));

        $this->payment->refresh();

        return $response;
    }

    public function check(): Response
    {
        $request = GetState::make($this->model);

        return $this->request($request, State::class);
    }

    public function refund(): Response
    {
        $request = Cancel::make($this->model);

        return $this->request($request, Refund::class);
    }
}
