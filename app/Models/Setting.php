<?php

namespace App\Models;

use App\Traits\HasLocalizedArray;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory , HasTranslations , HasLocalizedArray;

    protected $guarded = [];

    public $translatable = ['name','description','keywords','address'];
}
