<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seekerabout extends Model
{
   protected $table='seekerabouts';

    protected $fillable=['jobseeker_id','about_me'];
}
