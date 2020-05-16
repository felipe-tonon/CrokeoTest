<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App;


class ActivityLevelOption extends Option
{
    const LOW = 1;
    const MODERATED = 2;
    const HIGH = 3;

    const DESCRIPTION = [
        self::LOW => 'low',
        self::MODERATED => 'moderated',
        self::HIGH => 'high',

    ];


    /**
     * @return ActivityLevelOption
     */
    public static function buildLow()
    {
        return new self(self::LOW);
    }

    /**
     * @return ActivityLevelOption
     */
    public static function buildModerate()
    {
        return new self(self::MODERATED);
    }

    /**
     * @return ActivityLevelOption
     */
    public static function buildHigh()
    {
        return new self(self::HIGH);
    }

    /**
     * @return string[]
     */
    public function getDescriptions()
    {
        return self::DESCRIPTION;
    }
}