<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accused extends Model
{
    protected $fillable= ['name','gender','age','contact','city'];
}
