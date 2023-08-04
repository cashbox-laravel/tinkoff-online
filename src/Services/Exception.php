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

namespace Cashbox\Tinkoff\Online\Services;

use Cashbox\Core\Exceptions\External\BankInternalErrorHttpException;
use Cashbox\Core\Exceptions\External\BuyerNotFoundHttpException;
use Cashbox\Core\Exceptions\External\CardHasStolenHttpException;
use Cashbox\Core\Exceptions\External\ContactTheSellerHttpException;
use Cashbox\Core\Exceptions\External\IncorrectSumHttpException;
use Cashbox\Core\Exceptions\External\InsufficientFundsCardHttpException;
use Cashbox\Core\Exceptions\External\InvalidCardHttpException;
use Cashbox\Core\Exceptions\External\PaymentCompletedHttpException;
use Cashbox\Core\Exceptions\External\PaymentDeclinedHttpException;
use Cashbox\Core\Exceptions\External\PaymentTypeNotAvailableHttpException;
use Cashbox\Core\Exceptions\External\TooManyRequestsHttpException;
use Cashbox\Core\Exceptions\External\TransactionNotFoundHttpException;
use Cashbox\Core\Exceptions\External\TryAgainLaterClientHttpException;
use Cashbox\Core\Services\Exception as BaseException;

class Exception extends BaseException
{
    protected array $codes = [
        7    => BuyerNotFoundHttpException::class,
        53   => ContactTheSellerHttpException::class,
        99   => PaymentDeclinedHttpException::class,
        100  => TryAgainLaterClientHttpException::class,
        102  => PaymentDeclinedHttpException::class,
        103  => TryAgainLaterClientHttpException::class,
        119  => TooManyRequestsHttpException::class,
        403  => PaymentDeclinedHttpException::class,
        404  => TransactionNotFoundHttpException::class,
        604  => PaymentDeclinedHttpException::class,
        620  => IncorrectSumHttpException::class,
        623  => PaymentCompletedHttpException::class,
        642  => InvalidCardHttpException::class,
        1004 => CardHasStolenHttpException::class,
        1005 => PaymentDeclinedHttpException::class,
        1007 => CardHasStolenHttpException::class,
        1008 => PaymentDeclinedHttpException::class,
        1012 => PaymentDeclinedHttpException::class,
        1013 => TryAgainLaterClientHttpException::class,
        1014 => InvalidCardHttpException::class,
        1015 => TryAgainLaterClientHttpException::class,
        1019 => PaymentDeclinedHttpException::class,
        1030 => TryAgainLaterClientHttpException::class,
        1033 => InvalidCardHttpException::class,
        1034 => TryAgainLaterClientHttpException::class,
        1039 => PaymentDeclinedHttpException::class,
        1041 => CardHasStolenHttpException::class,
        1043 => CardHasStolenHttpException::class,
        1051 => InsufficientFundsCardHttpException::class,
        1053 => PaymentDeclinedHttpException::class,
        1054 => InvalidCardHttpException::class,
        1057 => InvalidCardHttpException::class,
        1058 => InvalidCardHttpException::class,
        1059 => CardHasStolenHttpException::class,
        1061 => InvalidCardHttpException::class,
        1062 => InvalidCardHttpException::class,
        1063 => InvalidCardHttpException::class,
        1064 => IncorrectSumHttpException::class,
        1065 => PaymentDeclinedHttpException::class,
        1076 => PaymentDeclinedHttpException::class,
        1089 => TryAgainLaterClientHttpException::class,
        1091 => TryAgainLaterClientHttpException::class,
        1092 => PaymentDeclinedHttpException::class,
        1093 => CardHasStolenHttpException::class,
        1094 => BankInternalErrorHttpException::class,
        1096 => TryAgainLaterClientHttpException::class,
        3001 => PaymentTypeNotAvailableHttpException::class,
        9999 => BankInternalErrorHttpException::class,
    ];

    protected array $failedKey = ['Success'];

    protected array $codeKeys = ['ErrorCode'];

    protected array $reasonKeys = ['Details', 'Message'];
}
