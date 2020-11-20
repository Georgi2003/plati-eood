<?php

namespace App\Http\Controllers;

use App\Models\CivilResponsibilityRequest;
use App\Models\User;
use App\Models\Message;
use App\Http\Requests\CivilResponsibilityRequestPost;
use App\Mail\Email;
use Illuminate\Http\Request;
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
        $CivilResponsibilityRequests = CivilResponsibilityRequest::with(['messages', 'messages.user'])->get();
        $unassigned = CivilResponsibilityRequest::getUnassignedRequestsByUser();
        $processed = CivilResponsibilityRequest::getProcessedRequestsByUser();
        $completed = CivilResponsibilityRequest::getCompletedRequestsByUser();
        $archived = CivilResponsibilityRequest::getArchivedRequestsByUser();
        $allRequests = CivilResponsibilityRequest::all();
        $users = User::all();
        $messages = Message::all();
        //dd($CivilResponsibilityRequests);
        
        return view('CivilResponsibilityRequests.index', [
            'allCivilResponsibilityRequests' => $CivilResponsibilityRequests,
            'unassigned' => $unassigned,
            'processed' => $processed,
            'completed' => $completed,
            'archived' => $archived,
            'allRequests' => $allRequests,

            'allUsers' => $users,
            'allMessages' => $messages,
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
     * @param  \Illuminate\Http\CivilResponsibilityRequestPost  $request
     * @param  \App\Models\CivilResponsibilityRequest  $civilResponsibilityRequest
     * @return \Illuminate\Http\Response
     */
    public function update(CivilResponsibilityRequestPost $request, $id)
    {
        $civilResponsibilityRequest = CivilResponsibilityRequest::find($id);

        if(!$request['user_id'] == 0)
        {
            $civilResponsibilityRequest->user_id = $request['user_id'];

            /* mail */
            $this->Mail($civilResponsibilityRequest->user->name, $civilResponsibilityRequest->user->email);
        }
        
        $civilResponsibilityRequest->status = $request['status'];

        $civilResponsibilityRequest->save();

        return redirect('/CivilResponsibilityRequests')->with('success', 'Промяната е извършена успешно!');
    }

    /* mail */
    private function Mail($receiver, $userMail)
    {
        $mail = new \stdClass();
            $mail->sender = '„Плати“ ООД';
            $mail->receiver = $receiver;
     
            Mail::to($userMail)->send(new Email($mail));
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
