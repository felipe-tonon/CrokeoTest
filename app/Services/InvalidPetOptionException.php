<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App\Services;

use App\Option;

class InvalidPetOptionException extends \Exception
{
    /** @var Option */
    private $option;

    /**
     * InvalidPetTypeException constructor.
     * @param Option $option
     */
    public function __construct(Option $option)
    {
        $this->option = $option;
        $messagePattern = "Entered type ID was %d, described by %s";
        parent::__construct(sprintf($messagePattern, $option->getOptionId(), $option->getDescription()));
    }
}