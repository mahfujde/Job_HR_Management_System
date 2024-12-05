<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $table='references';

    protected $fillable=['jobseeker_id','name','designation','email','organization','mobile','relation'];
}
