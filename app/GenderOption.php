<?php
/**
 * Created by PhpStorm.
 * User: felipe
 * Date: 16.05.20
 * Time: 08:08
 */

namespace App;


class GenderOption extends Option
{

    const MALE = 1;
    const FEMALE = 2;

    /**
     * @return string[]
     */
    public function getDescriptions()
    {
        return [
            self::MALE => 'male',
            self::FEMALE => 'female',
        ];
    }

    public static function male()
    {
        return new self(self::MALE);
    }

    public static function female()
    {
        return new self(self::FEMALE);
    }
}