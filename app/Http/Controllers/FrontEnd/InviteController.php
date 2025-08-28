<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\SubmitInvitationRequest;
use App\Jobs\SubmitApplicationJob;
use App\Mail\Frontend\SubmitApplicationMail;
use App\Models\Application;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Mail;

class InviteController extends Controller
{
    public function index($token)
    {
        $invite = Invitation::where('token' , $token)->with(['jobPosting' , 'jobPosting.category' , 'jobPosting.questions'])->first();

        if(!$invite || $invite->jobPosting->is_active == 0)
        {
            abort(404);
        }elseif($invite->is_used)
        {
            abort(403);
        }else
        {
            if($invite->is_used)
            {
                return redirect()->route('home')->with('error' , __('frontend.already_used'));
            }

            $invite->update([
                'is_visited' => true,
                'ip_address' => request()->ip()
            ]);
        }
        
        return view('frontend.invite.index' , compact('invite'));
    }

    public function store(SubmitInvitationRequest $request , $token)
    {
        $invite = Invitation::where('token' , $token)->first();
        if(!$invite || $invite->jobPosting->is_active == 0)
        {
            return APIResponse(404 , __('frontend.invite_not_found'));
        }elseif($invite->is_used)
        {
            return APIResponse(403 , __('frontend.already_used'));
        }

        $invite->update([
            'is_used' => true,
            'ip_address' => request()->ip()
        ]);

        $application = Application::create(
            [
                'job_posting_id' => $invite->job_posting_id,
                'email' => $invite->email,
                'name' => $request->name,
                'phone' => $request->phone,
                'cv' => uploadFile($request->file('resume') , 'uploads/resumes'),
                'interview_date' => $request->interview_date,
            ]
        );

 
        // $jobPosting = $application->jobPosting;

        // $availableDates = is_string($jobPosting->interview_dates) 
        //     ? json_decode($jobPosting->interview_dates, true) 
        //     : $jobPosting->interview_dates;

        // if (!is_array($availableDates)) {
        //     return;
        // }

        // $updatedDates = array_values(array_filter($availableDates, function($date) use ($request) {
        //     return $date !== $request->interview_date;
        // }));

        // $jobPosting->update([
        //     'interview_dates' => is_string($jobPosting->interview_dates) 
        //         ? json_encode($updatedDates) 
        //         : $updatedDates
        // ]);


        $questionsData = [];

        foreach ($request->question as $key => $answer) {
            $questionsData[] = [
                'application_id' => $application->id,
                'job_posting_question_id'    => $key,
                'answer'         => $answer,
            ];
        }

        $application->questions()->createMany($questionsData);

        SubmitApplicationJob::dispatch($invite, $invite->jobPosting);

        return APIResponse(200 , __('frontend.application_submitted'));
    }
}
