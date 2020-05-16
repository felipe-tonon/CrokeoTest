<?php

namespace Tests\Unit;

use App\Services\InvalidPetSizeException;
use App\Services\InvalidPetTypeException;
use App\Services\KibblePackageService;
use App\SizeOption;
use App\TypeOption;
use PHPUnit\Framework\TestCase;

class KibblePackageServiceTest extends TestCase
{

    /** @var KibblePackageService */
    private $kibblePackageService;


    protected function setUp(): void
    {
        $this->kibblePackageService = new KibblePackageService();
    }

    /** CAT TESTS */

    /**
     * @throws InvalidPetSizeException
     * @throws InvalidPetTypeException
     */
    public function testGetKibblePackage_tinyCat_success()
    {
        $type = TypeOption::buildCatType();
        $sizeOption = SizeOption::buildXS();

        $kibblePackage = $this->kibblePackageService->getKibblePackage($type, $sizeOption);

        $expectedCode = "C0001";
        $expectedPrice = 29;

        $this->assertEquals($expectedCode, $kibblePackage->getCode());
        $this->assertEquals($expectedPrice, $kibblePackage->getPrice());
    }

    /**
     * @throws InvalidPetSizeException
     * @throws InvalidPetTypeException
     */
    public function testGetKibblePackage_mediumCat_success()
    {
        $type = TypeOption::buildCatType();
        $sizeOption = SizeOption::buildM();

        $kibblePackage = $this->kibblePackageService->getKibblePackage($type, $sizeOption);

        $expectedCode = "C0003";
        $expectedPrice = 49;

        $this->assertEquals($expectedCode, $kibblePackage->getCode());
        $this->assertEquals($expectedPrice, $kibblePackage->getPrice());
    }

    /**
     * @throws InvalidPetSizeException
     * @throws InvalidPetTypeException
     */
    public function testGetKibblePackage_hugeCat_success()
    {
        $type = TypeOption::buildCatType();
        $sizeOption = SizeOption::buildXL();

        $kibblePackage = $this->kibblePackageService->getKibblePackage($type, $sizeOption);

        $expectedCode = "C0005";
        $expectedPrice = 59;

        $this->assertEquals($expectedCode, $kibblePackage->getCode());
        $this->assertEquals($expectedPrice, $kibblePackage->getPrice());
    }



    /** Dog tests */

    /**
     * @throws InvalidPetSizeException
     * @throws InvalidPetTypeException
     */
    public function testGetKibblePackage_tinyDog_success()
    {
        $type = TypeOption::buildDogType();
        $sizeOption = SizeOption::buildXS();

        $kibblePackage = $this->kibblePackageService->getKibblePackage($type, $sizeOption);

        $expectedCode = "D0001";
        $expectedPrice = 45;

        $this->assertEquals($expectedCode, $kibblePackage->getCode());
        $this->assertEquals($expectedPrice, $kibblePackage->getPrice());
    }

    /**
     * @throws InvalidPetSizeException
     * @throws InvalidPetTypeException
     */
    public function testGetKibblePackage_mediumDog_success()
    {
        $type = TypeOption::buildDogType();
        $sizeOption = SizeOption::buildM();

        $kibblePackage = $this->kibblePackageService->getKibblePackage($type, $sizeOption);

        $expectedCode = "D0003";
        $expectedPrice = 75;

        $this->assertEquals($expectedCode, $kibblePackage->getCode());
        $this->assertEquals($expectedPrice, $kibblePackage->getPrice());
    }

    /**
     * @throws InvalidPetSizeException
     * @throws InvalidPetTypeException
     */
    public function testGetKibblePackage_hugeDog_success()
    {
        $type = TypeOption::buildDogType();
        $sizeOption = SizeOption::buildXL();

        $kibblePackage = $this->kibblePackageService->getKibblePackage($type, $sizeOption);

        $expectedCode = "D0005";
        $expectedPrice = 105;

        $this->assertEquals($expectedCode, $kibblePackage->getCode());
        $this->assertEquals($expectedPrice, $kibblePackage->getPrice());
    }



    /** Exception Tests */

    /**
     * @throws InvalidPetSizeException
     */
    public function testGetKibblePackage_wrongPetType_error()
    {
        $type = new TypeOption(3);
        $size = new SizeOption(SizeOption::XL);

        try {
            $this->kibblePackageService->getKibblePackage($type, $size);
            $this->fail("should have thrown an exception");
        } catch (InvalidPetTypeException $e) {
            $this->assertEquals("Entered type ID was 3, described by ", $e->getMessage());
        }
    }

    /**
     * @throws InvalidPetTypeException
     */
    public function testGetKibblePackage_wrongPetSize_error()
    {
        $type = TypeOption::buildCatType();
        $size = new SizeOption(99);

        try {
            $kibblePackage = $this->kibblePackageService->getKibblePackage($type, $size);
            $this->fail("should have thrown an exception");
        } catch (InvalidPetSizeException $e) {
            $this->assertEquals("Entered type ID was 99, described by ", $e->getMessage());
        }
    }
}
