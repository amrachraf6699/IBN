<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Service extends Model
{
    use HasFactory , HasTranslations;
    public $translatable = ['title' , 'description' , 'content'];

    protected $guarded = [];

        protected static function boot()
    {
        parent::boot();

        static::creating(function ($service) {
            $slug = \Str::slug($service->getTranslation('title', 'en'));
            $originalSlug = $slug;
            $count = 1;

            while (static::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $service->slug = $slug;
        });
    }

    
    public function getThumbnailAttribute()
    {
        return $this->image ? asset($this->image) : asset('images/default.png');
    }

    public function getIconPathAttribute()
    {
        return $this->icon ? asset($this->icon) : $this->getThumbnailAttribute();
    }
}
