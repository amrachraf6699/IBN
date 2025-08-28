<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class JobPostingQuestion extends Model
{
    use HasFactory , HasTranslations;

    public $translatable = ['question'];

    protected $guarded = [];

    public function job()
    {
        return $this->belongsTo(JobPosting::class);
    }
}
