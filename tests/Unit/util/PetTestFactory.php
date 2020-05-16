<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace Tests\Unit;


use App\ActivityLevelOption;
use App\AgeOption;
use App\Pet;
use App\SizeOption;
use App\TypeOption;

class PetTestFactory
{

    /** CATS: */
    public static function getBigAdultActiveSterileCat()
    {
        $cat = self::getBigAdultActiveCat();
        $cat->setIsSterilized(true);
        return $cat;
    }

    public static function getBigAdultActiveCat()
    {
        $cat = new Pet();
        $cat->setType(TypeOption::buildCatType());
        $cat->setSize(new SizeOption(SizeOption::XL));
        $cat->setActivityLevel(ActivityLevelOption::buildHigh());
        $cat->setAge(AgeOption::buildAdult());
        $cat->setIsSterilized(false);

        return $cat;
    }

    public static function getSmallYoungInactiveCat()
    {
        $cat = new Pet();
        $cat->setType(TypeOption::buildCatType());
        $cat->setSize(new SizeOption(SizeOption::S));
        $cat->setActivityLevel(ActivityLevelOption::buildLow());
        $cat->setAge(AgeOption::buildYoung());
        $cat->setIsSterilized(false);

        return $cat;
    }


    /** DOGS: */
    public static function getLargeOldModeratelyActiveDog()
    {
        $dog = new Pet();
        $dog->setType(TypeOption::buildDogType());
        $dog->setSize(new SizeOption(SizeOption::L));
        $dog->setActivityLevel(ActivityLevelOption::buildModerate());
        $dog->setAge(AgeOption::buildOld());
        $dog->setIsSterilized(false);

        return $dog;
    }

    public static function getTinyOldSlowSterileDog()
    {
        $dog = new Pet();
        $dog->setType(TypeOption::buildDogType());
        $dog->setSize(new SizeOption(SizeOption::XS));
        $dog->setActivityLevel(ActivityLevelOption::buildLow());
        $dog->setAge(AgeOption::buildOld());
        $dog->setIsSterilized(true);

        return $dog;
    }
}