<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigationofficer extends Model
{
  protected $fillable= ['name','gender','age','contact','city','rank'];
  public static function iname($id)
    {
      $name=Investigationofficer::find($id);
      return ($name['name']);
    }

}
