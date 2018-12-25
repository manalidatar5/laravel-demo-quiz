<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quizuser extends Model
{
    protected $table="Quizuser";

    protected $fillable=['Name','Score'];
}
