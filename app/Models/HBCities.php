<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HBCities extends HBCoreModel
{
    protected $table = 'hb_cities';

    protected $fillable = ['name'];
}
