<?php

namespace App\Http\Controllers\Manage\Jobs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\Jobs\SendInvitesRequest;
use App\Imports\JobInvitationsImport;
use App\Jobs\SendJobInvitation;
use App\Models\JobPosting;
use App\Models\JobPostingCategory;
use App\Models\JobPostingQuestion;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = JobPosting::with(['category' , 'createdBy'])->withCount(['invitations', 'applications'])->latest()->get();

        return view('manage.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = JobPostingCategory::all();
        return view('manage.jobs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except(['questions']);

        $questionsJson = $request->input('questions');

        $decodedOnce = json_decode($questionsJson, true);

        $questions = is_string($decodedOnce) ? json_decode($decodedOnce, true) : $decodedOnce;

        $job = JobPosting::create($data); 

        if (is_array($questions)) {
            foreach ($questions as $question) {
                JobPostingQuestion::create([
                    'job_posting_id' => $job->id,
                    'question' => $question['question'] ?? '',
                    'type' => $question['type'] ?? '',
                ]);
            }
        }


        return redirect()->route('manage.jobs.invite',$job)->with('success', __('dashboard.created_successfully'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = JobPosting::with(['category' , 'createdBy' , 'applications' , 'invitations'])->withCount(['invitations', 'applications'])->where('slug', $id)->firstOrFail();

        return view('manage.jobs.show', compact('job'));
    }

    public function invite(string $id)
    {
        $job = JobPosting::with(['category' , 'createdBy'])->withCount(['invitations', 'applications'])->where('slug', $id)->firstOrFail();

        return view('manage.jobs.invite', compact('job'));
    }

    public function sendInvite(SendInvitesRequest $request, string $id)
    {
        $job = JobPosting::with(['category' , 'createdBy'])->withCount(['invitations', 'applications'])->where('slug', $id)->firstOrFail();

        if($request->filled('emails')) {
            $emails = explode(',', $request->input('emails'));
            foreach ($emails as $email) {
                SendJobInvitation::dispatch($job, $email);
            }
        }elseif($request->has('file'))
        {
            Excel::import(new JobInvitationsImport($job), $request->file('file'));
        }

        return redirect()->route('manage.jobs.index')->with('success', __('dashboard.created_successfully'));
    }

    public function changeStatus(string $id)
    {
        $job = JobPosting::where('slug', $id)->first();
        $job->update([
            'is_active' => !$job->is_active,
        ]);

        return redirect()->route('manage.jobs.index')->with('success', __('dashboard.updated_successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
