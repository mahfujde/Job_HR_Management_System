<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    
     protected $table='personal_informations';

    protected $fillable=['jobseeker_id','first_name','last_name','father_name','mother_name','bdate','gender','religion','mstatus','nationality','bath_id','passport','mobile_number','email'];
}
