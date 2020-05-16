<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App;


abstract class Option
{
    /** @var int */
    private $optionId;
    /** @var string */
    private $description;

    /**
     * PetType constructor.
     * @param int $optionId
     */
    public function __construct(int $optionId)
    {
        $this->optionId = $optionId;
        $this->description = $this->getDescriptionById($optionId);
    }

    /**
     * @return string[]
     */
    public abstract function getDescriptions();

    /**
     * @return int
     */
    public function getOptionId(): int
    {
        return $this->optionId;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param int $id
     * @return string
     */
    public function getDescriptionById(int $id): ?string
    {
        try {
            return $this->getDescriptions()[$id];
        } catch (\Exception $e) {
            return null;
        }
    }


}