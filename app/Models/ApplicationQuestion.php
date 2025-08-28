<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ApplicationQuestion extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function application()
    {
        return $this->belongsTo(Application::class , 'application_id');
    }

    public function question()
    {
        return $this->belongsTo(JobPostingQuestion::class , 'job_posting_question_id');
    }
}
