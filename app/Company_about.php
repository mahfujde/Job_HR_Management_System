<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_about extends Model
{
     protected $table='company_abouts';

    protected $fillable=['company_id','about_company'];
}
