<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingCertification extends Model
{
    protected $table='training_certifications';

    protected $fillable=['jobseeker_id','training_title','training_institution','training_location','training_duration'];
}
