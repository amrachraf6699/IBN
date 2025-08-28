<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class JobPosting extends Model
{
    use HasFactory , HasTranslations;

    public $translatable = ['title', 'description', 'terms', 'location'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $slug = \Str::slug($blog->getTranslation('title', 'en'));
            $originalSlug = $slug;
            $count = 1;

            while (static::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $blog->slug = $slug;
            
            $blog->created_by = auth()->user()->id;
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopePublic($query)
    {
        return $query->where('is_public', true);
    }

    public function category()
    {
        return $this->belongsTo(JobPostingCategory::class , 'job_posting_category_id');
    }

    public function questions()
    {
        return $this->hasMany(JobPostingQuestion::class);
    }

    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
}
