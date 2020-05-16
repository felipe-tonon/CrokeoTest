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

class PriceServiceTest extends TestCase
{

    /** @var PriceService */
    private $priceService;


    protected function setUp(): void
    {
        $this->priceService = new PriceService();
    }


    /** CATS: */

    /**
     * @throws InvalidPetTypeException
     */
    public function testGetPrice_giantAdultActiveSterileCat_success()
    {
        $cat = PetTestFactory::getBigAdultActiveSterileCat();
        $expectedPrice = 39;

        $this->assertEquals($expectedPrice, $this->priceService->getPrice($cat));
    }

    /**
     * @throws InvalidPetTypeException
     */
    public function testGetPrice_SmallYoungInactiveCat_success()
    {
        $cat = PetTestFactory::getBigAdultActiveSterileCat();
        $expectedPrice = 39;

        $this->assertEquals($expectedPrice, $this->priceService->getPrice($cat));
    }



    /** DOGS: */

    /**
     * @throws InvalidPetTypeException
     */
    public function testGetPrescription_LargeOldModeratelyActiveDog_success()
    {
        $dog = PetTestFactory::getLargeOldModeratelyActiveDog();

        $expectedPrice = 109;

        $this->assertEquals($expectedPrice, $this->priceService->getPrice($dog));
    }

    /**
     * @throws InvalidPetTypeException
     */
    public function testGetPrescription_TinyOldSlowSterileDog_success()
    {
        $dog = PetTestFactory::getTinyOldSlowSterileDog();

        $expectedPrice = 39;

        $this->assertEquals($expectedPrice, $this->priceService->getPrice($dog));
    }

    /** ERRORS: */

    public function testGetKibblePackage_wrongPetType_error()
    {
        $weirdPet = PetTestFactory::getBigAdultActiveSterileCat();
        $weirdPet->setType(new TypeOption(99));

        try {
            $this->priceService->getPrice($weirdPet);

            $this->fail("should have thrown an exception");
        } catch (InvalidPetTypeException $e) {
            $this->assertEquals("Entered type ID was 99, described by ", $e->getMessage());
        }
    }
}
