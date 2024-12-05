<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table='languages';

    protected $fillable=['jobseeker_id','language','writing','reading','speaking'];
}
