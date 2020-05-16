<?php

namespace Tests\Unit;

use App\Services\KibblePackageService;
use PHPUnit\Framework\TestCase;

class KibblePackageServiceTest extends TestCase
{

    /** @var KibblePackageService */
    private $kibbleService;


    protected function setUp(): void
    {
        $this->kibbleService = new KibblePackageService();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
