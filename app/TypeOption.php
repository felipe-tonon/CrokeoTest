<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App;


class TypeOption extends Option
{
    const CAT = 1;
    const DOG = 2;

    /**
     * @return TypeOption
     */
    public static function buildCatType()
    {
        return new self(self::CAT);
    }

    /**
     * @return TypeOption
     */
    public static function buildDogType()
    {
        return new self(self::DOG);
    }

    /**
     * @return array[]
     */
    public function getDescriptions()
    {
        return [
            self::CAT => 'cat',
            self::DOG => 'dog',
        ];
    }
}