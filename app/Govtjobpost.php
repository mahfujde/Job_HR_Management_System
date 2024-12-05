<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Govtjobpost extends Model
{
    protected $table='govtjobposts';

    protected $fillable=['agency_name','job_title','vacancy_no','description','picture','publish_date','deadline'];
}
