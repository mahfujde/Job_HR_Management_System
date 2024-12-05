<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessionalExpertise extends Model
{
    protected $table='professional_expertises';

    protected $fillable=['jobseeker_id','skill'];
}
