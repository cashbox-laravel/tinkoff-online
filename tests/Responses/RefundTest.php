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
 * @see https://github.com/cashbox/foundation
 */

namespace Tests\Responses;

use CashierProvider\Core\Http\ResponseInfo as BaseResponse;
use CashierProvider\Tinkoff\Online\Responses\Refund;
use DragonCode\Contracts\Cashier\Http\Response;
use Tests\TestCase;

class RefundTest extends TestCase
{
    public function testInstance()
    {
        $response = $this->response();

        $this->assertInstanceOf(Refund::class, $response);
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
        return Refund::make([
            'TerminalKey' => $this->getTerminalKey(),

            'Success'   => true,
            'Status'    => self::STATUS,
            'ErrorCode' => 0,
            'PaymentId' => self::PAYMENT_EXTERNAL_ID,
            'OrderId'   => self::PAYMENT_ID,
        ]);
    }
}
