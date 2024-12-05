<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seekereducation extends Model
{
    protected $table='seekereducations';

    protected $fillable=['jobseeker_id','education_info'];
}
