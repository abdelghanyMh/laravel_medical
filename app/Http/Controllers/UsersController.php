<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserUpdateFormRequest;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
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
    public function store(UserFormRequest $request)
    {
        $validated = $request->validated();

        // hash password
        $validated['pwd'] = Hash::make($validated['pwd']);

        // store the VALIDATED user info to the database
        $user = User::create($validated);
        return redirect()
            ->route('users.index')
            ->with('success', 'User is created! username: ' . $user->username);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        // TODO check if $this  the update authorization 
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateFormRequest $request, User $user)
    {
        // TODO check if $this  the update authorization 

        $validated = $request->validated();
        $user->update($validated);
        return redirect()
            ->route('users.index')
            ->with('success', 'User is updated! username: ' . $user->username);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // TODO check if $this has the delete authorization 

        $user->delete();
        return redirect()
            ->route('users')
            ->with('success', 'User has been deleted!');
    }
}
