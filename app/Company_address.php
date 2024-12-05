<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_address extends Model
{
     protected $table='company_addresses';

    protected $fillable=['company_id','company_address'];
}
