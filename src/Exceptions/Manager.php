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

namespace Cashbox\Tinkoff\Online\Exceptions;

use Cashbox\Core\Exceptions\Http\BankInternalErrorException;
use Cashbox\Core\Exceptions\Http\BuyerNotFoundClientException;
use Cashbox\Core\Exceptions\Http\CardHasStolenException;
use Cashbox\Core\Exceptions\Http\ContactTheSellerClientException;
use Cashbox\Core\Exceptions\Http\InsufficientFundsCardException;
use Cashbox\Core\Exceptions\Http\InvalidCardException;
use Cashbox\Core\Exceptions\Http\PaymentCompletedException;
use Cashbox\Core\Exceptions\Http\PaymentDeclinedException;
use Cashbox\Core\Exceptions\Http\PaymentTypeNotAvailableException;
use Cashbox\Core\Exceptions\Http\SumException;
use Cashbox\Core\Exceptions\Http\TooManyRequestsException;
use Cashbox\Core\Exceptions\Http\TryAgainLaterClientException;
use Cashbox\Core\Exceptions\Manager as ExceptionManager;

class Manager extends ExceptionManager
{
    protected $codes = [
        7    => BuyerNotFoundClientException::class,
        53   => ContactTheSellerClientException::class,
        99   => PaymentDeclinedException::class,
        100  => TryAgainLaterClientException::class,
        102  => PaymentDeclinedException::class,
        103  => TryAgainLaterClientException::class,
        119  => TooManyRequestsException::class,
        604  => PaymentDeclinedException::class,
        620  => SumException::class,
        623  => PaymentCompletedException::class,
        642  => InvalidCardException::class,
        1004 => CardHasStolenException::class,
        1005 => PaymentDeclinedException::class,
        1007 => CardHasStolenException::class,
        1008 => PaymentDeclinedException::class,
        1012 => PaymentDeclinedException::class,
        1013 => TryAgainLaterClientException::class,
        1014 => InvalidCardException::class,
        1015 => TryAgainLaterClientException::class,
        1019 => PaymentDeclinedException::class,
        1030 => TryAgainLaterClientException::class,
        1033 => InvalidCardException::class,
        1034 => TryAgainLaterClientException::class,
        1039 => PaymentDeclinedException::class,
        1041 => CardHasStolenException::class,
        1043 => CardHasStolenException::class,
        1051 => InsufficientFundsCardException::class,
        1053 => PaymentDeclinedException::class,
        1054 => InvalidCardException::class,
        1057 => InvalidCardException::class,
        1058 => InvalidCardException::class,
        1059 => CardHasStolenException::class,
        1061 => InvalidCardException::class,
        1062 => InvalidCardException::class,
        1063 => InvalidCardException::class,
        1064 => SumException::class,
        1065 => PaymentDeclinedException::class,
        1076 => PaymentDeclinedException::class,
        1089 => TryAgainLaterClientException::class,
        1091 => TryAgainLaterClientException::class,
        1092 => PaymentDeclinedException::class,
        1093 => CardHasStolenException::class,
        1094 => BankInternalErrorException::class,
        1096 => TryAgainLaterClientException::class,
        3001 => PaymentTypeNotAvailableException::class,
        9999 => BankInternalErrorException::class,
    ];

    protected $code_keys = ['ErrorCode'];

    protected $reason_keys = ['Details', 'Message'];
}
