<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HBHobbies extends HBCoreModel
{
    protected $table = 'hb_people';

    protected $fillable = ['name'];
}
