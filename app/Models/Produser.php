<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Produser extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    protected $guarded = ['id'];
    public $translatedAttributes = ['locale', 'name', 'short_desc', 'desc', 'small_img', 'img', 'produser_id'];
}
