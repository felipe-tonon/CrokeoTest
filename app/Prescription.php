<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App;


class Prescription
{
    /** @var Pet */
    private $pet;
    /** @var KibblePackage */
    private $kibblePackage;

    /** @var int */
    private $monthlyPrice;

    /** @var int - in grams*/
    private $dailyAmount;
    /** @var int - in grams */
    private $deliveryAmount;

    /**
     * @return Pet
     */
    public function getPet(): Pet
    {
        return $this->pet;
    }

    /**
     * @param Pet $pet
     */
    public function setPet(Pet $pet): void
    {
        $this->pet = $pet;
    }

    /**
     * @return KibblePackage
     */
    public function getKibblePackage(): KibblePackage
    {
        return $this->kibblePackage;
    }

    /**
     * @param KibblePackage $kibblePackage
     */
    public function setKibblePackage(KibblePackage $kibblePackage): void
    {
        $this->kibblePackage = $kibblePackage;
    }

    /**
     * @return int
     */
    public function getDailyAmount(): int
    {
        return $this->dailyAmount;
    }

    /**
     * @param int $dailyAmount
     */
    public function setDailyAmount(int $dailyAmount): void
    {
        $this->dailyAmount = $dailyAmount;
    }

    /**
     * @return int
     */
    public function getDeliveryAmount(): int
    {
        return $this->deliveryAmount;
    }

    /**
     * @param int $deliveryAmount
     */
    public function setDeliveryAmount(int $deliveryAmount): void
    {
        $this->deliveryAmount = $deliveryAmount;
    }

    /**
     * @return int
     */
    public function getMonthlyPrice(): int
    {
        return $this->monthlyPrice;
    }

    /**
     * @param int $monthlyPrice
     */
    public function setMonthlyPrice(int $monthlyPrice): void
    {
        $this->monthlyPrice = $monthlyPrice;
    }

}