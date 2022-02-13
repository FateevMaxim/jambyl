<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActorTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['locale', 'name', 'role', 'short_desc', 'desc', 'small_img', 'img', 'actor_id'];
}
