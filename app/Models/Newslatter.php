<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Newslatter extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    protected $guarded = ['id'];
    public $translatedAttributes = ['title', 'text', 'date', 'img', 'source', 'source_link'];
}
