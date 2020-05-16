<?php

namespace App;

class Pet
{

    /** @var TypeOption */
    private $type;
    /** @var AgeOption */
    private $age;
    /** @var SizeOption */
    private $size;
    /** @var ActivityLevelOption */
    private $activityLevel;
    /** @var GenderOption */
    private $gender;

    /** @var int - weight in kg */
    private $weight;

    /** @var bool */
    private $isSterilized;
    /** @var string */
    private $name;
    /** @var string */
    private $emailOwner;

    /**
     * @param TypeOption $type
     */
    public function setType(TypeOption $type): void
    {
        $this->type = $type;
    }

    /**
     * @param AgeOption $age
     */
    public function setAge(AgeOption $age): void
    {
        $this->age = $age;
    }

    /**
     * @param SizeOption $size
     */
    public function setSize(SizeOption $size): void
    {
        $this->size = $size;
    }

    /**
     * @param ActivityLevelOption $activityLevel
     */
    public function setActivityLevel(ActivityLevelOption $activityLevel): void
    {
        $this->activityLevel = $activityLevel;
    }

    /**
     * @param bool $isSterilized
     */
    public function setIsSterilized(bool $isSterilized): void
    {
        $this->isSterilized = $isSterilized;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }


    /**
     * @return TypeOption
     */
    public function getType(): TypeOption
    {
        return $this->type;
    }

    /**
     * @return AgeOption
     */
    public function getAge(): AgeOption
    {
        return $this->age;
    }

    /**
     * @return SizeOption
     */
    public function getSize(): SizeOption
    {
        return $this->size;
    }

    /**
     * @return ActivityLevelOption
     */
    public function getActivityLevel(): ActivityLevelOption
    {
        return $this->activityLevel;
    }

    /**
     * @return bool
     */
    public function isSterilized(): bool
    {
        return $this->isSterilized;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return GenderOption
     */
    public function getGender(): GenderOption
    {
        return $this->gender;
    }

    /**
     * @param GenderOption $gender
     */
    public function setGender(GenderOption $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return int
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(?int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getEmailOwner(): string
    {
        return $this->emailOwner;
    }

    /**
     * @param string $emailOwner
     */
    public function setEmailOwner(string $emailOwner): void
    {
        $this->emailOwner = $emailOwner;
    }
}
