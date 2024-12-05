<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_profilepicture extends Model
{
     protected $table='company_profilepictures';

    protected $fillable=['company_id','profile_picture'];
}
