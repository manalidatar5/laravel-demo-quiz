<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable=['Answer1','Answer2','Answer3','Answer4'];




}
