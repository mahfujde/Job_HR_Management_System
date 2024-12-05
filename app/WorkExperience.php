<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $table='work_experiences';

    protected $fillable=['jobseeker_id','company_name','designation','responsibilities','join_date','resign_date','company_address'];
}
