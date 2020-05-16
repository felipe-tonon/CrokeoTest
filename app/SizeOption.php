<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App;


class SizeOption extends Option
{
    const XS = 1;
    const S = 2;
    const M = 3;
    const L = 4;
    const XL = 5;

    const DESCRIPTIONS = [
        self::XS => 'XS',
        self::S => 'S',
        self::M => 'M',
        self::L => 'L',
        self::XL => 'XL',
    ];

    /**
     * @return SizeOption
     */
    public static function buildXS()
    {
        return new self(self::XS);
    }
    /**
     * @return SizeOption
     */
    public static function buildS()
    {
        return new self(self::S);
    }
    /**
     * @return SizeOption
     */
    public static function buildM()
    {
        return new self(self::M);
    }
    /**
     * @return SizeOption
     */
    public static function buildL()
    {
        return new self(self::L);
    }
    /**
     * @return SizeOption
     */
    public static function buildXL()
    {
        return new self(self::XL);
    }

    /**
     * @return string[]
     */
    public function getDescriptions()
    {
        return self::DESCRIPTIONS;
    }
}