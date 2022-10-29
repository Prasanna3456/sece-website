<?php

namespace App\Enum;

use App\Traits\ReturnsConstantsForEnums;

class EventCategoryEnum
{
    use ReturnsConstantsForEnums;

    const TECHNICAL = 0;
    const NON_TECHNICAL = 1;
    const ONLINE = 2;

    public static function getCategoryTypes()
    {
        return [
            self::TECHNICAL => 'Technical',
            self::NON_TECHNICAL => 'Non Technical',
            self::ONLINE => 'Online',
        ];
    }
}
