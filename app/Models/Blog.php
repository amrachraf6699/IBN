<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory , HasTranslations;

    public $translatable = ['title' , 'description' , 'content'];

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

    public function getThumbnailAttribute()
    {
        return $this->image ? asset($this->image) : asset('images/default.png');
    }
}
