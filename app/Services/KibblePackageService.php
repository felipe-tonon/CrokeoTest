<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App\Services;

use App\KibblePackage;
use App\SizeOption;
use App\TypeOption;

class KibblePackageService
{

    const CAT_PACKAGES = [
        SizeOption::XS => ["C0001", "Abonnement mini chat", 29],
        SizeOption::S => ["C0002", "Abonnement petit chat", 39],
        SizeOption::M => ["C0003", "Abonnement chat moyen", 49],
        SizeOption::L => ["C0004", "Abonnement grand chat", 59],
        SizeOption::XL => ["C0005", "Abonnement chat géant", 59],
    ];
    const DOG_PACKAGES = [
        SizeOption::XS => ["D0001", "Abonnement mini chien", 45],
        SizeOption::S => ["D0002", "Abonnement petit chien", 55],
        SizeOption::M => ["D0003", "Abonnement chien moyen", 75],
        SizeOption::L => ["D0004", "Abonnement grand chien", 95],
        SizeOption::XL => ["D0005", "Abonnement chien géant", 105],
    ];

    /**
     * @param TypeOption $type
     * @param SizeOption $sizeOption
     * @return KibblePackage
     * @throws InvalidPetSizeException
     * @throws InvalidPetTypeException
     */
    public function getKibblePackage(TypeOption $type, SizeOption $sizeOption)
    {
        if ($type->getOptionId() == TypeOption::CAT) {
            return $this->getPackageBySize(self::CAT_PACKAGES, $sizeOption);
        }
        if ($type->getOptionId() == TypeOption::DOG) {
            return $this->getPackageBySize(self::DOG_PACKAGES, $sizeOption);
        }
        throw new InvalidPetTypeException($type);

    }

    /**
     * @param array $packages
     * @param SizeOption $sizeOption
     * @return KibblePackage
     * @throws InvalidPetSizeException
     */
    private function getPackageBySize(array $packages, SizeOption $sizeOption)
    {
        try {
            $packageArray = $packages[$sizeOption->getOptionId()];
            return new KibblePackage($packageArray[0], $packageArray[1], $packageArray[2]);
        } catch (\Exception $e) {
            throw new InvalidPetSizeException($sizeOption);
        }

    }
}