<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lib extends Model
{
    protected $fillable = ['title','language','star'];

    //protected $guarded = ['id'];
}
