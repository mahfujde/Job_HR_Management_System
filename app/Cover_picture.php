<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cover_picture extends Model
{
    protected $table='cover_pictures';

    protected $fillable=['jobseeker_id','cover_picture'];
}
