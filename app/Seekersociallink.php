<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seekersociallink extends Model
{
    protected $table='seekersociallinks';

    protected $fillable=['jobseeker_id','facebook','twiter','linkedin'];
}
