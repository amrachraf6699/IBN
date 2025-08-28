<?php

namespace App\Imports;

use App\Jobs\SendJobInvitation;
use App\Models\JobPosting;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class JobInvitationsImport implements ToCollection, WithHeadingRow
{
    public $job;

    public function __construct(JobPosting $job)
    {
        $this->job = $job;
    }

    /**
     * @param Collection $rows
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $email = $row['email'] ?? null;
            
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                SendJobInvitation::dispatch($this->job, $email);
            }
        }
    }
}
