<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_coverpicture extends Model
{
     protected $table='company_coverpictures';

    protected $fillable=['company_id','cover_picture'];
}
