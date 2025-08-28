<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Client extends Model
{
    use HasFactory , HasTranslations;
    public $translatable = ['title' , 'description'];

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($client) {
            $slug = \Str::slug($client->getTranslation('title', 'en'));
            $originalSlug = $slug;
            $count = 1;

            while (static::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $client->slug = $slug;
            
            $client->added_by = auth()->user()->id;
        });

        static::updating(function ($client) {
            $client->added_by = auth()->user()->id;
        });
    }

    public function getThumbnailAttribute()
    {
        return $this->image ? asset($this->image) : asset('images/default.png');
    }

    public function addedBy()
    {
        return $this->belongsTo(Admin::class, 'added_by');
    }
}
