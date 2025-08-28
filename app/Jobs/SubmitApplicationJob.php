<?php

namespace App\Jobs;

use App\Mail\Frontend\AdminSubmitApplicationMail;
use App\Mail\Frontend\SubmitApplicationMail;
use App\Models\Admin;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class SubmitApplicationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $invitation;
    public $DBjob;

    /**
     * Create a new message instance.
     */
    public function __construct($invitation, $DBjob)
    {
        $this->invitation = $invitation;
        $this->DBjob = $DBjob;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->invitation->email)->send(new SubmitApplicationMail($this->invitation, $this->invitation->jobPosting));

        foreach (Admin::all() as $admin) {
            Mail::to($admin->email)->send(new AdminSubmitApplicationMail($this->invitation, $this->DBjob));
        }
    }
}
