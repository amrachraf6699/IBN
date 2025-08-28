<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Team extends Model
{
    use HasFactory , HasTranslations;
    public $translatable = ['name' , 'job_title' , 'description'];

    protected $guarded = [];

    
    public function getThumbnailAttribute()
    {
        return $this->image ? asset($this->image) : asset('images/default.png');
    }
}