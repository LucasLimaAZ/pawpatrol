<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    protected $table = 'vaccines';

    protected $fillable = [
        "name", "dog_id"
    ];
}
