<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lockup extends Model
{
  protected $fillable= ['type','capacity','current_space'];
}
