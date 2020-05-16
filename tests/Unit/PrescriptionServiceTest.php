<?php

namespace Tests\Unit;

use App\KibblePackage;
use App\Services\InvalidPetSizeException;
use App\Services\InvalidPetTypeException;
use App\Services\KibblePackageService;
use App\Services\PrescriptionService;
use App\Services\PriceService;
use App\TypeOption;
use PHPUnit\Framework\TestCase;

class PrescriptionServiceTest extends TestCase
{

    /** @var PrescriptionService */
    private $prescriptionService;
    /** @var KibblePackageService*/
    private $kibblePackageServiceStub;
    /** @var PriceService */
    private $priceService;

    protected function setUp(): void
    {
        // Create a stubs.
        $this->kibblePackageServiceStub = $this->createMock(KibblePackageService::class);
        $this->kibblePackageServiceStub->method('getKibblePackage')
            ->willReturn(new KibblePackage('C0001', 'Some description', 29));

        $this->priceService = $this->createMock(PriceService::class);
        $this->priceService->method('getPrice')->willReturn(99);

        $this->prescriptionService = new PrescriptionService($this->kibblePackageServiceStub,
            $this->priceService);
    }


    /** CATS: */

    /**
     * @throws \App\Services\InvalidPetSizeException
     * @throws \App\Services\InvalidPetTypeException
     */
    public function testGetPrescription_giantAdultActiveSterileCat_success()
    {
        $cat = PetTestFactory::getBigAdultActiveSterileCat();

        $prescription = $this->prescriptionService->getPrescriptionForPet($cat);

        $expectedDailyAmount = 120;
        $expectedDeliveryAmount = 3360;

        $this->assertEquals($expectedDailyAmount, $prescription->getDailyAmount());
        $this->assertEquals($expectedDeliveryAmount, $prescription->getDeliveryAmount());
    }

    /**
     * @throws \App\Services\InvalidPetSizeException
     * @throws \App\Services\InvalidPetTypeException
     */
    public function testGetPrescription_SmallYoungInactiveCat_success()
    {
        $cat = PetTestFactory::getSmallYoungInactiveCat();

        $prescription = $this->prescriptionService->getPrescriptionForPet($cat);

        $expectedDailyAmount = 70;
        $expectedDeliveryAmount = 1960;

        $this->assertEquals($expectedDailyAmount, $prescription->getDailyAmount());
        $this->assertEquals($expectedDeliveryAmount, $prescription->getDeliveryAmount());
    }



    /** DOGS: */

    /**
     * @throws \App\Services\InvalidPetSizeException
     * @throws \App\Services\InvalidPetTypeException
     */
    public function testGetPrescription_LargeOldModeratelyActiveDog_success()
    {
        $dog = PetTestFactory::getLargeOldModeratelyActiveDog();

        $prescription = $this->prescriptionService->getPrescriptionForPet($dog);

        $expectedDailyAmount = 545;
        $expectedDeliveryAmount = 15260;

        $this->assertEquals($expectedDailyAmount, $prescription->getDailyAmount());
        $this->assertEquals($expectedDeliveryAmount, $prescription->getDeliveryAmount());
    }

    /**
     * @throws \App\Services\InvalidPetSizeException
     * @throws \App\Services\InvalidPetTypeException
     */
    public function testGetPrescription_TinyOldSlowSterileDog_success()
    {
        $dog = PetTestFactory::getTinyOldSlowSterileDog();

        $prescription = $this->prescriptionService->getPrescriptionForPet($dog);

        $expectedDailyAmount = 45;
        $expectedDeliveryAmount = 1260;

        $this->assertEquals($expectedDailyAmount, $prescription->getDailyAmount());
        $this->assertEquals($expectedDeliveryAmount, $prescription->getDeliveryAmount());
    }

    /** ERRORS: */

    /**
     * @throws InvalidPetSizeException
     */
    public function testGetKibblePackage_wrongPetType_error()
    {
        $weirdPet = PetTestFactory::getBigAdultActiveSterileCat();
        $weirdPet->setType(new TypeOption(99));

        try {
            $this->prescriptionService->getPrescriptionForPet($weirdPet);

            $this->fail("should have thrown an exception");
        } catch (InvalidPetTypeException $e) {
            $this->assertEquals("Entered type ID was 99, described by ", $e->getMessage());
        }
    }
}
