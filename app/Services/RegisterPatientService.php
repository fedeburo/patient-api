<?php
namespace App\Services;

use App\Events\PatientRegistered;
use App\Models\Patient;

class RegisterPatientService
{
    public function registerPatient($validatedData, $path)
    {
        try {
            $patient = Patient::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone_number' => $validatedData['phone_number'],
                'document_photo_path' => $path,
            ]);
    
            PatientRegistered::dispatch($patient);
        } catch (\Exception $e) {
            throw new \Exception('Failed to register patient: ' . $e->getMessage());
        }
    }
}
