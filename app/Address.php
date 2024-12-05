<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table='addresses';

    protected $fillable=['jobseeker_id','present_address','parmanent_address'];
}
