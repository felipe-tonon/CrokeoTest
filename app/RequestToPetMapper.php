<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App;

use Illuminate\Http\Request;

class RequestToPetMapper
{

    public function getPetFromRequest(Request $request)
    {

        $typeOption = new TypeOption($this->getRequestParamAsInt($request, "petType"));
        $sizeOption = new SizeOption($this->getRequestParamAsInt($request, "petSize"));
        $genderOption = new GenderOption($this->getRequestParamAsInt($request, "petGender"));
        $ageOption = new AgeOption($this->getRequestParamAsInt($request,"petAge"));
        $activityLevelOption = new ActivityLevelOption($this->getRequestParamAsInt($request, "petActivityLevel"));

        $pet = new Pet();
        $pet->setEmailOwner($request->input("email"));
        $pet->setType($typeOption);
        $pet->setName($request->input("petName"));
        $pet->setSize($sizeOption);
        $pet->setWeight($request->input("weightInKg"));
        $pet->setGender($genderOption);
        $pet->setAge($ageOption);
        $pet->setActivityLevel($activityLevelOption);
        $pet->setIsSterilized((bool)$request->input("isSterilized"));

        return $pet;

    }


    private function getRequestParamAsInt(Request $request, string $parameter): int
    {
        return (int)$request->input($parameter);
    }
}