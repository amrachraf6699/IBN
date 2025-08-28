<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Mail\Manage\Jobs\JobApplicationAccepted;
use App\Mail\Manage\Jobs\JobApplicationConsidered;
use App\Mail\Manage\Jobs\JobApplicationInterviewMade;
use App\Mail\Manage\Jobs\JobApplicationInterviewScheduled;
use App\Mail\Manage\Jobs\JobApplicationRejected;
use App\Mail\Manage\Jobs\JobApplicationRetry;
use App\Models\Application;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Mail;

class ApplicationsController extends Controller
{
    public function show(Application $application)
    {
        $application->load(['jobPosting', 'questions' , 'questions.question']);

        return view('manage.applications.show', compact('application'));
    }

    public function delete(Application $application)
    {
        $application->delete();

        return redirect()->back()->with('success', __('dashboard.deleted_successfully'));
    }

    public function update(Request $request, Application $application)
    {
        $request->validate([
            'status' => 'required|in:pending,accepted,rejected,considered,interview_scheduled,interview_made',
        ]);

        $application->update([
            'status' => $request->status,
        ]);

        if($application->status == 'accepted') {
            $application->jobPosting->update([
                'is_active' => false,
            ]);     

            $application->jobPosting->applications()->where('id', '!=', $application->id)->update([
                'status' => 'not_selected',
            ]);

            Mail::to($application->email)->send(new JobApplicationAccepted($application , $application->jobPosting));

        }elseif($application->status == 'rejected') {
            Mail::to($application->email)->send(new JobApplicationRejected($application , $application->jobPosting));
        }elseif($application->status == 'considered') {
            Mail::to($application->email)->send(new JobApplicationConsidered($application , $application->jobPosting));
        }elseif($application->status == 'interview_scheduled') {

            $jobPosting = $application->jobPosting;

            $availableDates = is_string($jobPosting->interview_dates) 
                ? json_decode($jobPosting->interview_dates, true) 
                : $jobPosting->interview_dates;

            if (!is_array($availableDates)) {
                return;
            }

            $updatedDates = array_values(array_filter($availableDates, function($date) use ($request) {
                return $date !== $request->interview_date;
            }));

            $jobPosting->update([
                'interview_dates' => is_string($jobPosting->interview_dates) 
                    ? json_encode($updatedDates) 
                    : $updatedDates
            ]);

            $other_applications_with_same_date = $application->jobPosting->applications()
                ->where('id', '!=', $application->id)
                ->where('interview_date', $request->interview_date)
                ->get();

            foreach ($other_applications_with_same_date as $other_application) {
                $the_invitation_of_application = Invitation::where('job_posting_id', $other_application->job_posting_id)
                    ->where('email' , $other_application->email)
                    ->get();
                foreach ($the_invitation_of_application as $invitation) {
                    $invitation->update([
                        'is_used' => false,
                    ]);
                }
                $other_application->delete();

                Mail::to($other_application->email)->send(new JobApplicationRetry($other_application , $other_application->jobPosting));
            }

            Mail::to($application->email)->send(new JobApplicationInterviewScheduled($application , $application->jobPosting));
        }elseif($application->status == 'interview_made') {
            Mail::to($application->email)->send(new JobApplicationInterviewMade($application , $application->jobPosting));
        }


        return redirect()->back()->with('success', __('dashboard.updated_successfully'));
    }

    public function setTime(Request $request, Application $application)
    {
        $request->validate([
            'interview_date' => 'required|date',
        ]);;

        $application->update([
            'interview_date' => $request->interview_date,
            'status' => 'interview_scheduled',
        ]);

        Mail::to($application->email)->send(new JobApplicationInterviewScheduled($application , $application->jobPosting));
        return redirect()->back()->with('success', __('dashboard.updated_successfully'));
    }
}
