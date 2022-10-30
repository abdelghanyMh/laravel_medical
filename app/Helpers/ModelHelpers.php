<?php
 
namespace App\Helpers;
use App\Models\Patient;
use App\Models\User;
 
class ModelHelpers {

    //  The method inserts a record in the doctor-patient relationship intermediate table t
    // to create the link between a patient and the user (with doctor role).
 
    public static function attachPatient($doctorID,$patientID)
    {
        $doctor = User::find($doctorID);
        $doctor->patients()->syncWithoutDetaching($patientID);
    }
}