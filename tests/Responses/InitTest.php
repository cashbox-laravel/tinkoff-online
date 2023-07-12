<?php

/**
 * This file is part of the "cashier-provider/foundation" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@dragon-code.pro>
 * @copyright 2023 Andrey Helldar
 * @license MIT
 *
 * @see https://github.com/cashier-provider/foundation
 */

namespace Tests\Responses;

use CashierProvider\Core\Http\ResponseInfo as BaseResponse;
use CashierProvider\Tinkoff\Online\Responses\Init;
use DragonCode\Contracts\Cashier\Http\Response;
use Tests\TestCase;

class InitTest extends TestCase
{
    public function testInstance()
    {
        $response = $this->response();

        $this->assertInstanceOf(Init::class, $response);
        $this->assertInstanceOf(Response::class, $response);
    }

    public function testGetExternalId()
    {
        $response = $this->response();

        $this->assertSame(self::PAYMENT_EXTERNAL_ID, $response->getExternalId());
    }

    public function testGetStatus()
    {
        $response = $this->response();

        $this->assertSame(self::STATUS, $response->getStatus());
    }

    public function testToArray()
    {
        $response = $this->response();

        $this->assertSame([
            BaseResponse::KEY_STATUS => self::STATUS,
        ], $response->toArray());
    }

    protected function response(): Response
    {
        return Init::make([
            'TerminalKey' => $this->getTerminalKey(),

            'Amount'    => self::PAYMENT_SUM_FORMATTED,
            'OrderId'   => self::PAYMENT_ID,
            'Success'   => true,
            'Status'    => self::STATUS,
            'PaymentId' => self::PAYMENT_EXTERNAL_ID,
            'ErrorCode' => 0,
        ]);
    }
}
