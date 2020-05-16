<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App\Services;

use App\Data\PrescriptionData;
use App\Data\PriceData;
use App\Pet;
use App\Prescription;
use App\TypeOption;

class PriceService
{

    /**
     * @param Pet $pet
     * @return float
     * @throws InvalidPetTypeException
     */
    public function getPrice(Pet $pet)
    {
        $priceDataForPetType = $this->getPriceDataForPetType($pet);
        $index = $pet->getSize()->getOptionId() . PrescriptionData::SEPARATOR . $pet->getAge()->getOptionId();

        return (float)$priceDataForPetType[$index];
    }

    /**
     * @param Pet $pet
     * @return array
     * @throws InvalidPetTypeException
     */
    private function getPriceDataForPetType(Pet $pet): array
    {
        if ($pet->getType()->getOptionId() == TypeOption::CAT) {
            return PriceData::CAT_PRICES;
        }
        if ($pet->getType()->getOptionId() == TypeOption::DOG) {
            return PriceData::DOG_PRICES;
        }
        throw new InvalidPetTypeException($pet->getType());
    }


}