<?php
/**
 * Created by PhpStorm.
 * User: felipe
 * Date: 14.05.20
 * Time: 14:34
 */

namespace App\Services;


use App\Pet;
use App\Prescription;

class PrescriptionService
{

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
     */
    public function getPrescriptionForPet(Pet $pet)
    {
        $kibblePackage = $this->kibblePackageService->getKibblePackage($pet);
        $prescription = new Prescription();

        $prescription->setKibblePackage($kibblePackage);

        return $prescription;
    }
}