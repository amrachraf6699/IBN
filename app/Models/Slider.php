<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Slider extends Model
{
    use HasFactory , HasTranslations;
    public $translatable = ['button_text' , 'image'];

    protected $guarded = [];

    public function getThumbnailAttribute()
    {
        return asset($this->image);
    }
}
