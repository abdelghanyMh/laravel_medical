<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentFormRequest;
use App\Models\Patient;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

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
        $doctor = User::find(1);
        $appointments = $doctor->appointments;
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
        $patient = Patient::find(1);
        $doctor = User::find(1);

        $validated = $request->validated();

        $patient->appointments()->create(
            array_merge(
                $validated,
                ['user_id' => $doctor->id],
            )
        );

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
