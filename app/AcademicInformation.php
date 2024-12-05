<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicInformation extends Model
{
    protected $table='academic_informations';

    protected $fillable=['jobseeker_id','level_education','major_subject','institution_name','result','pass_year'];




}
