<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_sociallink extends Model
{
     protected $table='company_sociallinks';

    protected $fillable=['company_id','facebook','twiter','linkedin','website'];
}
