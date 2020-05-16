<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App\Services;

use App\Pet;
use App\Prescription;
use App\PrescriptionData;
use App\TypeOption;

class PrescriptionService
{

    const DELIVERY_AMOUNT_DAY_MULTIPLIER = 28;

    /** @var KibblePackageService */
    private $kibblePackageService;

    /**
     * PrescriptionService constructor.
     * @param KibblePackageService $kibblePackageService
     */
    public function __construct(KibblePackageService $kibblePackageService)
    {
        $this->kibblePackageService = $kibblePackageService;
    }

    /**
     * @param Pet $pet
     * @return Prescription
     * @throws InvalidPetSizeException
     * @throws InvalidPetTypeException
     */
    public function getPrescriptionForPet(Pet $pet)
    {
        $kibblePackage = $this->kibblePackageService->getKibblePackage($pet->getType(), $pet->getSize());
        $prescription = new Prescription();
        $prescription->setKibblePackage($kibblePackage);

        $dailyAmount = $this->getDailyAmount($pet);

        $prescription->setDailyAmount($dailyAmount);
        $prescription->setDeliveryAmount($dailyAmount * self::DELIVERY_AMOUNT_DAY_MULTIPLIER);

        return $prescription;
    }

    /**
     * @param Pet $pet
     * @return int
     * @throws InvalidPetTypeException
     */
    private function getDailyAmount(Pet $pet): int
    {
        $prescriptionData = $this->getPrescriptionDataForPetType($pet);

        $isSterilizedString = $pet->isSterilized() ? 'true' : 'false';

        $index = $pet->getSize()->getOptionId() . PrescriptionData::SEPARATOR .
            $pet->getAge()->getOptionId() . PrescriptionData::SEPARATOR .
            $pet->getActivityLevel()->getOptionId() . $isSterilizedString;

        echo("Index=" . $index);
        echo("\nprescriptionData=");
        var_dump($prescriptionData);
        return $prescriptionData[$index];
    }

    /**
     * @param Pet $pet
     * @return array
     * @throws InvalidPetTypeException
     */
    private function getPrescriptionDataForPetType(Pet $pet): array
    {
        if ($pet->getType()->getOptionId() == TypeOption::CAT) {
            return PrescriptionData::CAT_DAILY_AMOUNTS;
        }
        if ($pet->getType()->getOptionId() == TypeOption::DOG) {
            return PrescriptionData::DOG_DAILY_AMOUNTS;
        }
        throw new InvalidPetTypeException($pet->getType());
    }


}