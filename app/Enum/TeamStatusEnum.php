<?php

namespace App\Enum;

use App\Traits\ReturnsConstantsForEnums;

class TeamStatusEnum
 {
    use ReturnsConstantsForEnums;


    const REGISTERED = 0;
    const PAYMENT_SUCCESSFULL = 1;
    const PAYMENT_FAILED = 2;

    public static function colors()
    {
        return [
            'warning' => self::REGISTERED,
            'success' => self::PAYMENT_SUCCESSFULL,
            'danger' => self::PAYMENT_FAILED,
        ];
    }
    public static function getStatusTypes()
    {
        return [
            self::REGISTERED => 'Registered',
            self::PAYMENT_SUCCESSFULL => 'Payment Successfull',
            self::PAYMENT_FAILED => 'Payment Failed',
        ];
    }





 }