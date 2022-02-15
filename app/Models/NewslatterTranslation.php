<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewslatterTranslation extends Model
{
    protected $fillable = ['title', 'text', 'date', 'img', 'source'];
    public $timestamps = false;
    public $translatedAttributes = ['title', 'text', 'date', 'img', 'source'];
}
