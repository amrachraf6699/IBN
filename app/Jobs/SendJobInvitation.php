<?php

namespace App\Jobs;

use App\Mail\JobInvitationMail;
use App\Models\Invitation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class SendJobInvitation implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $DBjob;
    public $email;

    /**
     * Create a new job instance.
     */
    public function __construct($DBjob, $email)
    {
        $this->DBjob = $DBjob;
        $this->email = $email;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        
        $invitation = Invitation::where('job_posting_id', $this->DBjob->id)
            ->where('email', $this->email)
            ->first();

        if (!$invitation) {
            $invitation = Invitation::create([
                'job_posting_id' => $this->DBjob->id,
                'email' => $this->email,
                'token' => $this->generateToken(),
                'expires_at' => now()->addHours($this->DBjob->invitations_expiry),
            ]);
        }else {
            $invitation->update([
                'token' => $this->generateToken(),
                'is_used' => false,
                'is_visited' => false,
                'expires_at' => now()->addHours($this->DBjob->invitations_expiry),
            ]);
        }

        Mail::to($this->email)->send(new JobInvitationMail($this->DBjob , $invitation));
    }

    protected function generateToken()
    {
        return bin2hex(random_bytes(16));
    }
}
