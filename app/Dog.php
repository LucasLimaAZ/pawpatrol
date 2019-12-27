<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dog extends Model
{
    protected $table = 'dogs';

    protected $fillable = [
        'name', 'age', 'race_id'
    ];

    public function race()
    {
        return $this->belongsTo(Race::class);
    }
}
