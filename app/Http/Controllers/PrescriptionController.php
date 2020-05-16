<?php

namespace App\Http\Controllers;

use App\RequestToPetMapper;
use App\Services\PrescriptionService;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{

    /** @var PrescriptionService */
    private $prescriptionService;
    /** @var RequestToPetMapper */
    private $requestToPetMapper;

    /**
     * PrescriptionController constructor.
     * @param PrescriptionService $prescriptionService
     * @param RequestToPetMapper $requestToPetMapper
     */
    public function __construct(PrescriptionService $prescriptionService, RequestToPetMapper $requestToPetMapper)
    {
        $this->prescriptionService = $prescriptionService;
        $this->requestToPetMapper = $requestToPetMapper;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function calculatePrescription(Request $request)
    {
        try {
            $pet = $this->requestToPetMapper->getPetFromRequest($request);
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

}
