<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_post extends Model
{
    protected $table='job_posts';

    protected $fillable=['job_title','job_description','company_name','address','job_responsibilities','job_location','salary','employment_status','educational_requirements','experience_requirements','key_skills','vacancy_no','curcular_date','deadline'];
}
