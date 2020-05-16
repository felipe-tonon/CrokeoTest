<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App\Data;

use App\AgeOption;
use App\SizeOption;

abstract class PriceData implements Data
{
    const CAT_PRICES = [
        SizeOption::XS . self::SEPARATOR . AgeOption::YOUNG => 49.0,
        SizeOption::XS . self::SEPARATOR . AgeOption::ADULT => 39,
        SizeOption::XS . self::SEPARATOR . AgeOption::OLD => 39,

        SizeOption::S . self::SEPARATOR . AgeOption::YOUNG => 39,
        SizeOption::S . self::SEPARATOR . AgeOption::ADULT => 39,
        SizeOption::S . self::SEPARATOR . AgeOption::OLD => 39,

        SizeOption::M . self::SEPARATOR . AgeOption::YOUNG => 39,
        SizeOption::M . self::SEPARATOR . AgeOption::ADULT => 39,
        SizeOption::M . self::SEPARATOR . AgeOption::OLD => 39,

        SizeOption::L . self::SEPARATOR . AgeOption::YOUNG => 39,
        SizeOption::L . self::SEPARATOR . AgeOption::ADULT => 39,
        SizeOption::L . self::SEPARATOR . AgeOption::OLD => 39,

        SizeOption::XL . self::SEPARATOR . AgeOption::YOUNG => 39,
        SizeOption::XL . self::SEPARATOR . AgeOption::ADULT => 39,
        SizeOption::XL . self::SEPARATOR . AgeOption::OLD => 39,
    ];

    const DOG_PRICES = [
        SizeOption::XS . self::SEPARATOR . AgeOption::YOUNG => 39.0,
        SizeOption::XS . self::SEPARATOR . AgeOption::ADULT => 39.0,
        SizeOption::XS . self::SEPARATOR . AgeOption::OLD => 39.0,

        SizeOption::S . self::SEPARATOR . AgeOption::YOUNG => 39.0,
        SizeOption::S . self::SEPARATOR . AgeOption::ADULT => 49.0,
        SizeOption::S . self::SEPARATOR . AgeOption::OLD => 49.0,

        SizeOption::M . self::SEPARATOR . AgeOption::YOUNG => 49.0,
        SizeOption::M . self::SEPARATOR . AgeOption::ADULT => 79.0,
        SizeOption::M . self::SEPARATOR . AgeOption::OLD => 79.0,

        SizeOption::L . self::SEPARATOR . AgeOption::YOUNG => 109.00,
        SizeOption::L . self::SEPARATOR . AgeOption::ADULT => 109.00,
        SizeOption::L . self::SEPARATOR . AgeOption::OLD => 109.00,

        SizeOption::XL . self::SEPARATOR . AgeOption::YOUNG => 139.00,
        SizeOption::XL . self::SEPARATOR . AgeOption::ADULT => 139.00,
        SizeOption::XL . self::SEPARATOR . AgeOption::OLD => 139.00,
    ];


}