<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThesisProject extends Model
{
    protected $table='thesis_projects';

    protected $fillable=['jobseeker_id','date','title'];
}
