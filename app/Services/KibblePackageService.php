<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App\Services;

use App\Data\KibblePackageData;
use App\KibblePackage;
use App\SizeOption;
use App\TypeOption;

class KibblePackageService
{

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
            return $this->getPackageBySize(KibblePackageData::CAT_PACKAGES, $sizeOption);
        }
        if ($type->getOptionId() == TypeOption::DOG) {
            return $this->getPackageBySize(KibblePackageData::DOG_PACKAGES, $sizeOption);
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