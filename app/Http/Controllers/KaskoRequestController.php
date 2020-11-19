<?php

namespace App\Http\Controllers;

use App\Models\KaskoRequest;
use Illuminate\Http\Request;
use App\Http\Requests\KaskoRequestPost;

class KaskoRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newKaskoRequests = KaskoRequest::newRequests();
        $offeredKaskoRequests = KaskoRequest::offeredRequests();
        $dealMadeRequests = KaskoRequest::dealMadeRequests();
        $archiveRequests = KaskoRequest::archiveRequests();

        return view('kaskoRequests.index', [
            'newKaskoRequests' => $newKaskoRequests,
            'offeredKaskoRequests' => $offeredKaskoRequests,
            'dealMadeRequests' => $dealMadeRequests,
            'archiveRequests' => $archiveRequests,
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
     * @param  \App\Models\KaskoRequest  $kaskoRequest
     * @return \Illuminate\Http\Response
     */
    public function show(KaskoRequest $kaskoRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KaskoRequest  $kaskoRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(KaskoRequest $kaskoRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\KaskoRequestPost  $request
     * @param  \App\Models\KaskoRequest  $kaskoRequest
     * @return \Illuminate\Http\Response
     */
    public function update(KaskoRequestPost $request, KaskoRequest $kaskoRequest)
    {
        $kaskoRequest->status = $request['status'];
        $kaskoRequest->message = $request['message'];
        
        $kaskoRequest->save();

        return redirect('/kaskoRequests')->with('success', 'Промените са запазени!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KaskoRequest  $kaskoRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(KaskoRequest $kaskoRequest)
    {
        //
    }
}
