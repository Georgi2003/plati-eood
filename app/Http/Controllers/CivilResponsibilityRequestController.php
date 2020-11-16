<?php

namespace App\Http\Controllers;

use App\Models\CivilResponsibilityRequest;
use App\Models\User;
use Illuminate\Http\Request;

class CivilResponsibilityRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CivilResponsibilityRequests = CivilResponsibilityRequest::all();
        $users = User::all();
        
        return view('CivilResponsibilityRequests.index', [
            'allCivilResponsibilityRequests' => $CivilResponsibilityRequests,
            'allUsers' => $users
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CivilResponsibilityRequest  $civilResponsibilityRequest
     * @return \Illuminate\Http\Response
     */
    public function show(CivilResponsibilityRequest $civilResponsibilityRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CivilResponsibilityRequest  $civilResponsibilityRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(CivilResponsibilityRequest $civilResponsibilityRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CivilResponsibilityRequest  $civilResponsibilityRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CivilResponsibilityRequest $civilResponsibilityRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CivilResponsibilityRequest  $civilResponsibilityRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(CivilResponsibilityRequest $civilResponsibilityRequest)
    {
        //
    }
}
