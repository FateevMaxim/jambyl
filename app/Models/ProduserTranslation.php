<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduserTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['locale', 'name', 'short_desc', 'desc', 'small_img', 'img', 'produser_id'];
}
