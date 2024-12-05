<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    protected $table='objectives';

    protected $fillable=['jobseeker_id','objective'];
}
