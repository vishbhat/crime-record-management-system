<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $fillable= ['name','io_id','fir_no','case_status','case_disc'];
    
}
