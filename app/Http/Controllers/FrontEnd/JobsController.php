<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Jobs\SendJobInvitation;
use App\Models\JobPosting;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $job_ranges = ['0-30000' , '30000-50000' , '50000-80000' , '80000-100000' , '100001'];
        $jobs = JobPosting::query()->public()->active()
        ->when(request('search'), function ($query) {
            $query->where('title', 'like', '%' . request('search') . '%');
        })
        ->when(request('salary'), function ($query) {
            $salary = request('salary');
            if ($salary === '100001') {
            $query->where('salary', '>=', 100001);
            } elseif (preg_match('/^(\d+)-(\d+)$/', $salary, $matches)) {
            $min = (int)$matches[1];
            $max = (int)$matches[2];
            $query->whereBetween('salary', [$min, $max]);
            }
        })
        ->with(['category', 'questions'])->latest()->paginate(10);

        return view('frontend.jobs.index', compact('jobs'));
    }

    public function show(JobPosting $job)
    {
        $job->load(['category', 'questions']);
        return view('frontend.jobs.show', compact('job'));
    }

    public function apply(JobPosting $job, Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $existingInvitation = $job->invitations()->where('email', $request->email)->first();
        if ($existingInvitation) {
            return redirect()->route('home')->with('error', __('frontend.already_applied'));
        }

        $job->invitations()->create([
            'email' => $request->email,
            'token' => $this->generateToken(),
            'expires_at' => now()->addDays($job->invitations_expiry),
        ]);

        SendJobInvitation::dispatch($job, $request->email);

        return redirect()->route('home')->with('success', __('frontend.check_your_email'));
    }

    protected function generateToken()
    {
        return bin2hex(random_bytes(16));
    }
}
