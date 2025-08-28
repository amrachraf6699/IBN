<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'interview_date' => 'datetime',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->attributes['uuid'])) {
                $model->attributes['uuid'] = (string) \Illuminate\Support\Str::uuid();
            }
        });
    }

    public function jobPosting()
    {
        return $this->belongsTo(JobPosting::class);
    }

    public function questions()
    {
        return $this->hasMany(ApplicationQuestion::class , 'application_id');
    }
}
