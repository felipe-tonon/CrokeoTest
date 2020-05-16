<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App\Data;

use App\ActivityLevelOption;
use App\AgeOption;
use App\SizeOption;

abstract class PrescriptionData implements Data
{
    const CAT_DAILY_AMOUNTS = [
        SizeOption::XS . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 45,
        SizeOption::XS . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 45,
        SizeOption::XS . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 50,
        SizeOption::XS . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 55,
        SizeOption::XS . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 55,
        SizeOption::XS . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 60,
        SizeOption::XS . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 40,
        SizeOption::XS . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 40,
        SizeOption::XS . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 40,
        SizeOption::XS . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 35,
        SizeOption::XS . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 40,
        SizeOption::XS . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 40,
        SizeOption::XS . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 30,
        SizeOption::XS . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 35,
        SizeOption::XS . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 35,
        SizeOption::XS . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 30,
        SizeOption::XS . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 35,
        SizeOption::XS . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 35,

        SizeOption::S . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 70,
        SizeOption::S . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 70,
        SizeOption::S . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 75,
        SizeOption::S . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 85,
        SizeOption::S . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 85,
        SizeOption::S . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 90,
        SizeOption::S . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 60,
        SizeOption::S . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 60,
        SizeOption::S . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 55,
        SizeOption::S . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 55,
        SizeOption::S . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 60,
        SizeOption::S . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 60,
        SizeOption::S . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 45,
        SizeOption::S . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 55,
        SizeOption::S . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 55,
        SizeOption::S . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 45,
        SizeOption::S . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 55,
        SizeOption::S . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 55,

        SizeOption::M . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 90,
        SizeOption::M . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 90,
        SizeOption::M . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 100,
        SizeOption::M . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 110,
        SizeOption::M . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 110,
        SizeOption::M . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 120,
        SizeOption::M . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 80,
        SizeOption::M . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 80,
        SizeOption::M . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 75,
        SizeOption::M . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 70,
        SizeOption::M . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 80,
        SizeOption::M . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 80,
        SizeOption::M . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 60,
        SizeOption::M . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 70,
        SizeOption::M . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 70,
        SizeOption::M . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 60,
        SizeOption::M . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 70,
        SizeOption::M . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 70,

        SizeOption::L . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 115,
        SizeOption::L . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 115,
        SizeOption::L . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 125,
        SizeOption::L . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 140,
        SizeOption::L . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 140,
        SizeOption::L . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 150,
        SizeOption::L . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 100,
        SizeOption::L . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 100,
        SizeOption::L . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 95,
        SizeOption::L . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 90,
        SizeOption::L . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 100,
        SizeOption::L . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 100,
        SizeOption::L . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 75,
        SizeOption::L . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 90,
        SizeOption::L . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 90,
        SizeOption::L . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 75,
        SizeOption::L . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 90,
        SizeOption::L . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 90,

        SizeOption::XL . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 135,
        SizeOption::XL . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 135,
        SizeOption::XL . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 150,
        SizeOption::XL . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 165,
        SizeOption::XL . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 165,
        SizeOption::XL . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 180,
        SizeOption::XL . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 120,
        SizeOption::XL . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 120,
        SizeOption::XL . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 115,
        SizeOption::XL . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 105,
        SizeOption::XL . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 120,
        SizeOption::XL . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 120,
        SizeOption::XL . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 90,
        SizeOption::XL . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 105,
        SizeOption::XL . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 105,
        SizeOption::XL . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 90,
        SizeOption::XL . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 105,
        SizeOption::XL . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 105,
    ];
    const DOG_DAILY_AMOUNTS = [
        SizeOption::XS . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 30,
        SizeOption::XS . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 30,
        SizeOption::XS . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 30,
        SizeOption::XS . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 30,
        SizeOption::XS . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 30,
        SizeOption::XS . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 30,
        SizeOption::XS . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 45,
        SizeOption::XS . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 45,
        SizeOption::XS . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 45,
        SizeOption::XS . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 45,
        SizeOption::XS . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 50,
        SizeOption::XS . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 55,
        SizeOption::XS . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 45,
        SizeOption::XS . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 45,
        SizeOption::XS . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 45,
        SizeOption::XS . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 50,
        SizeOption::XS . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 50,
        SizeOption::XS . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 50,

        SizeOption::S . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 40,
        SizeOption::S . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 404,
        SizeOption::S . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 40,
        SizeOption::S . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 40,
        SizeOption::S . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 40,
        SizeOption::S . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 40,
        SizeOption::S . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 105,
        SizeOption::S . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 125,
        SizeOption::S . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 125,
        SizeOption::S . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 125,
        SizeOption::S . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 150,
        SizeOption::S . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 155,
        SizeOption::S . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 155,
        SizeOption::S . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 155,
        SizeOption::S . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 155,
        SizeOption::S . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 160,
        SizeOption::S . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 160,
        SizeOption::S . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 160,

        SizeOption::M . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 80,
        SizeOption::M . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 80,
        SizeOption::M . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 80,
        SizeOption::M . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 80,
        SizeOption::M . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 80,
        SizeOption::M . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 80,
        SizeOption::M . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 250,
        SizeOption::M . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 280,
        SizeOption::M . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 260,
        SizeOption::M . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 280,
        SizeOption::M . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 330,
        SizeOption::M . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 350,
        SizeOption::M . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 320,
        SizeOption::M . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 320,
        SizeOption::M . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 320,
        SizeOption::M . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 340,
        SizeOption::M . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 340,
        SizeOption::M . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 350,

        SizeOption::L . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 200,
        SizeOption::L . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 130,
        SizeOption::L . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 130,
        SizeOption::L . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 130,
        SizeOption::L . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 130,
        SizeOption::L . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 130,
        SizeOption::L . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 385,
        SizeOption::L . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 420,
        SizeOption::L . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 385,
        SizeOption::L . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 420,
        SizeOption::L . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 490,
        SizeOption::L . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 525,
        SizeOption::L . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 510,
        SizeOption::L . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 510,
        SizeOption::L . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 510,
        SizeOption::L . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 545,
        SizeOption::L . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 545,
        SizeOption::L . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 545,

        SizeOption::XL . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 160,
        SizeOption::XL . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 160,
        SizeOption::XL . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 160,
        SizeOption::XL . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 160,
        SizeOption::XL . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 160,
        SizeOption::XL . self::SEPARATOR . AgeOption::YOUNG . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 160,
        SizeOption::XL . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 440,
        SizeOption::XL . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 480,
        SizeOption::XL . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 440,
        SizeOption::XL . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 480,
        SizeOption::XL . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 560,
        SizeOption::XL . self::SEPARATOR . AgeOption::ADULT . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 600,
        SizeOption::XL . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'true' => 510,
        SizeOption::XL . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::LOW . 'false' => 510,
        SizeOption::XL . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'true' => 510,
        SizeOption::XL . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::MODERATED . 'false' => 545,
        SizeOption::XL . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'true' => 545,
        SizeOption::XL . self::SEPARATOR . AgeOption::OLD . self::SEPARATOR . ActivityLevelOption::HIGH . 'false' => 545,
    ];

}