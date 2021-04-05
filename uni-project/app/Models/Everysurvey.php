<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Everysurvey extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user() //user knows about the surveys 
    {
        return $this->belongsTo(User::class);
    }
}
