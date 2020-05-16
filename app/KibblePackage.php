<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App;


class KibblePackage
{

    /** @var string */
    private $code;
    /** @var string */
    private $description;
    /** @var float */
    private $price;

    /**
     * KibblePackage constructor.
     * @param string $code
     * @param string $description
     * @param float $price
     */
    public function __construct(string $code, string $description, float $price)
    {
        $this->code = $code;
        $this->description = $description;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

}