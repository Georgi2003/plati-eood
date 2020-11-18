<?php

namespace App\Http\Controllers;

use App\Models\CivilResponsibilityRequest;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

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
        $messages = Message::all();
        
        return view('CivilResponsibilityRequests.index', [
            'allCivilResponsibilityRequests' => $CivilResponsibilityRequests,
            'allUsers' => $users,
            'allMessages' => $messages
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
    public function update(Request $request, $id)
    {
        $civilResponsibilityRequest = CivilResponsibilityRequest::find($id);

        if(!$request['user_id'] == 0)
        {
            $civilResponsibilityRequest->user_id = $request['user_id'];

            /* mail */
            //dd($civilResponsibilityRequest->user->email);
            
            $mail = new \stdClass();
            $mail->sender = '„Плати“ ООД';
            $mail->receiver = $civilResponsibilityRequest->user->name;
     
            Mail::to($civilResponsibilityRequest->user->email)->send(new Email($mail));
        }
        
        $civilResponsibilityRequest->status = $request['status'];

        $civilResponsibilityRequest->save();

        return redirect('/CivilResponsibilityRequests')->with('success', 'Промяната е извършена успешно!');
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
