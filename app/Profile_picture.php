<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_picture extends Model
{
    protected $table='profile_pictures';

    protected $fillable=['jobseeker_id','profile_picture'];
}
