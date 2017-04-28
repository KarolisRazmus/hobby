<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HBPeopleHobbiesConnections extends HBCoreModel
{
    protected $table = 'hb_people';

    protected $fillable = ['people_id', 'hobbies_id'];
}
