<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRegistrationRequest;
use App\Services\RegisterPatientService;

class PatientController extends Controller
{
    protected $patientService;

    public function __construct(RegisterPatientService $patientService)
    {
        $this->patientService = $patientService;
    }

    public function register(PatientRegistrationRequest $request)
    {
        try {
            $path = $request->file('document_photo')->store('documents', 'public');
            $this->patientService->registerPatient($request->validated(), $path);

            return response()->json(['message' => 'Patient registered successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error during registration: ' . $e->getMessage()], 500);
        }
    }
}
