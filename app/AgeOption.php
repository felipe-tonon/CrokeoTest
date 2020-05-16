<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App;


class AgeOption extends Option
{
    const YOUNG = 1;
    const ADULT = 2;
    const OLD = 3;

    const DESCRIPTIONS = [
        self::YOUNG => 'less than 1 year',
        self::ADULT => '1 to 11 years',
        self::OLD => 'more than 11 years',

    ];

    /**
     * @return AgeOption
     */
    public static function buildYoung()
    {
        return new self(self::YOUNG);
    }

    /**
     * @return AgeOption
     */
    public static function buildAdult()
    {
        return new self(self::ADULT);
    }

    /**
     * @return AgeOption
     */
    public static function buildOld()
    {
        return new self(self::OLD);
    }

    /**
     * @return string[]
     */
    public function getDescriptions()
    {
        return self::DESCRIPTIONS;
    }
}