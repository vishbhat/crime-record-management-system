<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petitioner extends Model
{
    protected $fillable= ['name','gender','age','contact','city'];
}
