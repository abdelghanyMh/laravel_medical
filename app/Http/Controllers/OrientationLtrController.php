<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrientationFormRequest;
use App\Models\OrientationLetter;
use App\Models\Patient;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class OrientationLtrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        // $bodyContent = $request->getContent();
        // Debugbar::info($bodyContent);

        $patient = Patient::find($request->patient_id);
        $patient->orientationLtrs()->create([
            'content' => $request->content,
        ]);
        return back()
            ->with('success', 'a new orientation letter is created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ltr = OrientationLetter::find($id);
        $patient = $ltr->patient;
        Debugbar::info($patient);
        return view('orientataions.print', ['orientataionsltr' => $ltr, 'patient' => $patient]);
    }

    // /**
    //  * print  the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function print($id)
    // {
    // }

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
