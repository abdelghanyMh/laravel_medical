<?php

namespace App\Http\Controllers;

use App\Enums\UserRoles;
use App\Http\Requests\AppointmentFormRequest;
use App\Models\Patient;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ModelHelpers;


class AppointmentController extends Controller
{
    /**
     * Display a listing of the Appointments for the current Doctor.
     *
     * @return \Illuminate\Http\Response
     */
    // $id
    public function index()
    {
        $appointments = [];

        // FIXME hide private appointment 
        // when we implement private patient(that are created by the doctor himself)

        // find all  appointment to secretary
        if (UserRoles::isSecretary(Auth::user()->role)) {
            $appointments = Appointment::all();
        }
        // find all  appointment assigned to a doctor
        else if (UserRoles::isDoctor(Auth::user()->role)) {
            $doctor = User::find(Auth::user()->id);
            $appointments = $doctor->appointments;
        }
        return view('appointments.index', ['appointments' => $appointments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppointmentFormRequest $request)
    {
        $patient = Patient::find($request->patient_id);

        $validated = $request->validated();

        $patient->appointments()->create(
            array_merge(
                $validated,
                ['user_id' => $request->doctor_id],
            )
        );

        // If a patient will have an appointment with a doctor 
        // we attachPatient to the current doctor
        ModelHelpers::attachPatient($request->doctor_id, $patient->id);


        return back()
            ->with('success', 'a new appointment is created');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}