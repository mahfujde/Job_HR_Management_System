<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraActivitie extends Model
{
    protected $table='extra_activities';

    protected $fillable=['jobseeker_id','extra_title','extra_details','edate','location'];
}
