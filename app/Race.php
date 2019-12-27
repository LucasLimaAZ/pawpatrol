<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $table = 'races';

    protected $fillable = [
        'name', 'description'
    ];

    public function dogs()
    {
        return $this->morphedByMany("App\Dog", "Dogs");
    }
}
