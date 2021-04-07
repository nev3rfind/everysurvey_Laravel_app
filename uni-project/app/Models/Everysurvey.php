<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Everysurvey extends Model //collection of surveys
{
    use HasFactory;
    protected $guarded = [];

    public function user() //user knows about the surveys 
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class); //Survey can have a lot of questions (surveys)
    }

    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }
}
