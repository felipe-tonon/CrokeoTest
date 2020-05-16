<?php

namespace App\Http\Controllers;

use App\ActivityLevelOption;
use App\AgeOption;
use App\GenderOption;
use App\Pet;
use App\Services\PrescriptionService;
use App\SizeOption;
use App\TypeOption;

class PrescriptionController extends Controller
{

    /** @var PrescriptionService */
    private $prescriptionService;

    /**
     * PrescriptionController constructor.
     * @param PrescriptionService $prescriptionService
     */
    public function __construct(PrescriptionService $prescriptionService)
    {
        $this->prescriptionService = $prescriptionService;
    }


    /**
    #parameters: array:10 [▼
    "_token" => "QZ3eoFQZYK7YWrUXaVoIFUdNkc7MmoNABjhxNOsZ"
    "email" => "fetokun@gmail.com"
    "petType" => "2"
    "petName" => "Lucy"
    "petSize" => "3"
    "weightInKg" => null
    "petGender" => "2"
    "petAge" => "1"
    "petActivityLevel" => "2"
    "isSterilized" => "1"
    ]
     */

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function calculatePrescription()
    {
        try {
            $pet = $this->getPetObjectFromRequest();
            $prescription = $this->prescriptionService->getPrescriptionForPet($pet);
        } catch (\Exception $e) {
            return view('error', ['e' => $e]);
        }

        $vars = [
          'pet' => $pet,
          'prescription' => $prescription
        ];
        return view('prescription', $vars);
    }

    private function getPetObjectFromRequest()
    {
        $pet = new Pet();
        $pet->setEmailOwner(request("email"));
        $pet->setType(new TypeOption($this->getRequestParamAsInt("petType")));
        $pet->setName(\request("petName"));
        $pet->setSize(new SizeOption($this->getRequestParamAsInt("petSize")));
        $pet->setWeight(\request("weightInKg"));
        $pet->setGender(new GenderOption($this->getRequestParamAsInt("petGender")));
        $pet->setAge(new AgeOption($this->getRequestParamAsInt("petAge")));
        $pet->setActivityLevel(new ActivityLevelOption($this->getRequestParamAsInt("petActivityLevel")));
        $pet->setIsSterilized((bool)\request("isSterilized"));

        return $pet;
    }

    private function getRequestParamAsInt(string $parameter): int
    {
        return (int)request($parameter);
    }
}
