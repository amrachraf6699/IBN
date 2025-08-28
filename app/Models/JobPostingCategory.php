<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class JobPostingCategory extends Model
{
    use HasFactory , HasTranslations;
    public $translatable = ['title'];

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $slug = \Str::slug($blog->getTranslation('title', 'en'));
            $originalSlug = $slug;
            $count = 1;

            while (self::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
            }

            $blog->slug = $slug;
        });
    }

    public function jobs()
    {
        return $this->hasMany(JobPosting::class);
    }
}
